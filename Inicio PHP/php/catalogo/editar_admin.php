<?php

echo "Php editar abierto";

//Declaracion variables para almacenar datos
$nombre_producto = $_POST['nombre_producto'];
$marca_producto = $_POST['marca_producto'];
$tipo_producto = $_POST['tipo_producto'];
$precio_producto = $_POST['precio_producto'];
$imagen_producto = $_POST['imagen_producto'];

echo "<br>Comprobacion de datos<br>
    Nombre: ". $nombre_producto.
    "<br>Marca: " .$marca_producto.
    "<br>Tipo: " .$tipo_producto.
    "<br>Precio: " .$precio_producto.
    "<br>Imagen: " .$imagen_producto;

//  include '/bd.php';
require_once "../bd.php";


if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con, "utf8");
    echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

    $sql="";

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
