<?php

include("BaseDatos.php");

    if(isset($_POST["botonAsignar"])){
        $id = $_GET["id"];
        $documento = $_POST['documento'];
        $hora = $_POST['hora'];
        $consultorio = $_POST['consultorio'];
        $medico = $_POST['medico'];
        $transaccion = new BaseDatos();
        $buscarPaciente = "call sp_buscarPaciente($documento)";
        $busquedadPaciente = $transaccion->leerDatos($buscarPaciente);
    
        if($busquedadPaciente){
            
            $consultaSQL = "call sp_agendarCita($id, $documento)";   
            $transaccion2 = new BaseDatos();                                                     
            $transaccion2->escribirDatos($consultaSQL);
            if ($transaccion2) {
                session_start();
                $_SESSION['respuesta'] = 1;
                $_SESSION['documento'] = $documento;
                $_SESSION['hora'] = $hora;
                $_SESSION['consultorio'] = $consultorio;
                $_SESSION['medico'] = $medico;
            }
            
            
            
        }
        else {
            session_start();
            $_SESSION['respuesta'] = 0;
        }
        
        header("location: agendado.php");
    }

?>