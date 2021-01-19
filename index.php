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
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
            <button class="navbar-toggler btn btn-danger" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <strong>Presionar</strong>
            </button>
            <a class="navbar-brand text-white" href="index.php"><strong>Clínica del Dolor</strong></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-light mr-3 mt-1" href="index.php"><strong>Inicio</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light mr-3 mt-1" href="citas.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light mr-3 mt-1" href="#">Gestión Interna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light  mr-3 mt-1" href="#">Contacto</a>
                    </li>
                </ul>
            </div>   
        </nav>       
    </header>

    <main>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/medicos2.jpg" class="d-block w-100" alt="medicos">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uso de tapabocas</h5>
                                <p>Cúbrase la boca y la nariz con una mascarilla cuando está con otras personas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/covid.jpg" class="d-block w-100" alt="covid">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Lavado de manos</h5>
                                <p class="text-dark">Por lo menos cada tres horas con agua y jabón durante 20 segundos.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/controla_tu_salud.jpg" class="d-block w-100" alt="salud">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Monitoree su salud a diario</h5>
                                <p class="text-dark">1. Esté atento a los síntoma.</p>
                                <p class="text-dark">2. Controle su temperatura.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>                            
            </div>
        </div>
    </main>
    <br>

    <footer class="bg-primary text-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-3 text-right mt-2">
                    <address>
                        Clínica del Dolor <br>
                        Todos los derechos reservados <br>
                        Medellín, 2020
                    </address>                  
                </div>
                <div class="col-12 col-md-3 text-md-left text-right mb-2">
                    <a href="https://www.instagram.com/" class="mr-2" target="_blank">
                    <img src="https://img.icons8.com/fluent/36/000000/instagram-new.png"/>
                    </a>
                    <a href="https://es-la.facebook.com/" class="mr-2" target="_blank">
                    <img src="https://img.icons8.com/ios/32/000000/facebook--v1.png"/>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                    <img src="https://img.icons8.com/ios-filled/32/000000/twitter-squared.png"/>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>