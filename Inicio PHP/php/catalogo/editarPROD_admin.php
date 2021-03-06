<?php

$editar = $_GET['id_producto'];

require_once "../bd.php";

$sql_fetch_todos = "SELECT * FROM `productos` WHERE `id_producto` = $editar";
// $sql_fetch_editar = "UPDATE `productod` SET `nombre_producto` = 'NuevoNombre' WHERE `id_producto` = $editar";

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

            </tr>

            <?php 
                while ($col = mysqli_fetch_array($query)){  //MOSTRAR SOLO EL PRODUCTO CON ID SELECIONADA
            ?>
        
                <tr>
                    <td><?php echo $col['id_producto'] ?></td>
                    <td><?php echo $col['nombre_producto'] ?></td>
                    <td><?php echo $col['marca_producto'] ?></td>
                    <td><?php echo $col['tipo_producto'] ?></td>
                    <td><?php echo $col['precio_producto'] . " ???" ?></td>
                    <td><img class="img_admin" alt="Imagen del producto" src=<?php echo $col['imagen_producto'] ?>></td>
                
                    <td class="timeregis"></td>
                    <td class="editar">
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
        <h2 class="add">Editar</h2><br>

        <div>
            <label for="id_producto">Introduzca el ID del producto</label><br>
            <input type="text" id="id_producto" name="id_producto">
        </div><br>

        <div>
            <label for="nombre_producto">Nombre del producto</label><br>
            <input type="text" id="nombre_producto" name="nombre_producto">
        </div><br>            

           <!-- A??adir opciones para elegir la marca y el tipo de producto -->
        <div>
            <label for="marca_producto">Marca del producto</label><br>
            <select name="marca_producto">
                <option value="Adidas">Adidas</option> 
                <option value="Nike SB">Nike SB</option> 
                <option value="Carhartt">Carhartt</option>
                <option value="Vans">Vans</option> 
                <option value="xxx">xxx</option> 
                <option value="xxx">xxx</option> 
            </select>
        </div><br>

        <div>
            <label for="tipo_producto">Tipo del producto</label><br>
            <select name="tipo_producto">
                <option value="Camiseta">Camiseta</option> 
                <option value="Sudadera">Sudadera</option> 
                <option value="Pantalones">Pantalones</option>
                <option value="Gorras">Gorras</option> 
                <option value="Zapatillas">Zapatillas</option> 
                <option value="Tablas">Tablas</option> 
                <option value="Ejes">Ejes</option> 
                <option value="Ruedas">Ruedas</option> 
                <option value="Otro">Otro</option> 
            </select>
        </div><br>

        <div>
            <label for="precio_producto">Precio del producto</label><br>
            <input type="text" id="precio_producto" name="precio_producto" >
        </div><br>

        <div>
            <label for="imagen_producto">Imagen del producto</label><br>
            <input type="text" id="imagen_producto" name="imagen_producto" >
        </div><br>

        <div class="a??adir">
            <button class="custom-btn btn-15" header="./catalogo/editar_admin.php"><span>Confirmar</span></button>
            
        </div>
    </div>
</form>



</body>
</html>