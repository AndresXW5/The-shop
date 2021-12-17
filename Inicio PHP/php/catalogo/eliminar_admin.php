<?php
    $borrar = $_GET['id_producto'];
    session_start();
    require_once "../bd.php";
    
    $sql_delete =  "DELETE FROM productos WHERE id_producto = '$borrar'";

    $query_delete = mysqli_query($con,$sql_delete);

    // $col = mysqli_fetch_assoc($query_delete);
    if($query_delete){
        //HTML para aplicar suitalerte con el script
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({icon: 'error', title: 'Producto eliminado con exito.'}).then((result) => {
                    window.location="/php/catalogo_admin.php";});
            </script>
        </body>
        </html>
        <?php

    }
    else{
        echo "<script>alert('No se pudo eliminar producto')</script>";
        header("Refresh: 0 , url = /php/catalogo_admin.php");
        exit();

    }
    mysqli_close($con);
    

?>