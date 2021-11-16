<?php

    // session_start();
    require_once "../bd.php";
    // if ($_SESSION['username'] == null){
    //     echo "<script>alert('Favor ingresar con tus credenciales')</script>";
    //     header("Refresh:0 , url = ../index.html");
    //     exit();

    // }


    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM productos WHERE id = '$delete_num'";
    $query_delete = mysqli_query($con,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    if(!$row){
        echo "<script>alert('Eliminación de Producto Exitosa')</script>";        
        header("Refresh: 0 , url = ../list.php");
        exit();

    }
    else{
        echo "<script>alert('No se pudo eliminar producto')</script>";
        header("Refresh: 0 , url = ../list.php");
        exit();

    }
    mysqli_close($con);


    // require_once "../bd.php";

    // $delete_num = $_GET['id'];

    // $sql_borrar = "DELETE FROM `productos` WHERE id_producto = '$delete_num' ";
    // $con_borrar = mysqli_assoc($con, $sql_borrar);

    // $row = mysqli_fetch_assoc($con_delete,MYSQLI_ASSOC);
    // if(!$row){
    //     echo "<script>alert('PRODUCTO ELIMINADO')</script>";        
    //     header("Refresh: 0 , url = ../list.php");
    //     exit();



    // }

    // mysqli_close($con);








?>