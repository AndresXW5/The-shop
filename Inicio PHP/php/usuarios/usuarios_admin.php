<?php

require_once "/bd.php";

$sql_fetch_todos = "SELECT * FROM `alumnos`";
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
    <title>Administrar usuarios</title>
</head>
<body>
    
    <header>
        <div class="menu logo-menu">
            <!-- <img src="x.jpg" alt="" width="110" height="60" float="left" padding="8px"> -->
            <nav>

                <ul>
                    <li><a href="perfil.php">Inicio</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="/php/catalogo_admin.php">Volver</a></li>
                 </ul>
            </nav>
        </div>
    </header>


<form action="/php/usuarios/editar_usuario.php" method="POST">
    <div class="container2">     
        <tbody> 
            <h1 class="margenTop">Administracion de usuarios</h1>
            <table class="rwd-table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Fecha de nacimito</th>
                <th scope="col">Administrador</th>
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

















</body>
</html>