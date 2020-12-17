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
            <a class="navbar-brand" href="#"><strong>Clínica del Dolor</strong></a>
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
                            <form>
                                <div class="row row-cols-md-2 justify-content-center">
                                    <div class="col">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Filtar por documento
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Listado general
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Filtrar por estado cita
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Filtrar por fecha
                                                </label>
                                            </div>
                                        </div>
                                    </div>                                                            
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="number" class="form-control" id="inputCity" placeholder="Identificación paciente">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select id="inputState" class="form-control">
                                            <option selected>Estado cita</option>
                                            <option>Sin asignar</option>
                                            <option>Asignada</option>
                                            <option>Todas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="date" class="form-control" id="inputZip" placeholder="Fecha">
                                    </div>                            
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-primary col-md-5">Buscar</button></p>                        
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                      
        </div>
   
    </main>

    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>