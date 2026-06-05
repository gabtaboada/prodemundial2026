/*
switch ( window.location.host ){
	case "localhost:8000":
			var RutaGlobal ="http://localhost:8000/admin/master";
	break;
	case "127.0.0.1:8000":
			var RutaGlobal ="http://127.0.0.1:8000/admin/master";
	break;		
	case "prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('admin/master') }}";
			console.log("console"+2);

	break;	
	case "www.prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('admin/master') }}";
			console.log("console"+3);

	break;	
case "127.0.0.1:8000":
    var RutaGlobal ="http://127.0.0.1:8000/admin/master";
break;	
		
}
*/
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/admin/master";

console.log("path name 22"+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host 22 "+window.location.host);

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
	$('#resultadoMaster').empty();



	console.log("Partido "+Partido+" id apuesta "+IdApuesta+ " Grupo "+Grupo+ " Numero "+Numero );
	var route = RutaGlobal+"/ObtengoDatosMaster/"+IdApuesta+"/"+Grupo+"/"+Numero+"/"+Partido+"";
	$.get(route,function(res){
		console.log(res);
		// res[6] -> goles equipo 1
		// res[7] -> goles equipo 2
		switch (res[1]) {
			case "L" :
				$('#resultadoMaster').append('<option value="L"  selected="true">Local</option>');
				$('#resultadoMaster').append('<option value="E">Empate</option>');
				$('#resultadoMaster').append('<option value="V">Visitante</option>');		

				var cruzL= new Image();
				var divcruzL = document.getElementById('cruzL');
				console.log ("VAR linea 69  duvcruzL" + divcruzL);
				cruzL.onload = function() {
				  divcruzL.appendChild(cruzL);
				};

				cruzL.src = "/images/cruz.png";
			    cruzL.style.height = '19px';
			    cruzL.style.width = '21px';
				break;
			case "E" :
				$('#resultadoMaster').append('<option value="L">Local</option>');
				$('#resultadoMaster').append('<option value="E"  selected="true">Empate</option>');
				$('#resultadoMaster').append('<option value="V">Visitante</option>');			
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
				$('#resultadoMaster').append('<option value="L">Local</option>');
				$('#resultadoMaster').append('<option value="E">Empate</option>');
				$('#resultadoMaster').append('<option value="V"  selected="true">Visitante</option>');				
				var cruzV= new Image();
				var divcruzV = document.getElementById('cruzV');
				cruzV.onload = function() {
				  divcruzV.appendChild(cruzV);
				};

				cruzV.src = "/images/cruz.png";
			    cruzV.style.height = '19px';
			    cruzV.style.width = '21px';				
				break;
			case null :
				$('#resultadoMaster').append('<option value="0">Seleccione Resultado</option>');
				$('#resultadoMaster').append('<option value="L">Local</option>');
				$('#resultadoMaster').append('<option value="E">Empate</option>');
				$('#resultadoMaster').append('<option value="V">Visitante</option>');	
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
    console.log("RES 3 master : "+res[3]);
	document.getElementById('Equipo2').innerHTML=res[3];    

	$('#GrupopartidoMaster').val(res[0]);
	$('#grupoOcultoMaster').val(Grupo);
	$('#GolEqui1').val(res[6]);
	$('#GolEqui2').val(res[7]);
	});//cierrro Get 

}

$("#confirmarActualizarMaster").click(function(){
	var resultado = $('#resultadoMaster').val();
	console.log("resultado "+resultado);
	if( resultado == 0 )
	{
		document.getElementById('mensajeActualizarEstadoMaster').innerHTML="Debe seleccionar un resultado";
	}
	else
	{
		var botonActualizar = document.getElementById('confirmarActualizarMaster');
		var botonCaneclar = document.getElementById('cancelarActualizarMaster');
		botonActualizar.setAttribute('disabled', true);
		botonCaneclar.setAttribute('disabled', true);	
		document.getElementById('mensajeActualizarEstadoMaster').innerHTML="Guardando cambios... por favor espere";

		var GrupopartidoMaster = $('#GrupopartidoMaster').val();
		var grupoOcultoMaster = $('#grupoOcultoMaster').val();
		var GolEqui1 = $('#GolEqui1').val();
		var GolEqui2 = $('#GolEqui2').val();

		console.log(" goles equipo 1 "+GolEqui1+" goles equipo 2 "+GolEqui2);
		console.log("Grupo "+grupoOcultoMaster+" grupo partido "+GrupopartidoMaster +" resultado partido "+resultado);
		var route = RutaGlobal+"/confirmarActualizarMaster";
		var token = $("#tokenMaster").val();

		$.ajax({
			url:route,
			headers: {'X-CSRF-TOKEN':token},
			type:'POST',
			dataType:'json',
			data:{ 
				   GrupoPartido: GrupopartidoMaster,
				   resultado : resultado,
				   id : 1,
				   grupo : grupoOcultoMaster,
				   GolesEquipo1 : GolEqui1,
				   GolesEquipo2 : GolEqui2
				 },
				
				success: function(res){
					if(res[0] =="exito")
					{
						$("#ModalEditarApuesta").modal('toggle');
						var route = RutaGlobal;
						location.href=route;	
					}
					else
					{
						if(res[0] =="errorResultado")
						{
							botonActualizar.removeAttribute("disabled");	
							botonCaneclar.removeAttribute("disabled");
							document.getElementById('mensajeActualizarEstadoMaster').innerHTML="Revisar los goles con el resultado seleccionado";														
						}
						else
						{
							botonActualizar.removeAttribute("disabled");	
							botonCaneclar.removeAttribute("disabled");
							document.getElementById('mensajeActualizarEstadoMaster').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";							
						}						

						
					}

				}

		});  		
	}
		
});
$("#cancelarActualizarMaster").click(function(){
	$("#ModalEditarMaster").modal('toggle');
});

function Eliminar(btn)
{

	var ValorBoton = btn.value;///obtiene dos valores
	
	var vectorValorBoton = ValorBoton.split("/");	    
	var IdApuesta = vectorValorBoton[0];
	var Grupo = vectorValorBoton[1];
	var Numero = vectorValorBoton[2];
	var Partido = Grupo+Numero;

	$('#GrupoMasterEliminar').val(Grupo);
	$('#PartidoMasterEliminar').val(Partido);
	console.log("Partido "+Partido+"Grupo "+Grupo);
	
/*
	console.log("Partido "+Partido+" id apuesta "+IdApuesta+ " Grupo "+Grupo+ " Numero "+Numero );
	var route = RutaGlobal+"/ObtengoDatosMaster/"+IdApuesta+"/"+Grupo+"/"+Numero+"/"+Partido+"";
	$.get(route,function(res){
		console.log(res);


	});
*/
}
$("#confirmarEliminarMaster").click(function(){
	var botonActualizar = document.getElementById('confirmarEliminarMaster');
	var botonCaneclar = document.getElementById('cancelarEliminarMaster');
	botonActualizar.setAttribute('disabled', true);
	botonCaneclar.setAttribute('disabled', true);	
	document.getElementById('mensajeEliminarEstadoMaster').innerHTML="Guardando cambios... por favor espere";

	var GrupoMasterEliminar = $('#GrupoMasterEliminar').val();
	var PartidoMasterEliminar = $('#PartidoMasterEliminar').val();
	var route = RutaGlobal+"/confirmarEliminarMaster";
	var token = $("#tokenMasterEliminar").val();
	$.ajax({
			url:route,
			headers: {'X-CSRF-TOKEN':token},
			type:'POST',
			dataType:'json',
			data:{ 
				   partido: PartidoMasterEliminar,
				   id : 1,
				   grupo : GrupoMasterEliminar
				 },
				
				success: function(res){
					if(res[0] =="exito")
					{
						$("#ModalEliminarMaster").modal('toggle');
						var route = RutaGlobal;
						location.href=route;	
					}
					else
					{
						botonActualizar.removeAttribute("disabled");	
						botonCaneclar.removeAttribute("disabled");
						document.getElementById('mensajeEliminarEstadoMaster').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
						
					}

				}

		});  
});	
$("#cancelarEliminarMaster").click(function(){
	$("#ModalEliminarMaster").modal('toggle');
});
