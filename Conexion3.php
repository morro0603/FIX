<?php

$conect=mysqli_connect("localhost","root","","formulario") or die ("No se logro la conexion.");

$Cotizar=$_POST ["Cotizar"];
$Reservar=$_POST ["Reservar"];
$FechadeRetiro=$_POST ["Fecha de Retiro"];
$Hora=$_POST ["Hora"];
$ElijaLugar=$_POST ["Elija Lugar"];
$Fechadedevolucion=$_POST ["Fechade devolucion"];
$Hora=$_POST ["Hora2"];
$ElijaLugar=$_POST ["Elija Lugar2"];
$Tipodevehiculoquemeinteresa=$_POST ["Tipo de vehiculo queme interesa"];
$Somos=$_POST ["Somos"];
$Necesitamosequipamientoadicional=$_POST ["Necesitamos equipamiento adicional"];
$PermisosInternacionales=$_POST ["Permisos Internacionales"];
$Comodidad=$_POST ["Comodidad"];
$óElprecio=$_POST [" ó El precio"];
$Nombre=$_POST ["Nombre"];
$Apellidos=$_POST ["Apellidos"];
$PasaporteoRut=$_POST ["Pasaporte o Rut"];
$Email=$_POST ["E-mail"];
$Observaciones=$_POST ["Observaciones"];
 mysqli_query($conect,"INSERT INTO reservas VALUES ('','$Cotizar','$Reservar','$FechadeRetiro','$Hora','$ElijaLugar','$Fechadedevolucion','$Hora','$ElijaLugar','$Tipodevehiculoquemeinteresa','$Somos','$Necesitamosequipamientoadicional','$PermisosInternacionales','$Comodidad','$óElprecio','$Nombre','$Apellidos','$óElprecio','$Nombre','$Apellidos','$PasaporteoRut','$Email','$Observaciones')");

echo 'Datos guardados correctamente'; 


?>
