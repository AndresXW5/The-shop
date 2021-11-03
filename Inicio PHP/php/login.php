<?php
$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];

echo "El usuario " .$correo. " con contrasena " .$contraseña . " ha fallado el inicio de sesion<br>";

//--------------------
// $servidor="localhost";
// $usuario="root";
// $password="usbw";
// $bd="daw2";
// $con=mysqli_connect($servidor,$usuario,$password,$bd);

//Esto es para no tener que poner los datos de la base de datos todo el tiempo, hay que crear un archivo php para guardar esos datos
include '/bd.php';

if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
       
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido correctamente la conexion a la base de datos <br>";
    
    echo "<br>";

    //Comprobacion de contraseña
    $sql2="SELECT `correo` , `contraseña`,`admin` FROM `alumnos` WHERE `correo` = '$correo' AND `Contraseña` = '$contraseña'";

    $consulta=mysqli_query($con,$sql2);

    if(!$consulta){
        die("<br>No se ha podido realizar el SELCT"); 
    }else{

        $fila=$consulta->fetch_assoc();

            if ($contraseña == $fila["contraseña"] && 1 == $fila["admin"]) {
                header("Location: ./catalogo_admin.php");
            }
 
            else if ($contraseña == $fila["contraseña"]){
                header("Location: ./perfil.php?correo=" . $correo);
            } 

            if ($contraseña =! $fila["contraseña"]){
                header("Location: ../html/loginErrores/errLogin.html");
            }
  
    }

    }


?>

