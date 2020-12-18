<?php
    if(isset($_POST["botonAsignar"])){
        $id = $fila['idCita'];
            $documento = $_POST['documento'];
            $transaccion = new BaseDatos();
            $consultaSQL = "call sp_agendarCita($id, $documento)";                                                        
            $transaccion->escribirDatos($consultaSQL);
    }

?>