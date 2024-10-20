<?php

$cantidades = $_POST["cantidad"];
$valor = 2000;
$total = $cantidades*$valor;
 
if($cantidades > 0) 
{ 
echo "el valor es:".$total;
}else
{
    echo "lo sentimos";
}

?>