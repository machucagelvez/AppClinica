<?php

include("BaseDatos.php");

    if(isset($_POST["botonCancelar"])){
        $id = $_GET["id"];
        $paciente = $_POST['paciente'];
        $documento = $_POST['documento'];
        $hora = $_POST['hora'];
        $consultorio = $_POST['consultorio'];
        $medico = $_POST['medico'];
        $transaccion = new BaseDatos();
        $consultaSQL = "UPDATE cita SET estadoCita = 'disponible', idPacienteCita = null where idCita = $id";                                                        
        $transaccion->escribirDatos($consultaSQL);
        session_start();
        
        if ($transaccion) {
            $_SESSION['respuesta'] = 1;
            $_SESSION['paciente'] = $paciente;
            $_SESSION['documento'] = $documento;
            $_SESSION['hora'] = $hora;
            $_SESSION['consultorio'] = $consultorio;
            $_SESSION['medico'] = $medico;
        }
        else {
            $_SESSION['respuesta'] = 0;
        }
        header("location: cancelado.php");
    }

?>