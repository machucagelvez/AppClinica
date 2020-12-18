<?php
class BaseDatos{
    
    public $usuarioBD = "root";
    public $passwordBD = "";

    public function __construct()
    {
        
    }

    public function conectarBD(){
        
        $infoBD = "mysql:host=localhost;dbname=clinica";

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