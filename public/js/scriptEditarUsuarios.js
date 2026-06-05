/*
switch ( window.location.host ){
	case "localhost:8000":
			var RutaGlobal ="http://localhost:8000/admin/master";
	break;
	case "127.0.0.1:8000":
			var RutaGlobal ="http://127.0.0.1:8000/admin/master";
	break;
	case "www.prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('admin/usuarios') }}";
	break;	
	case "prodeamigosqatar2022.com.ar":
			var RutaGlobal = "{{ asset('admin/usuarios') }}";
	break;	
}*/
var RutaGlobal = window.location.protocol + "//" + window.location.host + "/usuarios";
console.log("path name "+window.location.pathname);
console.log("Probando urls "+RutaGlobal);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);

$(document).ready(function() {
 
 carga();

});

function carga()
{
		var URLactual = window.location.pathname;

		console.log("Search : "+URLactual);
		var ValorSearch = URLactual.split("/");
		console.log("valor search "+ValorSearch[3]);// en el [3]esta el id del particpante
		var IdParticipantes = ValorSearch[3];
	
		var route = RutaGlobal;

		$('#DivTablaGruposAmigos').show();
		$("#TablaGruposAmigos").empty();
		$.get(route+'/ObtengoGrupos/'+IdParticipantes+'',function(res){
			console.log("respuesta "+res);
				$.each(res[0],function(key,GruposTotales){
			 
							if( GruposTotales.seleccionado == 0)
								{
									$("#TablaGruposAmigos").append('<tr><td></td><td ><input type="checkbox" value='+GruposTotales.id+' style="margin-top:5px;margin-right:10px;" id="CheckGrupoAmigo[]" name="CheckGrupoAmigo[]"></td><td style="padding-top:10px;">'+GruposTotales.Grupo_amigos+'</td></tr>');	
								}
							else
								{
									$("#TablaGruposAmigos").append('<tr style="background-color: #dff0d8;"><td></td><td ><input type="checkbox" value='+GruposTotales.id+' style="margin-top:5px;margin-right:10px;" id="CheckGrupoAmigo[]" name="CheckGrupoAmigo[]" checked></td><td style="padding-top:10px;"><strong>'+GruposTotales.Grupo_amigos+'</strong></td></tr>');									
								}						
		 

						
				});
		});		
				
}
