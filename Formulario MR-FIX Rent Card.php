<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>MR-FIX rent a car.</title>

<style type="text/css">
<!--
body {
	background-color: cornsilk;
    
}
-->
<form action="Conexion3.php" method="POST" name="formulario" >

</style>
<script type="text/javascript">
    

</script>
<script type="text/javascript">
  function validarForm(formulario) {
  if(formulario.attn.value.length==0) { 
    formulario.nombre.focus();    
    alert('No has seleccionado Sucursal'); 
    return false; 
  }
  
  if(formulario.dia.value.length==0) { 
    formulario.pasaporte.focus();   
    alert('No has seleccionado Dia de Recogida');
    return false; 
  }
  if(formulario.mes.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Mes de Recogida');
    return false; 
  }
   if(formulario.año.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Año de Recogida');
    return false; 
  }
   if(formulario.hora.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Horario de Recogida');
    return false; 
  }
    if(formulario.lugar.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Lugar de Recogida');
    return false; 
  }
   if(formulario.dia1.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado dia de Devolución.');
    return false; 
  }
   if(formulario.mes1.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Mes de Devolución');
    return false; 
  }
   if(formulario.año1.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Año de Devolución');
    return false; 
  }
   if(formulario.hora1.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Hora de Devolución');
    return false; 
  }
   if(formulario.lugar1.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Lugar de Devolución');
    return false; 
  }
   if(formulario.vehiculo.value.length==0) { 
    formulario.mail.focus();   
    alert('No ha seleccionado ningún vehículo ');
    return false; 
  }
   if(formulario.permisos.value.length==0) { 
    formulario.mail.focus();   
    alert('No has seleccionado Permiso Internacional');
    return false; 
  }
   if(formulario.nombre.value.length==0) { 
    formulario.mail.focus();   
    alert('No ha ingresado Su Nombre.');
    return false; 
  }
   if(formulario.apellido.value.length==0) { 
    formulario.mail.focus();   
    alert('No ha ingresado Su Apellido');
    return false; 
  }
   if(formulario.mail.value.length==0) { 
    formulario.mail.focus();   
    alert('No ha Ingresado Su Correo Electronico');
    return false; 
  }
  
  return true; 
}
</script>
</head>


<table width="298" height="789" border="0" align="center" cellspacing="10" class="tablaprincipal">
  <tbody><tr>
    <td width="276" height="769" align="center" valign="top"><form method="post" action="http://www.emsarentacar.com/es/envio.php" onsubmit="return validarForm(this);">
      <table width="287" border="0" cellspacing="2">
        <tbody><tr>
          <td width="281" height="30" align="center"  class="textos31"><span class="textosflota2"><strong>RESERVA EN LINEA:</strong></span></td>
        </tr>
        <tr>
          <td height="48" align="left" class="textosflota1">Nos escribe con el motivo de :<span class="textos22"><strong><br>
            </strong></span><span class="textosflota2"><strong>Cotizar</strong></span><span class="textos22">
              <input name="consulta" type="radio" class="textos12" id="radio4" value="COTIZAR" checked="checked">
              </span><span class="textosflota2"><strong>Reservar</strong></span><span class="textos22">
                <input name="consulta" type="radio" class="textos12" id="radio value=2" value="RESERVAR" radio="radio" "="">
                <br>
                <br>
                Seleccione Sucursal:<br>
                <select name="attn" class="textosflota1" id="attn">
                  <option selected="selected"></option>
                  <option value="natales@emsarentacar.com">Puerto Natales</option>
                  <option value="rentacar@emsarentacar.com">Punta Arenas</option>
                </select>
                <br>
                <br>
                Fecha de Retiro: Dia / mes / Año<br>
                <select name="dia" class="textosflota1" id="dia">
                  <option selected="selected"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select name="mes" class="textosflota1" id="mes">
                  <option selected="selected"></option>
                  <option value="Enero">Enero</option>
                  <option value="Febrero ">Febrero </option>
                  <option value="Marzo ">Marzo </option>
                  <option value="Abril">Abril</option>
                  <option value="Mayo">Mayo</option>
                  <option value="Junio">Junio</option>
                  <option value="Julio">Julio</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Septiembre">Septiembre</option>
                  <option value="Octubre">Octubre</option>
                  <option value="Noviembre">Noviembre</option>
                  <option value="Diciembre">Diciembre</option>
                </select>
                <select name="año" class="textosflota1" id="año">
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
              </select>
                <br>
                <br>
                <span class="textos12">Hora:
                  <select name="hora" class="textosflota1" id="hora">
                    <option selected="selected"></option>
                    <option value="00">00</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                  </select>
                  hrs.<br>
                  <br>
                  En: Elija Lugar.<br>
                  <select name="lugar" class="textosflota1" id="lugar">
                    <option selected="selected"></option>
                    <option value="HOTEL EN PUNTACANA">HOTEL EN PUNTACANA</option>
                    <option value="OFICINA MR-FIX">OFICINA <MR-FIX></MR-FIX></option>
                    <option value="COUNTER AEROPUERTO SANTIAGO DE LOS CABALLEROS"> AEROPUERTO SANTIAGO DE LOS CABALLEROS</option>
                    <option value="HOTEL EN PUERTO PLATA">HOTEL EN PUERTO PLATA</option>
                    <option value="OFICINA EN PUERTO PLATA">OFICINA PUERTO PLATA</option>
                  </select>
              </span><br>
                <br>
                </span>Fecha de devolución:<span class="textos22"> Dia / Mes / Año<br>
                  <select name="dia1" class="textosflota1" id="dia1">
                    <option selected="selected"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  <select name="mes1" class="textosflota1" id="mes3">
                    <option selected="selected"></option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero ">Febrero </option>
                    <option value="Marzo ">Marzo </option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                  </select>
                  <select name="año1" class="textosflota1" id="año3">
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
              </select>
                  <br>
                  <br>
                  <span class="textos12">Hora:
                    <select name="hora1" class="textosflota1" id="hora3">
                      <option selected="selected"></option>
                      <option value="00">00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                    </select>
                    hrs.<strong class="textosflota1"><br>
                      <br>
                      </strong>En: Elija Lugar.<br>
                    <select name="lugar1" class="textosflota1" id="lugar1">
                      <option selected="selected"></option>
                      <option value="HOTEL EN PUNTA ARENAS">HOTEL EN PUNTA ARENAS</option>
                      <option value="OFICINA PUNTA ARENAS">OFICINA PUNTA ARENAS</option>
                      <option value="COUNTER AEROPUERTO PUNTA ARENAS">AEROPUERTO PUNTA ARENAS</option>
                      <option value="HOTEL EN PUERTO NATALES">HOTEL EN PUERTO NATALES</option>
                      <option value="OFICINA PUERTO NATALES">OFICINA PUERTO NATALES</option>
                    </select>
                </span><br>
                  <br>
                  Tipo de vehiculo que me interesa :<span class="textos12">
                    <select name="vehiculo" class="textosflota1" id="vehiculo">
                      <option selected="selected"></option>
                      <option value="TOYOTA YARIS O SIMILAR">TOYOTA YARIS O SIMILAR</option>
                      <option value="CHEVROLET OPTRA SEDAN O SIMILAR">CHEVROLET OPTRA SEDAN O SIMILAR</option>
                      <option value="CHEVROLET OPTRA SW O SIMILAR">CHEVROLET OPTRA SW O SIMILAR</option>
                      <option value="FORD ECO SPORT O SIMILAR">FORD ECO SPORT O SIMILAR</option>
                      <option value="NISSAN XTRAIL O SIMILAR">NISSAN XTRAIL O SIMILAR</option>
                      <option value="TOYOTA HILUX 4X4 O SIMILAR">TOYOTA HILUX 4X4 O SIMILAR</option>
                      <option value="MINIBUS JAC MOTORS O SIMILAR">MINIBUS JAC MOTORS O SIMILAR</option>
                    </select>
                    <br>
                    <br>
                    </span>Somos :<br>
                  <select name="personas" class="textosflota1" id="personas">
                    <option value="1 PERSONA" selected="selected">1 Personas</option>
                    <option value="2 PERSONAS">2 Personas</option>
                    <option value="3 PERSONAS">3 Personas</option>
                    <option value="4 PERSONAS">4 Personas</option>
                    <option value="5 PERSONAS">5 Personas</option>
                    <option value="6 PERSONAS">6 Personas</option>
                    <option value="DE 7 a 12 PERSONAS">de 7 a 12 Personas</option>
                  </select>
                  <br>
                  <br>
                  </span>Necesitamos equipamiento adicional : <span class="textos22">
                    <select name="equipamiento" class="textosflota1" id="equipamiento">
                      <option value="" selected="selected"></option>
                      <option value="SILLA DE BEBE">Silla de Bebe</option>
                      <option value="LONA">Lona</option>
                      <option value="PORTA EQUIPAJES (JETBAG)">Portaequipaje (Jetbag)</option>
                      <option value="GPS">GPS</option>
                      <option value="RUEDA DE REPUESTO ADICIONAL">Rueda de Repuesto Extra</option>
                      <option value="BIDON METALICO">Bidon Metalico</option>
                      <option value="SERVICIO DE CHOFER">Servicio de Chofer</option>
                    </select>
                    <br>
                    <br>
                    Permisos Internacionales:<br>
                    <select name="permisos" class="textosflota1" id="permisos">
                      <option value="" selected="selected"></option>
                      <option value="no">no</option>
                      <option value="1 DIA">1 dia</option>
                      <option value="2 DIAS">2 dias</option>
                      <option value="3 DIAS O MÁS">3 dias o más</option>
                    </select>
                    <br>
                    <br>
                    </span>Para mi desición de arriendo previlegio<strong>:<br>
                      </strong>Comodidad
            <input name="consulta2" type="radio" id="radio5" value="COMODIDAD" checked="checked">
            ó 
            El precio
            <input type="radio" name="consulta2" id="radio6" value="PRECIO">
            <span class="textos22"><br>
              <br>
            </span></td>
        </tr>
        <tr>
          <td height="30" align="center" class="textosflota1"><strong><span class="textosflota2">DATOS DEL PASAJERO:</span></strong></td>
        </tr>
        <tr>
          <td align="left" valign="top" class="textosflota1"><p id="equipamiento2" name="equipamiento"><span class="textos22">Nombre :</span><strong><span class="textos22"><br>
            </span></strong><span class="textos22">
              <input name="nombre" type="text" class="textosflota1" id="nombre" size="30">
              <br>
              Apellidos :</span><strong><span class="textos22"><br>
                </span></strong><span class="textos22">
                  <input name="apellido" type="text" class="textosflota1" id="apellido" size="30">
                  <br>
                  Pasaporte o Rut :<br>
                  <input name="pasaporte" type="text" class="textosflota1" id="pasaporte" size="30">
                  <br>
                  E- mail :<br>
                  <input name="mail" type="text" class="textosflota1" id="mail" size="30">
                  <br>
                  </span><span class="textos22">Observaciones :</span><span class="textos22"> <br>
                    <textarea name="mensaje" id="mensaje" cols="25" rows="5"></textarea>
                    <br>
                    <br>
                    </span><span class="textos22">
                      <input type="submit" name="enviar" id="enviar" value="Enviar">
                      </span><br>
          </p></td>
        </tr>
        <tr>
          <td><hr></td>
        </tr>
      </tbody></table>
    </form></td>
  </tr>
</tbody></table>


</body></html>