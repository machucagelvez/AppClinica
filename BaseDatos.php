<?php
class BaseDatos{
    
    public $usuarioBD = "ottos_27688956";
    public $passwordBD = "8bsrh7pk";

    public function __construct()
    {
        
    }

    public function conectarBD(){
        
        $infoBD = "mysql:host=sql313.tonohost.com;dbname=ottos_27688956_clinica";

        try{
            $conexionBD = new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
            return $conexionBD;
        }
        catch(PDOException $error){
            echo($error->getMessage());
        }
    }

    public function escribirDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $queryEscribirDatos = $conexionBD->prepare($consultaSQL);
        $resultado = $queryEscribirDatos->execute();

        if($resultado){
            return true;
        }
        else{
            //print_r($queryEscribirDatos->errorInfo());
            return false;
        }
    }

    public function leerDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $queryListarDatos = $conexionBD->prepare($consultaSQL);

        $queryListarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $resultado = $queryListarDatos->execute();
        
        return ($queryListarDatos->fetchAll());
    }
}
?>