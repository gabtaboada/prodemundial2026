/*
switch ( window.location.host ){
case "localhost:8000":
        var RutaGlobal ="http://localhost:8000/admin/HabilitarDeshabilitar/carga";
break;
case "127.0.0.1:8000":
        var RutaGlobal ="http://127.0.0.1:8000/admin/HabilitarDeshabilitar/carga";
break;
	case "www.prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('') }}admin/HabilitarDeshabilitar/carga";
	break;	
	case "prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('') }}admin/HabilitarDeshabilitar/carga";
	break;			

	
}*/
var RutaGlobal = "https://www.prodeamigos2026.com.ar/admin/HabilitarDeshabilitar/carga";
console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);

$(document).ready(function() {

//carga();

});

function habDeshab(btn)
{
	console.log("HAbilitar carga");
	var EstadoCarga = btn.value;///obtiene dos valores
	$('#HabilitarCarga').val(EstadoCarga);
	if( EstadoCarga == 0)
	{// tengo que deshabilitar
		
		document.getElementById('TextoMsjEstado').innerHTML = 'Se deshabilitara la carga onliner de boletas';
		document.getElementById('confirmarEstadoHabilitar').innerHTML = 'Deshabilitar carga';
	}
	else
	{//si entra aca e 1 , y tengo que habilitar
		document.getElementById('TextoMsjEstado').innerHTML = 'Se habilitara la carga onliner de boletas';
		document.getElementById('confirmarEstadoHabilitar').innerHTML = 'Habilitar carga';
	}
	//document.getElementById('confirmar').innerHTML = 'Cerrar Periodo';
}
$("#confirmarEstadoHabilitar").click(function(){

	var botonActualizar = document.getElementById('confirmarEstadoHabilitar');
	var botonCaneclar = document.getElementById('cancelarEstadoHabilitar');
	botonActualizar.setAttribute('disabled', true);
	botonCaneclar.setAttribute('disabled', true);	
	document.getElementById('mensajeEstadoHabilitar').innerHTML="... por favor espere";

	var route = RutaGlobal+"/confirmarHabDeshabCarga";
	var token = $("#tokenEstadoHabilitar").val();
	var EstadoCarga = $('#HabilitarCarga').val();

	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'json',
		data:{ 
			    EstadoCarga:EstadoCarga
			 },
			
			success: function(res){
				if(res[0] =="exito")
				{
					$("#ModalEstadoHabilitar").modal('toggle');
					var route = RutaGlobal;
					location.href=route;	
				}
				else
				{
					botonActualizar.removeAttribute("disabled");	
					botonCaneclar.removeAttribute("disabled");
					document.getElementById('mensajeEstadoHabilitar').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
					
				}

			}

	});  		
});

$("#cancelarEstadoHabilitar").click(function(){
	$("#ModalEstadoHabilitar").modal('toggle');
});