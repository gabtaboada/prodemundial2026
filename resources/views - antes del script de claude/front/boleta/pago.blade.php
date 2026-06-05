<div class="about-bottom inner-padding">

</div>
<div class="wthree-mid">
	<div class="container">
		@include('front.alerts.request')
		
		{!!Form::open(['route'=>'boleta.store','method'=>'POST'])!!}
			
			@include('front.boleta.forms.formsNoPago')
			<div class="form-group">
			{!!Form::hidden('Part_id', $participanteID)!!}
			</div>	
			

		{!!Form::close()!!}				
	</div>

</div>