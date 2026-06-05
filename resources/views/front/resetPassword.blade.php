@extends('layouts.front')

@section('content')
				
   	 	<form action="{{ url('ResetPassword/'.$type ) }}" method="POST">{{ csrf_field() }}
   	 		<input type="hidden" name="token" value="{{ $token,null }}">
			<div class="contact-form">
				<div>
					<span>
						@if(Session::has('message-error'))
							
						@endif
					</span>
				</div>	
					<div>

						<span>
							<input name="email" type="text" class="textbox" required="" id="email" placeholder="Ingresa el mail de recuperación" value="{{old('email')}}">
						</span>
					</div>
					<div>
						<span><label>La contraseña debe tener entre 6 y 12 caracteres.</label></span>	
							<span>			
								<input type="password" name="password">
							</span>
					</div>	
					<div>
						<span><label></label></span>	
							<span>
								<input type="password" name="password_confirmation">
							</span>
					</div>						
					<div>
						<span>
							<input type="submit" value="Restablecer contraseña" class="myButton" id="EnviarMailAdmin">
						</span>
					</div>													

			</div>		
		</form>

@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection