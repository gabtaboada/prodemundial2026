 <!-- about inner -->
<div class="about-bottom inner-padding">

</div>
<div class="wthree-mid">
	<div class="container">
		@include('front.alerts.success')
		@include('front.boleta.GrupoAB')
		@include('front.boleta.GrupoCD')
		@include('front.boleta.GrupoEF')
		@include('front.boleta.GrupoGH')
		@include('front.boleta.ModalEditarApuesta')
	</div>

</div>
     
	  					        
	@section('scripts')
	{!!Html::script('Front/js/scriptEditarApuesta.js')!!}
	@endsection


<!-- //about inner -->		