<?php

$conect=mysqli_connect("localhost","root","","factura") or die ("No se logro la conexion.");

$cliente=$_POST ["cliente"];
$vehiculo=$_POST ["vehiculo"];
$precio=$_POST ["precio"];
$dias=$_POST ["dias"];
$subtotal=$_POST ["subtotal"];
$itbis=$_POST ["itbis"];
$descuento=$_POST ["descuento"];
$total=$_POST ["total"];
 mysqli_query($conect,"INSERT INTO facturita VALUES ('','$cliente','$vehiculo','$precio','$dias','$subtotal','$itbis','$descuento','$total')");

echo 'Datos guardados correctamente'; 


?>
