<div class="about-bottom inner-padding">

</div>
<div class="wthree-mid">
	<div class="container">
		@include('front.alerts.request')
		
		<form action="{{ route('boleta.store') }}" method="POST">{{ csrf_field() }}
			
			@include('front.boleta.forms.formsNoPago')
			<div class="form-group">
			<input type="hidden" name="Part_id" value="{{ $participanteID }}">
			</div>	
			

		</form>				
	</div>

</div>