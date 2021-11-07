<?php

// include '/bd.php';

class CreateDb{

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
    $tablename ="test"
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

        
        //Ejecutar consulta
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servidor, $usuario, $password);

            //Crear nueva tabla
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR (25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR (100)
            
            );";

            if (!mysqli_query($this->con, $sql)) {
                echo "Error creando la tabla: " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    /**/  

    }

    public function getData(){
        $sql= "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
        // return $a + $b;
    
    }


}

    


?>