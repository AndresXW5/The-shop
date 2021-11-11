<?php

$ipp = 1;

if($ipp != 0){

    $sql = "UPDATE `producto` SET `nombre_producto` = '" . trim($_POST['nombre_producto']) . "' ,amount = '" . trim($_POST['value']) . "' WHERE id = '" . $_POST['id'] . "'";

    if($con->query($sql)){
        echo "<script>alert('Proceso completado exitósamente')</script>";
        header("Refresh:0 , url =../list.php");
        exit();

    }
    else{
        echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
        header("Refresh:0 , url =../list.php");
        exit();

    }
}
// else{
//     echo "<script>alert('Por favor diligencia todos los campos')</script>";
//     header("Refresh:0 , url = ../list.php");
//     exit();
// }
mysqli_close($con);
?>