<?php

include("BaseDatos.php");

    if(isset($_POST["botonAsignar"])){
        $id = $_GET["id"];
        $documento = $_POST['documento'];
        $hora = $_POST['hora'];
        $consultorio = $_POST['consultorio'];
        $medico = $_POST['medico'];
        $transaccion = new BaseDatos();
        $consultaSQL = "call sp_agendarCita($id, $documento)";                                                        
        $transaccion->escribirDatos($consultaSQL);
        session_start();
        
        if ($transaccion) {
            $_SESSION['respuesta'] = 1;
            $_SESSION['documento'] = $documento;
            $_SESSION['hora'] = $hora;
            $_SESSION['consultorio'] = $consultorio;
            $_SESSION['medico'] = $medico;
        }
        else {
            $_SESSION['respuesta'] = 0;
        }
        header("location: agendado.php");
    }

?>