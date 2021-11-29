<?php

// include '../php/bd.php';
require_once('/php/CreateDd.php');
require_once('./php/component.php');

//Instancia en la base de datos
$database = new CreateDd($bd="daw2", $tablename="productos");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Tutorial</title>


    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
    <body>
        
        
        <div class="container">
            <div class="row text-center py-5">
                <?php
                     $result = $database->getData();
                     while ($row = mysqli_fetch_assoc($result)) {
                        component($row['nombre_producto']);
                     }

                    // component($productName="Nike", $productPrice="65.55", $productImage="../imagenes/Catalogo_Nike.jpg");
                    // component($productName="Carhartt", $productPrice="65.55", $productImage="../imagenes/Catalogo_Carhartt.jpg");
                    // component($productName="Adidas", $productPrice="65.55", $productImage="../imagenes/Catalogo_Adidas.jpg");
                    // component($productName="Vans", $productPrice="65.55", $productImage="../imagenes/Catalogo_Vans.jpg");
                ?>
                
                
            </div>
        </div>


 <!-- MINUTO 22:15 -->
<!-- Editar foto de Vans y de adidas y poner bien la resolucion -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    </body>

</html>