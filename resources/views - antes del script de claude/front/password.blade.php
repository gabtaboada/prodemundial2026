@extends('layouts.front')

@section('content')
				
		 {!!Form::open(['url' => '/RecuperacionPassword'])!!}

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
		 {!!Form::close()!!}
						<div class="contact-form">
							<div>
									<span><label><a href="{!!URL::to('/IngresarUsuario')!!}" style="text-decoration:none;">volver</a></label></span>	
							</div>
						</div>		
@endsection
@section('scripts')
	{!!Html::script('js/ScriptRedireccionar.js')!!}
@endsection