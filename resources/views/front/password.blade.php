@extends('layouts.front')

@section('content')
				
		 <form action="{{ url('/RecuperacionPassword') }}" method="POST">{{ csrf_field() }}

			<div class="contact-form">
				<div>
					<span>
						@if(Session::has('message-error'))
							
						@endif
					</span>
				</div>	
					<div>

						<span>
							<input name="email" type="text" class="textbox" required="" id="email" placeholder="Ingresa el mail de recuperación">
						</span>
					</div>
		
					<div>
						<span>
							<input type="submit" value="Enviar link" class="myButton" id="EnviarMailAdmin">
						</span>
					</div>													

			</div>		
		 </form>
						<div class="contact-form">
							<div>
									<span><label><a href="{!!URL::to('/IngresarUsuario')!!}" style="text-decoration:none;">volver</a></label></span>	
							</div>
						</div>		
@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection