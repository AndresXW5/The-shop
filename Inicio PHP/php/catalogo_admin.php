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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<form action="/php/catalogo/editar_admin.php" method="POST">
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
                while ($col = mysqli_fetch_array($query)){
            ?>

                <tr>
                    <td><?php echo $col['id_producto'] ?></td>
                    <td><?php echo $col['nombre_producto'] ?></td>
                    <td><?php echo $col['marca_producto'] ?></td>
                    <td><?php echo $col['tipo_producto'] ?></td>
                    <td><?php echo $col['precio_producto'] . " €" ?></td>
                    <td><img class="img_admin" alt="Imagen del producto" src=<?php echo $col['imagen_producto'] ?>></td>
                
                    <td class="timeregis"></td>
                    <td class="editar">

                        <a name="edit" id="" class="custom-btn btn-15" href="catalogo/editarPROD_admin.php?id_producto=<?php echo $col['id_producto'] ?>"role="button"> 
                            <span>Editar</span>
                        </a>
                    </td>

                    <td class="delete">
                        <a name="id_producto" id="" class="custom-btn btn-15" href="catalogo/eliminar_admin.php?id_producto=<?php echo $col['id_producto'] ?>" role="button">
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


<form action="/php/catalogo/agregar_admin.php" class="login__form" method="POST"> 

    <div class="login">
        <br>       
        <h2 class="add">Añadir productos</h2><br>

        <div>
            <label for="nombre_producto">Nombre del producto</label><br>
            <input type="text" id="nombre_producto" name="nombre_producto">
        </div><br>            

           <!-- Añadir opciones para elegir la marca y el tipo de producto -->
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

        <div class="añadir">
            <button class="custom-btn btn-7" header="./catalogo/agregar_admin.php"><span>Añadir</span></button>
            
        </div>
    </div>
</form>



<footer class="footer">
        <div class="container">
            <p>
                Sitio web de SkateXW5
            </p>
        </div>
</footer>
 
</body>
</html>