@if(!Auth::user())
	<?php 
	    Session(['DreamTeam' => 0 ]);
	 	Session(['Intocables' => 0 ]); 
	 ?>
@endif	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mundial Usa - Canada - Mexico 2026 ::: Prode de amigos</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pedicure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<!-- for banner css files -->
<link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/Front_zoomslider.css') }}" /><!--zoomslider css -->
<script type="text/javascript" src="{{ asset('js/Front_modernizr-2.6.2.min.js') }}"></script><!--modernizer css -->
<!-- //for banner css files -->
<link rel="stylesheet" href="{{ asset('css/Front_flexslider.css') }}" type="text/css" media="all" />
<!-- custom-theme css files -->
<link href="{{ asset('css/Front_bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/Front_style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme css files-->
<!-- font-awesome-icons -->
<link href="{{ asset('css/Front_font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //googlefonts -->
</head>
<body>					
	<div class="container">
		<div class="modal-dialog" role="document">
					<div class="modal-body">
						<a href="../">
							<img src="{{ asset('FrontImages/logograndeV2.png') }}" alt=" " class="img-responsive" />
						</a>
						@yield('content')
					</div>
		</div>			
	</div>		
    @section('scripts')
    @show			
</body>
</html>					