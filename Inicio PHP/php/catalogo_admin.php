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
                    <a class="button" name="edit" id=""  href="/catalogo/editar_admin.php" role="button"> 
                   
                    Editar
                    
                    
                    </a>
                </td>

                <td class="delete"><a name="id_producto" id="" class="eliminar_admin" href="catalogo/eliminar_admin.php?id_producto=<?php echo $row['id_producto'] ?>" role="button">
                    Eliminar
                </a></td>
                
            </tr>   
        <?php
            
        } ?>
            

            
    </table>

    </tbody>

    </div>
        
    <div class="añadir">
        <h2 class="add">Añadir productos</h2>
        
        <button class="btn first">Añadir</button> 
    </div>
       
    
    
         

    <!-- <div id="titulo-producto">
        <h2>Añadir Productos</h2>    
    </div>

    <div class="form col-md-12">
			<form>			
				<input type="text" class="col-md-6" placeholder="Nombre">
				<input type="text" class="col-md-6" placeholder="Marca">
				<input type="text" class="col-md-6" placeholder="Seccion">
                <input type="text" class="col-md-6" placeholder="Precio">
                <input type="text" class="col-md-6" placeholder="Imagen">

				<textarea class="col-md-6" placeholder="Message"></textarea>
				<input type="button" class="col-md-6" value="Enviar">			
			</form>
	</div> -->
    

    </form>

    
    
</body>
</html>