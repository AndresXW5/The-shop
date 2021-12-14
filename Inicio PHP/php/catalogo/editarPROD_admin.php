<?php

$editar = $_GET['id_producto'];

require_once "../bd.php";

$sql_fetch_todos = "SELECT * FROM `productos` WHERE `id_producto` = $editar";
$sql_fetch_editar = "UPDATE `productod` SET `nombre_producto` = 'NuevoNombre' WHERE `id_producto` = $editar";

$query = mysqli_query($con, $sql_fetch_todos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style-admin-productos.scss">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Editar producto</title>
</head>

    <header>
        <div class="menu logo-menu">
            <!-- <img src="x.jpg" alt="" width="110" height="60" float="left" padding="8px"> -->
            <nav>

                <ul>
                    <li><a href="/php/perfil.php">Inicio</a></li>
                    <li><a href="/php/catalogo.php">Catalogo</a></li>
                    <!-- <li><a href="/php/carrito.php">Carrito</a></li>
                    <li><a href="/php/usuario.php">Mi usuario</a></li> -->
                    <li><a href="/php/catalogo_admin.php">Volver</a></li>
                 </ul>
            </nav>
        </div>
    </header>
<body>

<form action="/php/catalogo/editar_admin.php" method="POST">
    <div class="container2">     
        <tbody> 
            <h1 class="margenTop">Editar producto</h1>
            <table class="rwd-table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Tipo</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th></th>
                <th scope="col">Confirmar</th>
            </tr>

            <?php 
                while ($row = mysqli_fetch_array($query)){  //MOSTRAR SOLO EL PRODUCTO CON ID SELECIONADA
            ?>
        
                <tr>
                    <td><?php echo $row['id_producto'] ?></td>
                    <td><?php echo $row['nombre_producto'] ?></td>
                    <td><?php echo $row['marca_producto'] ?></td>
                    <td><?php echo $row['tipo_producto'] ?></td>
                    <td><?php echo $row['precio_producto'] . " €" ?></td>
                    <td><img class="img_admin" alt="Imagen del producto" src=<?php echo $row['imagen_producto'] ?>></td>
                
                    <td class="timeregis"></td>
                    <td class="editar">

                        <a name="confirm" id="" class="custom-btn btn-15" href="XXXcatalogo/editarPROD_admin.php?id_producto=<?php echo $row['id_producto'] ?>"role="button"> 
                            <span>Confirmar</span>
                        </a>
                    </td>
                    
                </tr>   
            <?php
            } ?>
            </table>
        </tbody>
    </div>   
</form>

<form action="/php/catalogo/editar_admin.php" class="login__form" method="POST"> 
    <div class="login">
        <br>       
        <h2 class="add">Editar</h2>

        <div>
            <label for="nombre_producto">Nombre del producto</label><br>
            <input type="text" id="nombre_producto" name="nombre_producto">
        </div>            

        <div>
            <label for="marca_producto">Marca del producto</label><br>
            <input type="text" id="marca_producto" name="marca_producto" >
        </div>

        <!--    Añadir opciones para elegir la marca y el tipo de producto
        <div>
            <select name="OS">
                <option value="1">Windows Vista</option> 
                <option value="2">Windows 7</option> 
                <option value="3">Windows XP</option>
                <option value="10">Fedora</option> 
                <option value="11">Debian</option> 
                <option value="12">Suse</option> 
            </select>
        </div> -->

        <div>
            <label for="tipo_producto">Tipo del producto</label><br>
            <input type="text" id="tipo_producto" name="tipo_producto" >
        </div>

        <div>
            <label for="precio_producto">Precio del producto</label><br>
            <input type="text" id="precio_producto" name="precio_producto" >
        </div>

        <div>
            <label for="imagen_producto">Imagen del producto</label><br>
            <input type="text" id="imagen_producto" name="imagen_producto" >
        </div>

        <div class="añadir">
            <button class="custom-btn btn-15" header="./catalogo/editar_admin.php"><span>Añadir</span></button>
            
        </div>
    </div>
</form>





        
    </body>
</html>