<?php
    $numero = $_POST['num'];
    $factorial = 1;
    for($i = 1; $i<=$numero; $i++){
        $factorial = $factorial  * $i;
    }
    echo "<br/> El factorial de ".$numero." es de: ".$factorial;
?>