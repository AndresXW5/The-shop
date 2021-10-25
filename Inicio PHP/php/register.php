<?php

$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];

echo "El correo introducido es " .$correo. " y la contrasena es " .$contraseña . "<br>";

include '/bd.php';

if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido correctamente la conexion a la base de datos <br>";

    $sql="INSERT INTO `daw2`.`Alumnos` (`correo`, `contraseña`) VALUES ('".$correo."', '".$contraseña."')";
    
    $consulta=mysqli_query($con,$sql);

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        echo "El insert se ha realziado correctamente.";
    }
}


?>