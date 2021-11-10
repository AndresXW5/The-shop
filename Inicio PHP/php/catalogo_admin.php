<?php  




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
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th></th>
            <th>Editar</th>
            <th>Eliminar</th>
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

            







    </div>

    </form>

</body>
</html>