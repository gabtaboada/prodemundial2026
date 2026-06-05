/*
switch ( window.location.host ){

	case "prodeamigos2026.com.ar":
			var RutaGlobal = "https://www.prodeamigos2026.com.ar"+window.location.pathname;
			location.href=RutaGlobal;
	break;	
	case "https://prodeamigosqatar2022.com.ar":
			var RutaGlobal = "https://www.prodeamigos2026.com.ar"+window.location.pathname;
			location.href=RutaGlobal;
	break;	
}*/
var RutaGlobal = window.location.protocol + "//" + window.location.host ;
console.log("path name "+window.location.pathname);
console.log("protocolo "+window.location.protocol);
console.log("Host "+window.location.host);