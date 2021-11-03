<?php

include '/bd.php';

class CreateDB{


}

public function getData(){
    $sql3= "SELECT * FROM `productos`";

    $consulta=mysqli_query($con,$sql3);

    if (mysqli_num_rows($consulta) > 0) {
        return $consulta;
    }


    }





?>