<?php

require 'config/conex.php';

$cantidad = $_POST["txt_cantidad"];
$total = 1500 * $cantidad;

$sql="INSERT INTO venta1(valor) VALUES (".$total.")";

if($dbh->query($sql))
{
    echo"venta registrada: $".$total;
    
}else
{
    echo"Error en la venta";
}

?>
