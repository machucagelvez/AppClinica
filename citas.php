<?php
    include("BaseDatos.php");
    $respuesta=null;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica del Dolor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php"><strong>Clínica del Dolor</strong></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-info mr-3 mt-1" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-info mr-3 mt-1" href="citas.php"><Strong>Citas</Strong></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-info mr-3 mt-1" href="#">Gestión Interna</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-info mt-1" href="#">Contacto</a>
                    </li>
                </ul>
            </div>   
        </nav>       
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-md-11 mt-5">
                    <div class="card mt-5 border border-primary">
                        <h5 class="card-header text-center bg-primary text-white">Busqueda y Filtrado</h5>
                        <div class="card-body">
                            <form action="citas.php" method="POST">    
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="filtroIdentificacion" id="cbIdentificacion" onchange="controlarFiltroIdentificacion();">
                                                <label class="form-check-label" for="gridCheck">
                                                    <strong>Filtrar por documento del paciente</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  disabled checked>
                                            <label class="form-check-label" for="gridCheck">
                                                <p><strong>Filtrar por estado de la cita</strong></p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="filtroFecha" id="cbFecha" onchange="controlarFiltroFecha();">
                                            <label class="form-check-label" for="gridCheck">
                                                <p><strong>Filtrar por fecha</strong></p> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><input type="number" class="form-control" name="identificacionPaciente" placeholder="Identificación paciente" id="identificacionPaciente" required readonly></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <select name="estadoCita" class="form-control" required>
                                                <option selected>Sin agendar</option>
                                                <option>Agendadas</option>
                                            </select>
                                        </p>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" name="fechaCitas" id="fechaCitas" required readonly>
                                    </div>                            
                                </div>
                                <p class="text-center"><button name="btnBuscar" type="submit" class="btn btn-primary col-md-5 mt-3">Buscar</button></p>                        
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <?php if(isset($_POST['btnBuscar'])): ?>
                        <?php
                            //filtro estado cita
                            if($_POST['estadoCita']=='Sin agendar'){
                                $filtroEstado = '1';
                            }
                            else if($_POST['estadoCita']=='Agendadas'){
                                $filtroEstado = '2';
                            }
                            else{
                                $filtroEstado = '3';
                            }

                            
                            //filtro identificacion
                            if(isset($_POST['filtroIdentificacion'])){
                                $filtroDocumento = '1';
                                $documento = $_POST['identificacionPaciente'];         
                            }
                            else{
                                $filtroDocumento = '2';
                            }

                            //filtro fecha
                            if(isset($_POST['filtroFecha'])){
                                $filtroFecha = '1';
                                $fechaBuscar = $_POST['fechaCitas'];
                            }
                            else{
                                $filtroFecha = '2';
                            }
                            //echo "<br>Filtro documento:$filtroDocumento";
                            //echo "<br>Filtro fecha:$filtroFecha";
                            //echo "<br>Filtro estado:$filtroEstado";

                            //evaluamos las condiciones para saber que procedimiento almacenado usar
                            if($filtroEstado=='1' && $filtroFecha=='2' && $filtroDocumento=='2'){
                                $consultaSQL = "call sp_listarCitasDisponibles";
                            }
                            else if($filtroEstado=='2' && $filtroFecha=='2' && $filtroDocumento=='2'){
                                $consultaSQL = "call sp_listarCitasAgendadas";
                            }
                            else if($filtroEstado=='1' && $filtroFecha=='1' && $filtroDocumento=='2'){
                                $consultaSQL = "call sp_listarDisponiblesFecha('$fechaBuscar')";
                            }
                            else if($filtroEstado=='2' && $filtroFecha=='1' && $filtroDocumento=='2'){
                                $consultaSQL = "call sp_listarAgendadasFecha('$fechaBuscar')";
                            }
                            else if($filtroEstado=='2' && $filtroFecha=='2' && $filtroDocumento=='1'){
                                $consultaSQL = "call sp_listarCitaDocumento($documento)";
                            }
                            else if($filtroEstado=='2' && $filtroFecha=='1' && $filtroDocumento=='1'){
                                $consultaSQL = "call sp_listarDocumentoFecha($documento,'$fechaBuscar')";
                            }
                            else{
                                echo 'error de filtros';
                                
                                return;
                            }

                            $conexion = new BaseDatos();
                            $listado = $conexion->leerDatos($consultaSQL);
                            if($listado){
                                $respuesta='1';
                            }
                            else{
                                $respuesta='2';
                            }

                        ?>
                        <?php if($respuesta=='1'): ?>
                            <h2>Funciona</h2>
                        <?php endif ?>
                        <?php if($respuesta=='2'): ?>
                            <div class="card text-center mb-5 mt-5 border border-primary">
                            <h5 class="card-header text-center bg-primary text-white">Busqueda ejecutada</h5>
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert">
                                        <p class="text-dark mt-3"><strong>No se encontraron citas al realizar la consulta</strong></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
                      
        </div>
   
    </main>
    <footer>
    </footer>
    <script src="controlador.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>