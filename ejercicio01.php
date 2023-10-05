<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ejercicio01</title>
</head>
<body>
   <form method="post" action="">
   Importe de las ventas: <br> <input type="text" name="Valor1"> <br>
   Nro de hijos: <br> <input type="text" name="Valor2"> <br>
    <br> <input type="submit" value="Calcular" > <br>
    <br>
   </form>
   <?php
   $comision = round((7.5/100) * $_POST["Valor1"],2);
   $bonificacion = round( 50 *  $_POST["Valor2"],2);
   $sueldo_bruto= round(600 + $comision + $bonificacion,2);
   $descuento= round((11/100)* $sueldo_bruto,2);
   $sueldo_neto= round($sueldo_bruto - $descuento,1);
   echo "Comision: S/.".$comision."<br>";
   echo "Bonificacion: S/".$bonificacion."<br>";
   echo "Sueldo bruto: S/.".$sueldo_bruto."<br>";
   echo "Descuento: S/".$descuento."<br>";
   echo "Sueldo neto: S/.".$sueldo_neto."<br>";
   ?>
</body>
</html>