@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">

</div>
<div class="wthree-mid">
	<div class="container">
		@include('front.resultados.grupoAB')

		@include('front.resultados.grupoCD')

		@include('front.resultados.grupoEF')

		@include('front.resultados.grupoGH')
			
					
	</div>

</div>
     
	  					        


<!-- //about inner -->

@endsection
@section('scripts')
	{!!Html::script('js/ScriptRedireccionar.js')!!}
@endsection