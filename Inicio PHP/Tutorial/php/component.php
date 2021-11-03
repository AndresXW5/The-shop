<?php

function component($productName, $productPrice, $productImage){

    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"$productImage\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$productName</h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                        Material de nike sb.
                    </p>
                    <h5>
                        <small><s class=\"text-secondary\">94.95€</s></small>
                        <span class=\"price\">$productPrice €</span>
                    </h5>

                    <button type=\"submit\" class=\"btn-warning my-3\" name=\"add\">Añadir al carrito<i class=\"fas fa-shopping-cart\"></i></button>

                </div>
            </div>
        </form>
    </div>
    
    ";

    echo $element;

}


















?>