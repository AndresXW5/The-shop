<?php
    $borrar = $_GET['id_producto'];
    session_start();
    require_once "../bd.php";
    
    $sql_delete =  "DELETE FROM productos WHERE id_producto = '$borrar'";

    $query_delete = mysqli_query($con,$sql_delete);

    $row = mysqli_fetch_assoc($query_delete);
    if(!$row){
        echo "<script>alert('Eliminación de Producto Exitosa')</script>";        
        header("Refresh: 1 , url = /php/catalogo_admin.php");
        exit();

    }
    else{
        echo "<script>alert('No se pudo eliminar producto')</script>";
        header("Refresh: 0 , url = /php/catalogo_admin.php");
        exit();

    }
    mysqli_close($con);
    

?>