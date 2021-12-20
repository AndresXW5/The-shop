<?php

//Declaracion variables para almacenar datos
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$fecha = $_POST['fecha'];
$admin = $_POST['admin'];

echo "El nombre del producto es " . $nombre. 
"<br>El ID es: " .$id.
"<br>Marca: " .$apellido. 
"<br>Tipo: " .$edad .
"<br>Precio: " .$correo.
"<br>Imagen: " .$contraseña
;

require_once "../bd.php";

    //Consulta
    if(!$con){
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }else{  
        mysqli_set_charset($con, "utf8");
        echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

        // $sql="INSERT INTO `daw2`.`productos` (`id`, `nombre`, `apellido`, `edad`, `correo`, `contraseña`) VALUES (NULL, '".$nombre."' , '".$apellido."' , '".$edad."', '".$correo."', '".$contraseña."')";
        $sql="UPDATE `alumnos` SET `nombre` = '$nombre', `apellido` = '$apellido', `edad` = '$edad', `correo` = '$correo', `contraseña` = '$contraseña' WHERE `id` = '".$id."'";

        // ACTUALIZA `table_name` SET` column_name` = `new_value '[WHERE condition]; WHERE `id` = '$_producto'

        $consulta=mysqli_query($con,$sql);

        //Comprobar consulta
    if(!$consulta){
        die("No se ha podido realizar el insert<br>");
    }else{
        echo "El insert se ha realziado correctamente.";
        header("Refresh:0 , url = ../usuario_admin.php");
        }     
    }


?>
