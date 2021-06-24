function Calcular(){

	var Des =  document.getElementById('vehiculo').value;
	var Imagen =  document.getElementById('imagen');

		
	var Precio = document.getElementById('precio').value;
	var Dias = document.getElementById('dias').value;
	var Subtotal = Precio*Dias;
        document.getElementById('subtotal').value=Subtotal;



        var Check= document.getElementById('check');
        if (Check.checked==true) {
        	var Itbis=Subtotal*0.18;
        	 document.getElementById('itbis').value=Itbis;
        } else{
        	Itbis=0;
        }


    var Descuento = document.getElementById('descuento').value;
    var Caldescuento = (Subtotal*Descuento)/100;
    var Total = (Subtotal+Itbis)-Caldescuento;
        document.getElementById('total').value=Total;
    var Pagado = document.getElementById('pagado').value;
    if (Pagado>0){
    var Devuelta = Pagado-Total;
    	document.getElementById('devuelta').value=Devuelta;

    	}

    else {
    	Devuelta=0;
    }
	if (Pagado<Total) {
		alert("Falta Dinero maestro");
	} else{		
		alert("Pago Exitoso, que Dios lo bendiga");
	}
   }
    

    function Seleccion (){

    var Fpago=document.getElementById('fpago');
    if (Fpago.value=="efe") {

    var Efectivo=document.getElementById('efectivo');
    Efectivo.style.display="inline";

    var Tarjetas =document.getElementById('tarjetas');
    Tarjetas.style.display="none";

     } else {
    var Tarjetas =document.getElementById('tarjetas');
    Tarjetas.style.display="inline";

    var Efectivo=document.getElementById('efectivo');
	Efectivo.style.display="none";
		} 
		}



    

