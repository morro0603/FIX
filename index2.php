<!DOCTYPE html>
<html>

<head>
<script src="java.js"></script>

	</head>
	<body background="animacion.gif">
	<center>
				
<h1>Facturita</h1>

<img src="" id="imagen.jpg"><br>
<form action="java.php" method="POST" name="factura">

<label>Cliente:</label><br>
<input type="text" name="cliente" id="cliente"><br>

<img src="" id="producto" style="max-height: 100px;"><br>

<label>Vehiculo:</label><br>
<input type="text" name="vehiculo" id="vehiculo"><br>

<label>Precio:</label><br>
<input type="number" name="precio" id="precio"><br>

<label>Dias:</label><br>
<input type="number" name="dias" id="dias"><br>

<label>Subtotal:</label><br>
<input type="number" name="subtotal" id="subtotal"><br>

<input type="checkbox"  id="check">

<label>ITBIS:</label><br>
<input type="number" name="itbis" id="itbis"><br>

<label>Descuento%:</label><br>
<input type="number" name="descuento" id="descuento"><br>

<label>Total:</label><br>
<input type="number" name="total" id="total"><br>

   <h5> Forma de pago </h5>
<select id ="fpago" name="fpago" onchange="Seleccion();">
<option value="0">Seleccione</option>
<option value="efe">Efectivo</option>
<option value="tc">Tarjeta de credito</option>
<option value="td">Tarjeta de devito</option>
</select><br><br>

<div id="efectivo" style="display:none;">

<label>Pagado:</label><br>
<input type="text" name="pagado" id="pagado"><br>

<label>Devuelta:</label><br>
<input type="text" name="devuelta" id="devuelta"><br><br>

</div>

<div id="tarjetas" style="display:none;">
				
<label> Numero de transaccion </label>
<input type="number" name="nt" id="nt">
			
</div><br><br>

<button type="button" onclick="Calcular();">Calcular</button>
<input type="submit" name="" value="Guardar"> <br><br>
			
<br><br>
		
</form>
		
</center>
		
</body>

</html>