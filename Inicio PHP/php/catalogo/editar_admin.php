<?php

//Declaracion variables para almacenar datos
$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$marca_producto = $_POST['marca_producto'];
$tipo_producto = $_POST['tipo_producto'];
$precio_producto = $_POST['precio_producto'];
$imagen_producto = $_POST['imagen_producto'];

echo "El nombre del producto es " . $nombre_producto. 
"<br>El ID es: " .$id_producto.
"<br>Marca: " .$marca_producto. 
"<br>Tipo: " .$tipo_producto .
"<br>Precio: " .$precio_producto.
"<br>Imagen: " .$imagen_producto
;

require_once "../bd.php";

    //Consulta
    if(!$con){
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }else{  
        mysqli_set_charset($con, "utf8");
        echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

        // $sql="INSERT INTO `daw2`.`productos` (`id_producto`, `nombre_producto`, `marca_producto`, `tipo_producto`, `precio_producto`, `imagen_producto`) VALUES (NULL, '".$nombre_producto."' , '".$marca_producto."' , '".$tipo_producto."', '".$precio_producto."', '".$imagen_producto."')";
        $sql="UPDATE `productos` SET `nombre_producto` = '$nombre_producto', `marca_producto` = '$marca_producto', `tipo_producto` = '$tipo_producto', `precio_producto` = '$precio_producto', `imagen_producto` = '$imagen_producto' WHERE `id_producto` = '".$id_producto."'";

        // ACTUALIZA `table_name` SET` column_name` = `new_value '[WHERE condition]; WHERE `id_producto` = '$id_producto'

        $consulta=mysqli_query($con,$sql);

        //Comprobar consulta
    if(!$consulta){
        die("No se ha podido realizar el insert<br>");
    }else{
        echo "El insert se ha realziado correctamente.";
        header("Refresh:0 , url = ../catalogo_admin.php");
        }     
    }


?>
