/*
switch ( window.location.host ){

case "localhost:8000":
        var RutaGlobal ="http://localhost:8000/admin/participantes/VerBoleta";
break;
case "127.0.0.1:8000":
        var RutaGlobal ="http://127.0.0.1:8000/admin/participantes/VerBoleta";
break;	
	case "www.prodeamigosqatar2022.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "{{ asset('') }}admin/participantes/VerBoleta";
	break;	
	case "prodeamigosqatar2022.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "{{ asset('') }}admin/participantes/VerBoleta";
	break;		


}
*/
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/admin/participantes/VerBoleta";
console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);

$(document).ready(function() {

//carga();

});

function Modificar(btn)
{
	var ValorBoton = btn.value;///obtiene dos valores
	
	var vectorValorBoton = ValorBoton.split("/");	    
	var IdApuesta = vectorValorBoton[0];
	var Grupo = vectorValorBoton[1];
	var Numero = vectorValorBoton[2];
	var Partido = Grupo+Numero;

	$('#Bandera1').empty();
	$('#Bandera2').empty();
	$('#cruzL').empty();
	$('#cruzE').empty();
	$('#cruzV').empty();
	$('#resultadoEdit').empty();



	console.log("Partido "+Partido+" id apuesta "+IdApuesta+ " Grupo "+Grupo+ " Numero "+Numero );
	var route = RutaGlobal+"/DatosApuesta/"+IdApuesta+"/"+Grupo+"/"+Numero+"/"+Partido+"";
	$.get(route,function(res){
		console.log(res);
		switch (res[1]) {
			case "L" :
				$('#resultadoEdit').append('<option value="L"  selected="true">Local</option>');
				$('#resultadoEdit').append('<option value="E">Empate</option>');
				$('#resultadoEdit').append('<option value="V">Visitante</option>');		

				var cruzL= new Image();
				var divcruzL = document.getElementById('cruzL');
				cruzL.onload = function() {
				  divcruzL.appendChild(cruzL);
				};

				cruzL.src = "/images/cruz.png";
			    cruzL.style.height = '19px';
			    cruzL.style.width = '21px';
				break;
			case "E" :
				$('#resultadoEdit').append('<option value="L">Local</option>');
				$('#resultadoEdit').append('<option value="E"  selected="true">Empate</option>');
				$('#resultadoEdit').append('<option value="V">Visitante</option>');			
				var cruzE= new Image();
				var divcruzE = document.getElementById('cruzE');
				cruzE.onload = function() {
				  divcruzE.appendChild(cruzE);
				};

				cruzE.src = "/images/cruz.png";
			    cruzE.style.height = '19px';
			    cruzE.style.width = '21px';				
				break;
			case "V" :
				$('#resultadoEdit').append('<option value="L">Local</option>');
				$('#resultadoEdit').append('<option value="E">Empate</option>');
				$('#resultadoEdit').append('<option value="V"  selected="true">Visitante</option>');				
				var cruzV= new Image();
				var divcruzV = document.getElementById('cruzV');
				cruzV.onload = function() {
				  divcruzV.appendChild(cruzV);
				};

				cruzV.src = "/images/cruz.png";
			    cruzV.style.height = '19px';
			    cruzV.style.width = '21px';				
				break;								
		}
	var Bandera1 = new Image();
	var divBandera1 = document.getElementById('Bandera1');
	Bandera1.onload = function() {
	  divBandera1.appendChild(Bandera1);
	};

	Bandera1.src = res[4];
    Bandera1.style.height = '30px';
    Bandera1.style.width = '30px';
    document.getElementById('Equipo1').innerHTML=res[2];

	var Bandera2 = new Image();
	var divBandera2 = document.getElementById('Bandera2');
	Bandera2.onload = function() {
	  divBandera2.appendChild(Bandera2);
	};
	
	Bandera2.src = res[5];
    Bandera2.style.height = '30px';
    Bandera2.style.width = '30px';
	document.getElementById('Equipo2').innerHTML=res[3];    

	$('#Grupopartido').val(res[0]);
	$('#divIdApuesta').val(IdApuesta);
	$('#grupoOculto').val(Grupo);
	$('#GolEqui1').val(res[6]);
	$('#GolEqui2').val(res[7]);

/*	
	var Equipo1 = document.getElementById('Equipo1');
	var Bandera1 = document.getElementById('Bandera1');
	Equipo1.src = res[2];
	var Bandera1 = document.getElementById('Bandera1');
	Bandera1.src = res[4];
*/

	});

}

$("#confirmarActualizar").click(function(){
	var GolesEquipo1 = $('#GolEqui1').val();
	var GolesEquipo2 = $('#GolEqui2').val();
	var resultadoEdit = $('#resultadoEdit').val();
	var ErrorSeleccionarResultado = 1;
	switch (resultadoEdit) {
		case "L" :
				if ( GolesEquipo1 > GolesEquipo2 )
				{
					ErrorSeleccionarResultado =	0 ;	
				}
			break;
		case "E" :
				if ( GolesEquipo1 == GolesEquipo2 )
				{
					ErrorSeleccionarResultado =	0 ;	
				}		
			break;			
		case "V" :
				if ( GolesEquipo1 < GolesEquipo2 )
				{
					ErrorSeleccionarResultado =	0 ;	
				}		
			break;	
	}	
	if ( ErrorSeleccionarResultado == 0 )			
	{
			var botonActualizar = document.getElementById('confirmarActualizar');
			var botonCaneclar = document.getElementById('cancelarActualizar');
			botonActualizar.setAttribute('disabled', true);
			botonCaneclar.setAttribute('disabled', true);	
			document.getElementById('mensajeActualizarEstado').innerHTML="Guardando cambios... por favor espere";

			var GrupoPartido = $('#Grupopartido').val();
			
			var divIdApuesta = $('#divIdApuesta').val();
			var grupoOculto = $('#grupoOculto').val();
			

			console.log("Grupo "+grupoOculto+"grupo partido "+GrupoPartido +" resultado partido "+resultadoEdit);
			var route = RutaGlobal+"/confirmarEditar";
			var token = $("#tokenEditar").val();

			$.ajax({
				url:route,
				headers: {'X-CSRF-TOKEN':token},
				type:'POST',
				dataType:'json',
				data:{ 
					   GrupoPartido: GrupoPartido,
					   resultadoEdit : resultadoEdit,
					   id : divIdApuesta,
					   GolesEquipo1 : GolesEquipo1,
					   GolesEquipo2 : GolesEquipo2,
					   grupo : grupoOculto
					 },
					
					success: function(res){
						if(res[0] =="exito")
						{
							$("#ModalEditarApuesta").modal('toggle');
							var route = RutaGlobal+"/"+res[1];
							location.href=route;	
						}
						else
						{
							botonActualizar.removeAttribute("disabled");	
							botonCaneclar.removeAttribute("disabled");
							document.getElementById('mensajeActualizarEstado').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
							
						}

					}

			});  	
	}
	else
	{
		document.getElementById('mensajeActualizarEstado').innerHTML="Revisar los goles con el resultado seleccionado";
	}
	
});
$("#cancelarActualizar").click(function(){
	$("#ModalEditarApuesta").modal('toggle');
});