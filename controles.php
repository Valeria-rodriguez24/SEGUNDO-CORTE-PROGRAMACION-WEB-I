<?php

$cantidad = $_POST["valor"];
$edades = $_POST["edad"];

 
if($edades > 60 ) 
{ 
    $descuento = $cantidad * 0.20;
    $valor_final = $cantidad - $descuento;

    echo " El descuento ha sido aplicado, el valor a pagar es:".$valor_final;
}else
{
    echo "el dinero a pagar es:".$cantidad;
}

?>