/*
switch ( window.location.host ){
    case "localhost:8000":
        var RutaGlobal = "http://localhost:8000/boleta";
    break;
    case "127.0.0.1:8000":
        var RutaGlobal = "http://127.0.0.1:8000/boleta";
    break;
    case "localhost":
        var RutaGlobal = "http://localhost/mundial2026_claude/mundial2026_laravel11/prode_backup_20260605-viernes/public_html/public/boleta";
    break;
    case "www.prodeamigos2026.com.ar":
        var RutaGlobal = "https://www.prodeamigos2026.com.ar/boleta";
    break;
    case "prodeamigos2026.com.ar":
        var RutaGlobal = "https://www.prodeamigos2026.com.ar/boleta";
    break;	

}*/
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/boleta";
//www.gtecno.com.ar/boleta/ObtengoDatosApuesta/A/A1 
console.log("probando gtecho");


console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);



function ModificarApuesta(btn)
{
  

	var ValorBoton = btn.value;///obtiene dos valores
	
	var vectorValorBoton = ValorBoton.split("/");	    
	//var IdApuesta = vectorValorBoton[0];
	var Partido = vectorValorBoton[0];
	var Grupo = vectorValorBoton[1];
	//var Resultado = vectorValorBoton[2];
	//var Partido = Grupo+Numero;

	$('#Bandera1').empty();
	$('#Bandera2').empty();
	$('#cruzL').empty();
	$('#cruzE').empty();
	$('#cruzV').empty();
	$('#resultadoApuesta').empty();

	//$('#ResultadoOcul').val(Resultado);
	$('#GrupoOcul').val(Grupo);
	$('#PartidoOcul').val(Partido);

    //console.log("Partido "+Partido+" id apuesta "+IdApuesta+ " Grupo "+Grupo+ " Numero "+Numero );
    
    console.log("Partido "+Partido+"  Grupo "+Grupo);
	var route = RutaGlobal+"/ObtengoDatosApuesta/"+Grupo+"/"+Partido+"";

	$.get(route,function(res){
		var Resultado = res[1];
		console.log(res);
		switch (res[1]) {
			case "L" :
				console.log("Case L");
				var cruzL= new Image();
				var divcruzL = document.getElementById('cruzL');
				console.log ("VAR linea 72  divcruzL" + divcruzL);
				console.log("varibale cruz L " + cruzL);
				cruzL.onload = function() {
				  divcruzL.appendChild(cruzL);
				};

				cruzL.src = "/images/cruz.png";
			    cruzL.style.height = '19px';
			    cruzL.style.width = '21px';
				break;
			case "E" :
				console.log("Case E");
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
				console.log("Case V");
				var cruzV= new Image();
				var divcruzV = document.getElementById('cruzV');
				console.log ("VAR linea 98  divcruzV" + divcruzV);
				cruzV.onload = function() {
				  divcruzV.appendChild(cruzV);
				};

				cruzV.src = "/images/cruz.png";
			    cruzV.style.height = '19px';
			    cruzV.style.width = '21px';				
				break;
								
		}//cierro switch
	

	$('#GrupopartidoMaster').val(res[0]);
	$('#grupoOcultoMaster').val(Grupo);
	$('#GolEqui1').val(res[6]);
	$('#GolEqui2').val(res[7]);
	


		var Bandera1 = new Image();
		var divBandera1 = document.getElementById('Bandera1');
		Bandera1.onload = function() {
			  divBandera1.appendChild(Bandera1);
			};

		Bandera1.src = res[4];
	    Bandera1.style.height = '30px';
	    Bandera1.style.width = '30px';
	    Bandera1.style.marginTop = '-5px';
	    Bandera1.style.border = "1px solid #ddd";

	    document.getElementById('Equipo1').innerHTML=res[2];


		var Bandera2 = new Image();
		var divBandera2 = document.getElementById('Bandera2');
		Bandera2.onload = function() {
			  //divBandera2.appendChild("Bandera2");
			  divBandera2.appendChild(Bandera2);
			};
	    console.log("Linea 126 res2 "+res[2]);

		Bandera2.src = res[5];
	    Bandera2.style.height = '30px';
	    Bandera2.style.width = '30px';
	    Bandera2.style.marginTop = '-5px';
		document.getElementById('Equipo2').innerHTML=res[3];


			for(i=0;i<13;i++)
				{
					if( i == res[6])
					{
						$('#GolesEquipo1').append('<option value="'+i+'"  selected="true">'+i+'</option>');
					}
					else

					{
						$('#GolesEquipo1').append('<option value="'+i+'"  >'+i+'</option>');
					}
				}    
			for(i=0;i<13;i++)
				{
						if( i == res[7])
						{
							$('#GolesEquipo2').append('<option value="'+i+'"  selected="true">'+i+'</option>');
						}
						else

						{
							$('#GolesEquipo2').append('<option value="'+i+'"  >'+i+'</option>');
						}
				}    		



  	}); 
}

$("#confirmarActualizarApuesta").click(function(){


		var botonActualizar = document.getElementById('confirmarActualizarApuesta');
		var botonCaneclar = document.getElementById('cancelarApuesta');
		botonActualizar.setAttribute('disabled', true);
		botonCaneclar.setAttribute('disabled', true);	
		document.getElementById('mensajeActualizarEstadoApuesta').innerHTML="Guardando cambios... por favor espere";

		var GrupoApuesta = $('#GrupoOcul').val();
		var PartidoApuesta = $('#PartidoOcul').val();
		
		var GolesEquipo1 =$('#GolesEquipo1').val();
		var GolesEquipo2 =$('#GolesEquipo2').val();

		var route = RutaGlobal+"/confirmarActualizarApuesta";
		var token = $("#tokenApuesta").val();

		$.ajax({
			url:route,
			headers: {'X-CSRF-TOKEN':token},
			type:'POST',
			dataType:'json',
			data:{ 
				   PartidoApuesta: PartidoApuesta,
				   GrupoApuesta : GrupoApuesta,
				   GolesEquipo1 : GolesEquipo1,
				   GolesEquipo2 : GolesEquipo2
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
						botonActualizar.removeAttribute("disabled");	
						botonCaneclar.removeAttribute("disabled");
						document.getElementById('mensajeActualizarEstadoApuesta').innerHTML="No se pudo guardar los cambios, si el problema persiste por favor contactese con el administrador del sistema";
						
					}

				}

		});  		
	

});
$("#cancelarApuesta").click(function(){
	$("#ModalEditarApuesta").modal('toggle');
});


/////// CAMBIO EN LOS SELECT //// 
/*
$('#cupos').on('change',function(e){

});	
*/