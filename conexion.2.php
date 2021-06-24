<?php

$conect=mysqli_connect("localhost","root","","rent car") or die ("No se logro la conexion.");

$NombreCompleto=$_POST["Nombre Completo"]
$CorreoElectronico=$_POST ["Correo Electronico"];
$Contraseña=$_POST ["Contraseña"];

 mysqli_query($conect,"INSERT INTO register VALUES ('$NombreCompleto','$CorreoElectronico','$Contraseña');

echo 'Datos guardados correctamente'; 




?>
