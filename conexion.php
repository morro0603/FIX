<?php

$conect=mysqli_connect("localhost","root","","rent car") or die ("No se logro la conexion.");

$CorreoElectronico=$_POST ["Correo Electronico"];
$Contraseña=$_POST ["Contraseña"];

 mysqli_query($conect,"INSERT INTO login VALUES ('$CorreoElectronico','$Contraseña');

echo 'Datos guardados correctamente'; 




?>
