switch ( window.location.host ){

	/* case "localhost:8000":
        var RutaGlobal ="http://localhost:8000/admin/participantes";
break;
case "127.0.0.1:8000":
        var RutaGlobal ="http://127.0.0.1:8000/admin/participantes";
break;
case "www.prodeamigos2026.com.ar":
    var RutaGlobal = "http://www.prodeamigos2026.com.ar/admin/participantes";
break;
case "prodeamigos2026.com.ar":
    var RutaGlobal = "http://prodeamigos2026.com.ar/admin/participantes";
break;
	case "www.gtecno.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "https://www.gtecno.com.ar/admin/participantes";
	break;	
	case "gtecno.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "https://www.gtecno.com.ar/admin/participantes";
	break;	*/
	
}
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/admin/participantes";
console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);

$(document).ready(function() {

//carga();

});

function ActualizarPago(btn)
{
	var ValorBoton = btn.value;///obtiene dos valores
	var IdParticipante = ValorBoton;
	$('#PagoBoleta').empty();
	$('#PagoIdPart').val(IdParticipante);
	var route = RutaGlobal+"/ObtengoPago/"+IdParticipante+"";
	$.get(route,function(res){
		console.log(res);
		switch (res[0]) {
			case "NO" :
			case null :
				$('#PagoBoleta').append('<option value="NO"  selected="true">NO</option>');
				$('#PagoBoleta').append('<option value="SI">SI</option>');
				break;
			case "SI" :
				$('#PagoBoleta').append('<option value="NO">NO</option>');
				$('#PagoBoleta').append('<option value="SI"  selected="true">SI</option>');
				break;
		}	
	});	

}
$("#confirmarActualizarPago").click(function(){

	var botonActualizar = document.getElementById('confirmarActualizarPago');
	var botonCaneclar = document.getElementById('cancelarActualizarPago');
	botonActualizar.setAttribute('disabled', true);
	botonCaneclar.setAttribute('disabled', true);	
	document.getElementById('mensajeActualizarEstadoPago').innerHTML="Guardando cambios... por favor espere";

	var par_Pago = $('#PagoBoleta').val();

	var route = RutaGlobal+"/confirmarActualizarPago";
	var token = $("#tokenPago").val();
	var IdParticipante = $('#PagoIdPart').val();
	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:{ 
			   par_Pago: par_Pago,
			   id : IdParticipante
			 },
			
			success: function(res){
				if(res =="exito")
				{
					$("#ModalActualizarPago").modal('toggle');
					var route = RutaGlobal;
					location.href=route;	
				}
				else
				{
					botonActualizar.removeAttribute("disabled");	
					botonCaneclar.removeAttribute("disabled");
					document.getElementById('mensajeerrorHabilitar').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
					
				}

			}

	});  		
});
$("#cancelarActualizarPago").click(function(){
	$("#ModalActualizarPago").modal('toggle');
});