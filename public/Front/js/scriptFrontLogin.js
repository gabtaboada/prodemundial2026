switch ( window.location.host ){
	case "localhost:8000":
			var RutaGlobal ="";
	break;
	case "www.prodeamigosqatar2022.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "https://www.prodeamigosqatar2022.com.ar";
	break;	
	case "prodeamigosqatar2022.com.ar":
			var RutaGlobal = "https://www.prodeamigosqatar2022.com.ar";
	break;	
	/*
	case "www.prodeamigosqatar2022.com.ar":
			//var RutaGlobal = "https://www.gtecno.com.ar"+window.location.pathname;
			var RutaGlobal = "https://www.prodeamigosqatar2022.com.ar";
	break;	
	case "prodeamigosqatar2022.com.ar":
			var RutaGlobal = "https://www.prodeamigosqatar2022.com.ar";
	break;	*/
		
}



$("#EnviarLogin").click(function(){
	console.log("path name "+window.location.pathname);
	console.log("Probando urls "+RutaGlobal);
	console.log("protocolo "+window.location.protocol);
	console.log("Host "+window.location.host);

	var route = RutaGlobal+"/EnviarLogin";
	var token = $("#tokenLogin").val();
	var mail = $("#").val();
	var pass = $("#").val();


});
