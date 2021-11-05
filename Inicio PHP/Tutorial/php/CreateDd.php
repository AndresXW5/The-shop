<?php

// include '/bd.php';

class CreateDd{

    public $servidor;
    public $usuario;
    public $password;
    public $bd;
    public $tablename;
    public $con;

    public function __construct(
    $servidor ="localhost",
    $usuario ="root",
    $password ="usbw",
    $bd ="daw2",
    $tablename ="productos"
    ){
        $this->bd = $bd;
        $this->tablename = $tablename;
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->pasword = $password;

        //create conection
        $this->con = mysqli_connect("localhost","root","usbw");

        //check
        if(!$this->con){
            die("Error de conexión" . mysqli_connect_error());
        }

        //consulta
        $sql="CREATE DATABASE IF NOT EXISTS $bd";

        /*
        //Ejecutar consulta
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servidor, $usuario, $password, $bd);

            //Crear nueva tabla
            $sql = "CREATE TABLE IF NOT EXISTS $tablename


            ";

            if (!mysqli_query($this->con, $sql)) {
                echo "Creando la tabla: " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
        */

    }




}

 function getData(){
    $sql= "SELECT * FROM '$this->tablename'";

    $result=mysqli_query($this->con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    }


?>