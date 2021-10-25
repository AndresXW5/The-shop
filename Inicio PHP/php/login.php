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
    $sql2="SELECT `correo` , `contraseña` FROM `alumnos` WHERE `correo` = '$correo' AND `Contraseña` = '$contraseña'";

    $consulta=mysqli_query($con,$sql2);

    if(!$consulta){
        die("<br>No se ha podido realizar el SELCT");
        
    }else{

        $fila=$consulta->fetch_assoc();
            if ($contraseña == $fila["contraseña"]){
                header("Location: ./perfil.php?correo=" . $correo);
            }

        
    }




//Lo del tutorial
/*    
    $select="SELECT * FROM ALUMNOS";

    $consulta=mysqli_query($con,$select);

    $fila=mysqli_fetch_row($consulta);

    echo $fila[0];
    echo $fila[1];
    echo $fila[2];
    echo $fila[3];

    echo "<br>";

    if($sql != $correo){
        echo "La contrasena es incorrecta";
    }else if($sql[`correo`] == $correo){
        echo "Se ha iniciado sesion correctamente";
    }


    echo "<br>";
    if(!$consulta){
        die("No se ha podido realizar el SELCT");
    }else{
        echo "El SELECT se ha realziado correctamente.";
    }
*/
    }

?>

