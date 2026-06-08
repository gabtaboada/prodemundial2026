@if(!Auth::guard('participantes')->check())
	<?php 
	    Session(['DreamTeam' => 0 ]);
	 	Session(['Intocables' => 0 ]); 
	 	Session(['Gflow' => 0 ]); 
	 ?>
@endif	
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Mundial Usa - Canada - Mexico 2026 ::: Prode de amigos</title>
<!-- custom-theme -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pedicure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- custom-theme css files -->
<link href="{{ asset('css/Front_bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/Front_style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme css files-->

<!-- font-awesome-icons -->
<link href="{{ asset('css/Front_font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //googlefonts -->
<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

<!--favicon fin-->
</head>
<body>

<!--/main-header-->
<div class="baner">
	
	<!--/banner-info-->
	<div class="header">
		<div class="w3-agile-logo">
			<div class="container">
				<div class="head-wl">
					<div class="headder-w3">
								<h1><a href="https://www.prodeamigos2026.com.ar">
											<div style="max-width:257px;" id="logoinicio">
												<img src="{{ asset('FrontImages/logo1-v3.png') }}" alt="" title="" width="257px" height="55px">
											</div>
								</a></h1>
					</div>
					<div class="w3-header-top-right-text">
								
						</div>
					<div class="email-right" style="text-align:center; padding: 0px 0px;">
    @if(Auth::guard('participantes')->check())
        <span style="color:#fff; font-weight:bold; font-size:15px; margin-right:10px;">
            {{ Auth::guard('participantes')->user()->par_name }}
            {{ Auth::guard('participantes')->user()->par_apellido }}
        </span>
        <a href="{!!URL::to('/logoutUsuario')!!}" class="btn-salir">Salir</a>
    @else
        <a href="{!!URL::to('IngresarUsuario')!!}" class="btn-inicio-sesion">Iniciar sesión</a>
    @endif
</div>
				</div>

			</div>
				
		</div>
		<div class="top-nav">
		<nav class="navbar navbar-default navbar-fixed-top">
	
	<!-- //header -->
	<div class="container">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav ">
						<li class="active"><a href="{!!URL::to('inicio')!!}">Inicio</a></li>
						<li><a href="{!!URL::to('resultados')!!}">Resultados</a></li>
						<li><a href="{!!URL::to('posiciones')!!}">Posiciones</a></li>
						<li><a href="{!!URL::to('participantes')!!}">Participantes</a></li>

{{-- @if(Auth::guard('participantes')->check() || Auth::check()) --}}
@if(Auth::guard('participantes')->check())
    <li><a href="{!!URL::to('boleta')!!}">Ver mi boleta</a></li>
@endif
							
					</ul>
					<ul class="nav navbar-nav ">
							@if ( Session('DreamTeam') == 1 )
								<li><a href="{!!URL::to('DreamTeam')!!}">Dream Team</a></li>
							@endif
							@if ( Session('Intocables') == 1 )
								<li><a href="{!!URL::to('Intocables')!!}">Intocables</a></li>
							@endif
							@if ( Session('Gflow') == 1 )
								<li><a href="{!!URL::to('Gflow')!!}">Gflow</a></li>
							@endif	
					</ul>	
				</div>
			</div>
			<div class="clearfix"> </div>
			</nav>	
		</div>
	  </div>
			<!--/banner-info-->
</div>
 <!--/banner-section-->
 @yield('content')

	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
					<div class="footer_bottom1">
						<p>© 2026 Prode Mundial 2026. Todos los derechos reservados</p>
					</div>
		</div>
	</div>
	<!-- //footer -->

<!-- js -->

<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- for bootstrap working -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->

<!-- for smooth scrolling -->
<script src="{{ asset('js/Front_SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/Front_move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/Front_easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //for smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
    @section('scripts')
    @show
</body>
</html>