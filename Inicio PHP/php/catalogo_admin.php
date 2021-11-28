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
    

        <div class="container">
            <?php
<<<<<<< Updated upstream
                include '/bd.php';
=======
            } ?>
            </table>
        </tbody>
    </div>   
</form>


<form action="/php/catalogo/editar_admin.php" class="login__form" method="POST"> 
>>>>>>> Stashed changes

                
        


            ?>
        </div>



<<<<<<< Updated upstream
=======




<?php

        // require_once "/bd.php";

        // //Declaracion variables para almacenar datos
        // $nombre_producto = $_POST['nombre_producto'];
        
        // echo "El nombre del producto es " . $nombre_producto;

        //     //Consulta
        //     if(!$con){
        //         die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
        //     }else{
        //         mysqli_set_charset($con, "utf8");
        //         echo "<br>Se ha establecido correctamente la conexion a la base de datos<br>";

        //         $sql="INSERT INTO `daw2`.`productos` (`id`, `nombre_producto`) VALUES (NULL, '".$nombre_producto."')";

        //         $consulta=mysqli_query($con,$sql);

        //         //Comprobar consulta
        //         if(!$consulta){
        //             die("No se ha podido realizar el insert<br>");
        //         }else{
        //             echo "El insert se ha realziado correctamente.";
        //         }     
        //     }

?>






        <!-- <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre"><br><br>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" id="Apellidos" name="Apellidos"><br><br>
        <label for="Edad">Edad:</label>
        <input type="number" id="Edad" name="Edad"><br><br>

        <label for="Correo">Correo electronico:</label>
        <input type="email" id="Correo" name="Correo"><br><br>

        <label for="Contraseña">Contraseña:</label>
        <input type="text" id="Contraseña" name="Contraseña"><br><br>

        <label for="Fecha">Fecha de nacimiento:</label>
        <input type="date" id="Fecha" name="Fecha"><br><br>

        <input type="submit" value="Enviar"> -->
    


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
    
    
>>>>>>> Stashed changes
</body>
</html>