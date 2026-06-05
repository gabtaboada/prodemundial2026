@extends('layouts.front')

@section('content')
				
   	 	{!!Form::open(['url' => 'ResetPassword/'.$type ])!!}
   	 		{!!Form::hidden('token',$token,null)!!}
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
								{!!Form::password('password',['class'=>'textbox','placeholder'=>'Ingresa la nueva contraseña'])!!}
							</span>
					</div>	
					<div>
						<span><label></label></span>	
							<span>
								{!!Form::password('password_confirmation',['class'=>'textbox','placeholder'=>'Confirme la contraseña'])!!}
							</span>
					</div>						
					<div>
						<span>
							<input type="submit" value="Restablecer contraseña" class="myButton" id="EnviarMailAdmin">
						</span>
					</div>													

			</div>		
		{!!Form::close()!!}

@endsection
@section('scripts')
	{!!Html::script('js/ScriptRedireccionar.js')!!}
@endsection