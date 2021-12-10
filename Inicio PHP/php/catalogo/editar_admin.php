<?php

//Declaracion variables para almacenar datos
$editar = $_GET['id_producto'];

require_once "../bd.php";

echo "<br>Comprobacion de datos<br>
    <br>ID: " .$editar;



    $sql_editar =  "DELETE FROM productos WHERE id_producto = '$borrar'";

    $query_editar = mysqli_query($con,$sql_editar);

    
    if($query_editar){
        
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
                Swal.fire({
                    title: 'Editor de productos',
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Confirmar',
                    showLoaderOnConfirm: true,
                    preConfirm: (login) => {
                        return fetch(`//api.github.com/users/${login}`)
                        .then(response => {
                            if (!response.ok) {
                            throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                            `Request failed: ${error}`
                            )
                        })
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: `${result.value.login}'s avatar`,
                        imageUrl: result.value.avatar_url
                        })
                    }
                    })
            </script>
        </body>
        </html>
        <?php
// window.location="/php/catalogo_admin.php"
    }
    else{
        echo "<script>alert('No se pudo eliminar producto')</script>";
        header("Refresh: 0 , url = /php/catalogo_admin.php");
        exit();

    }
    mysqli_close($con);



















// if(!$con){
//     die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
// }else{
//     mysqli_set_charset($con, "utf8");
//     echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

//     // $sql="UPDATE `productos` SET `nombre_producto` = '"trim($_POST['nombre_producto'])"'  WHERE id =     ";
//     // $sql = "UPDATE product SET proname = '" . trim($_POST['name']) . "' ,amount = '" . trim($_POST['value']) . "' WHERE id = '" . $_POST['id'] . "'";

//     // $sql="INSERT INTO `daw2`.`productos` (`id_producto`, `nombre_producto`, `marca_producto`, `tipo_producto`, `precio_producto`, `imagen_producto`) VALUES (NULL, '".$nombre_producto."' , '".$marca_producto."' , '".$tipo_producto."', '".$precio_producto."', '".$imagen_producto."')";
//     $consulta=mysqli_query($con,$sql);

//     //Comprobar consulta
//     if(!$consulta){
//         die("No se ha podido realizar el insert<br>");
//     }else{
//         echo "El insert se ha realziado correctamente.";
//         header("Refresh:0 , url = ../catalogo_admin.php");
//     }     
    
// }



?>
