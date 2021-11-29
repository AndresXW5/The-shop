<?php  
    require_once "/bd.php";

    $sql_fetch_todos = "SELECT * FROM `productos`";
    $query = mysqli_query($con, $sql_fetch_todos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-admin-productos.scss">
    <title>Catalogo Admin</title>
</head>
    <header>
        <div class="menu logo-menu">
            <!-- <img src="x.jpg" alt="" width="110" height="60" float="left" padding="8px"> -->
            <nav>

                <ul>
                    <li><a href="perfil.php">Inicio</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="carrito.php">Carrito</a></li>
                    <li><a href="usuario.php">Mi usuario</a></li>
                 </ul>
            </nav>
        </div>
    </header>
<body>   

<form action="bd_admin.php" method="post">
    <div class="container2">     
        <tbody> 
            <h1 class="margenTop">Administracion de productos</h1>
            <table class="rwd-table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Tipo</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th></th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>

            <?php 
                while ($row = mysqli_fetch_array($query)){
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

                        <a class="custom-btn btn-7" name="edit" id=""  href="/catalogo/editar_admin.php" role="button"> 
                            <span>Editar</span>
                        </a>

                        
                        <!-- <button class="custom-btn btn-7" name="edit" id=""  href="/catalogo/editar_admin.php">
                            <span>Editar</span>
                        </button> -->
                    </td>

                    <td class="delete">
                        <a name="id_producto" id="" class="custom-btn btn-7" href="catalogo/eliminar_admin.php?id_producto=<?php echo $row['id_producto'] ?>" role="button">
                            <span>Eliminar</span> 
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
        <h2 class="add">Añadir productos</h2>

        <div>
            <label for="nombre_producto">Nombre del producto</label><br>
            <input type="text" id="nombre_producto" name="nombre_producto">
        </div>            

        <div>
            <label for="marca_producto">Marca del producto</label><br>
            <input type="text" id="marca_producto" name="marca_producto" >
        </div>
        
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
            <button class="custom-btn btn-7" header="./catalogo/editar_admin.php"><span>Añadir</span></button>
            
        </div>
    </div>
</form>



<footer class="footer">
        <div class="container">
            <p>
                <!-- Sitio web de SkateXW5 -->
            </p>
        </div>
</footer>
 
</body>
</html>