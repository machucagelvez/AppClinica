<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica del Dolor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="#">Clínica del Dolor</a>
                <div class="row">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-secondary mr-3 mt-1" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-secondary mr-3 mt-1" href="#">Reserva</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-secondary mr-3 mt-1" href="#">Gestión Interna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-secondary mt-1" href="#">Contacto</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </nav>       
    </header>

    <main>
        <div class="container">
            
                <div class="card mt-3">
                    <h5 class="card-header text-center">Busqueda y Filtrado</h5>
                    <div class="card-body">
                    <form>
                        <div class="row row-cols-2 justify-content-center">
                            <div class="col">
                                <div class="form-check">
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
                                <input type="text" class="form-control" id="inputCity" placeholder="Identificación paciente">
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control">
                                    <option selected>Estado cita</option>
                                    <option>Sin asignar</option>
                                    <option>Asignada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="inputZip" placeholder="Fecha">
                            </div>                            
                        </div>                        
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                </div>
            
        </div>
        
    </main>

    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
=======
<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
>>>>>>> 6bee62475e1d8b87eceb9a4393df21b1bd94e1d4
</html>