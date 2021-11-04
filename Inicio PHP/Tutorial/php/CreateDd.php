<?php

include '/bd.php';

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
    $bd ="daw2"
    $tablename ="productos";
    ){
        $this->bd = $bd;
        $this->tablename = $tablename;
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->pasword = $password;

        //create conection
        $this->con = mysqli_connect($servidor, $usuario, $password);

        //check
        if(!$this->con){
            die("Error de conexión" . mysqli_connect_error());
        }

        //consulta
        // sql="CREATE DA"


    }




}

// public function getData(){
//     $sql3= "SELECT * FROM `productos`";

//     $consulta=mysqli_query($con,$sql3);

//     if (mysqli_num_rows($consulta) > 0) {
//         return $consulta;
//     }
//     }


?>