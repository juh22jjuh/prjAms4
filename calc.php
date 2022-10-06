<?php
    $Numero = $_POST['txtNumero'];
    $triangulo = ($Numero - 1);
    $Pos = ($Numero + 1);
    $re = ($Numero * $Numero);
    echo "Antecessor: " , $triangulo;
    echo "Posterior: " , $Pos;
    echo "Quadrado: " , $re;
 ?>
