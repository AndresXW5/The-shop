<?php
$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$edad = $_POST['Edad'];

$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];
$fecha = $_POST['Fecha'];

// No funciona
// $admin = $_GET['admin'];

echo "El nombre es ".$nombre.", la edad es ".$edad.", los apellidos son ".$apellidos.
    ". Su correo es: " .$correo. ", su contraseña es " .$contraseña. " y su fecha de nacimiento es " .$fecha. "<br>" ;

$servidor="localhost";
$usuario="root";
$password="usbw";
$bd="daw2";

$con=mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido correctamente la conexion a la base de datos";

    $sql="INSERT INTO `daw2`.`Alumnos` (`id`, `nombre`, `apellido`, `edad`, `correo`, `contraseña`, `fecha`) VALUES (NULL, '".$nombre."', '".$apellidos."', ".$edad." , '".$correo."', '".$contraseña."', '".$fecha."')";
    
    $consulta=mysqli_query($con,$sql);

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        echo "El insert se ha realziado correctamente.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $sql2="SELECT * FROM `Alumnos` WHERE 1 ";
            $consulta=mysqli_query($con,$sql2);

            while($fila=$consulta->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$fila["id"]."</td>";
                echo "<td>".$fila["nombre"]."</td>";
                echo "<td>".$fila["apellido"]."</td>";
                echo "<td>".$fila["edad"]."</td>";

                echo "<td>".$fila["correo"]."</td>";
                echo "<td>".$fila["contraseña"]."</td>";
                echo "<td>".$fila["fecha"]."</td>";

                echo "</tr>";
            }
        ?>

    </table>    


</body>
</html>
<?php

?>





