<?php



//Declaracion variables para almacenar datos
$nombre_producto = $_POST['nombre_producto'];
$marca_producto = $_POST['marca_producto'];
$tipo_producto = $_POST['tipo_producto'];
$precio_producto = $_POST['precio_producto'];
$imagen_producto = $_POST['imagen_producto'];

echo "El nombre del producto es " . $nombre_producto;


//Datos para conectar a la BD (con include y require_once no funcionaba)
    $servidor="localhost";
    $usuario="root";
    $password="usbw";
    $bd="daw2";

    $con=mysqli_connect($servidor,$usuario,$password,$bd);

    //Consulta
    if(!$con){
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }else{
        mysqli_set_charset($con, "utf8");
        echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

        $sql="INSERT INTO `daw2`.`productos` (`id_producto`, `nombre_producto`, `marca_producto`, `tipo_producto`, `precio_producto`, `imagen_producto`) VALUES (NULL, '".$nombre_producto."' , '".$marca_producto."' , '".$tipo_producto."', '".$precio_producto."', '".$imagen_producto."')";

        $consulta=mysqli_query($con,$sql);

        //Comprobar consulta
        if(!$consulta){
            die("No se ha podido realizar el insert<br>");
        }else{
            echo "El insert se ha realziado correctamente.";
            header("Refresh:0 , url = ../catalogo_admin.php");
        }     
        
    }
// mysqli_close($con);
?>