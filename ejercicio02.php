<?php
$precio_actual =  $_POST["Valor1"] * (95/100) ;
$importe_compra = $precio_actual *  $_POST["Valor2"];
$importe_descuento =  $importe_compra  * (7/100);
$importe_pagar = round($importe_compra - $importe_descuento,1);
$obsequio =  2 * $_POST["Valor2"] ;

echo "Precio actual unidad: S/.".$precio_actual."<br>";
echo "Importe de compra: S/".$importe_compra."<br>";
echo "Importe de descuento: S/.".$importe_descuento."<br>";
echo "Importe a pagar: S/".$importe_pagar."<br>";
echo "Obsequios: ".$obsequio." caramelos"."<br>";
?>