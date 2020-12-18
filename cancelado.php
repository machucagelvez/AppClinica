<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica del Dolor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-white" href="index.php"><strong>Clínica del Dolor</strong></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                
            </div>   
        </nav>       
    </header>

    <main>
        <br>
        <br>
        <br>

        <?php
            session_start();
            $respuesta = $_SESSION['respuesta'];
            if ($respuesta==1) { 
            ?>
                <div class="container mt-5">
                    <div class="row justify-content-center mt-5 mb-5">
                        <div class="card">
                            <div class="card-header bg-primary text-white font-weight-bold">
                                Cita cancelada existosamente
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                <p>Paciente: <?= $_SESSION['paciente'] ?></p>    
                                <p>Documento: <?= $_SESSION['documento'] ?></p>
                                <p>Hora cita: <?= $_SESSION['hora'] ?></p>
                                <p>Consultorio: <?= $_SESSION['consultorio'] ?></p>
                                <p>Nombre médico: <?= $_SESSION['medico'] ?></p>
                                <a href="citas.php" class="btn btn-primary">Aceptar</a>
                                </blockquote>                                
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
            }
            else {
                $resultado = "Falló";
            }
            
        ?>
            


    </main>

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
                    <a href="..." class="mr-2" target="_blank">
                    <img src="https://img.icons8.com/fluent/36/000000/instagram-new.png"/>
                    </a>
                    <a href="..." class="mr-2" target="_blank">
                    <img src="https://img.icons8.com/ios/32/000000/facebook--v1.png"/>
                    </a>
                    <a href="..." target="_blank">
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