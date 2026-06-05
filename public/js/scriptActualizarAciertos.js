/*
switch ( window.location.host ){
	case "localhost:8000":
			var RutaGlobal ="http://localhost:8000/admin/master/actualizarAciertos";
	break;
	case "127.0.0.1:8000":
			var RutaGlobal ="http://127.0.0.1:8000/admin/master/actualizarAciertos";
	break;	

	case "prodeamigosqatar2022.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "{{ asset('') }}admin/master/actualizarAciertos";
	break;	


}
*/
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/admin/master/actualizarAciertos";
console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);

$(document).ready(function() {

//carga();

});

function Actualizar()
{
	console.log("Actualizar aciertos");
}
$("#confirmarActualizarAciertos").click(function(){

	var botonActualizar = document.getElementById('confirmarActualizarAciertos');
	var botonCaneclar = document.getElementById('cancelarActualizarAciertos');
	botonActualizar.setAttribute('disabled', true);
	botonCaneclar.setAttribute('disabled', true);	
	document.getElementById('mensajeActualizarAciertos').innerHTML="Actualizando tabla... por favor espere";

	var route = RutaGlobal+"/confirmarActualizarAciertos";
	var token = $("#tokenActualizarAciertos").val();

	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:{ 
			    id:1
			 },
			
			success: function(res){
				if(res[0] =="exito")
				{
					$("#ModalActualizarAciertos").modal('toggle');
					var route = RutaGlobal;
					location.href=route;	
				}
				else
				{
					botonActualizar.removeAttribute("disabled");	
					botonCaneclar.removeAttribute("disabled");
					document.getElementById('mensajeActualizarAciertos').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
					
				}

			}

	});  		
});

$("#cancelarActualizarAciertos").click(function(){
	$("#ModalActualizarAciertos").modal('toggle');
});

