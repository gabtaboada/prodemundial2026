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
		@include('front.boleta.GrupoIJ')
		@include('front.boleta.GrupoKL')
		@include('front.boleta.ModalEditarApuesta')
	</div>

</div>
     
	  					        
	@section('scripts')
	<script src="{{ asset('Front/js/scriptEditarApuesta.js') }}"></script>
	@endsection


<!-- //about inner -->		