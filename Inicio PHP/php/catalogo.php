<?php  




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-perfil.css">
    <title>Catalogo</title>
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
                include '/bd.php';


            ?>
        </div>

        <div class="primerSector">
            <div class="s1">
                <a href="../php/perfil.php" title="Nike Sb">
                    <img class="img1" src="../imagenes/Catalogo_Nike.jpg" alt="Nike sb">
                </a>    
            </div>
        </div>       

        <div class="segundoSector">
            <div class="s1">
                <a href="../php/perfil.php" title="Carhartt">
                    <img class="img2" src="../imagenes/Catalogo_Carhartt.jpg" alt="Carhartt">
                </a>    
            </div>
        </div>

        
        <div class="tercerSector">
            <div class="s1">
                <a href="../php/perfil.php" title="Adidas">
                    <img class="img1" src="../imagenes/Catalogo_Adidas.jpg" alt="Nike sb">
                </a>    
           </div>
        </div>  



        <div class="cuartoSector">
            <div class="s1">
                <a href="../php/perfil.php" title="Vans">
                    <img class="img2" src="../imagenes/Catalogo_Vans.jpg" alt="Carhartt">
                </a>    
            </div>
        </div>












<!-- Pie de pagina
    <footer class="footer">
        <div class="container">
            <p>
                Sitio web de SkateXW5
            </p>
        </div>
    </footer>             -->




</body>
</html>