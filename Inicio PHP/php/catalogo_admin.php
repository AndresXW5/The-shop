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
    <link rel="stylesheet" href="../style/style-perfil.css">
    <title>Catalogo Admin</title>
</head>
<header>
        <div class="menu logo-menu">
            <img src="x.jpg" alt="" width="110" height="60" float="left" padding="8px">
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
            

     
        <h1>Administracion de productos</h1>
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

    <tbody>
        <?php
            $id_tabla = 1;
            while ($row = mysqli_fetch_array($query)){
        ?>
            <tr>
                <!-- <td scope="row"><?php echo $id_tabla ?></td> -->
                <td><?php echo $row['id_producto'] ?></td>
                <td><?php echo $row['nombre_producto'] ?></td>
                <td><?php echo $row['marca_producto'] ?></td>
                <td><?php echo $row['tipo_producto'] ?></td>
                <td><?php echo $row['precio_producto'] . " €" ?></td>
                <td><?php echo $row['imagen_producto'] ?></td>

                
                <!-- <td class="timeregis"><?php echo $row['time'] ?></td>
                <td class="modificar"><a name="edit" id="" class="modificar_admin" href="/catalogo/modificar_admin.php?id=<?php echo $row['id_productos'] ?>&message=<?php echo $row['proname'] ?>&amount=<?php echo $row['amount']; ?> " role="button">
                    Editar
                </a></td>

                <td class="delete"><a name="id" id="" class="eliminar_admin" href="/catalogo/eliminar_admin.php?id=<?php echo $row['id'] ?>" role="button">
                    Eliminar
                </a></td> -->
                
            </tr>
        <?php
            $id_tabla ++;
        } ?>
            


        








    </tbody>


<!--    
        <tr>
            <td data-th="id_producto">1-2-3...</td>
            <td data-th="nombre_producto">Nombre del producto</td>
            <td data-th="marca_producto">Marca</td>
            <td data-th="tipo_producto">Ropa-zapatos...</td>
            <td data-th="precio_producto">125€</td>
            <td data-th="imagen_producto">URL imag</td>

            <td></td>
            <td data-th="editar">
                <button>Editar</button>
            </td>
            <td data-th="eliminar">
                <button>Eliminar</button>
            </td>
        </tr>

        <tr>
            <td data-th="id_producto">1-2-3...</td>
            <td data-th="nombre_producto">Nombre del producto</td>
            <td data-th="marca_producto">Marca</td>
            <td data-th="tipo_producto">Ropa-zapatos...</td>
            <td data-th="precio_producto">125€</td>
            <td data-th="imagen_producto">URL imag</td>

            <td></td>
            <td data-th="editar">
                <button>Editar</button>
            </td>
            <td data-th="eliminar">
                <button>Eliminar</button>
            </td>
        </tr>
        
        <tr>
            <td data-th="id_producto">1-2-3...</td>
            <td data-th="nombre_producto">Nombre del producto</td>
            <td data-th="marca_producto">Marca</td>
            <td data-th="tipo_producto">Ropa-zapatos...</td>
            <td data-th="precio_producto">125€</td>
            <td data-th="imagen_producto">URL imag</td>

            <td></td>
            <td data-th="editar">
                <button>Editar</button>
            </td>
            <td data-th="eliminar">
                <button>Eliminar</button>
            </td>
        </tr>
        
        </table>
     -->

            







    </div>

    </form>

</body>
</html>