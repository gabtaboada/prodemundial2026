@extends('layouts.front')

@section('content')

						{!!Form::open(['route'=>'loginUsuario.store','method'=>'POST'])!!}
						<div class="contact-form">
							@include('front.alerts.msjLogin')
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								<div>
									<span><label>Mail</label></span>
									<span>
										<input name="email" type="text" class="textbox" required="" id="email">
									</span>
								</div>
								<div>
									<span><label>Contraseña</label></span>	
									<span>
										<input name="password" type="password" class="textbox" required="" id="password">
									</span>
								</div>
							    <div>
									<span>
										<input type="submit" value="Ingresar" class="myButton" id="EnviarLogin">
									</span>
							    </div>								

						</div>		
						{!!Form::close()!!}
						<div class="contact-form">
							<div>
								<span><label><a href="{!!URL::to('/RecuperacionPassword')!!}" style="text-decoration:none;">¿Olvidaste tu contraseña?</a></label></span>	
							</div>
							<div>
								<span><label><a href="{!!URL::to('/usuarios/create')!!}" style="text-decoration:none;">Crear usuario</a></label></span>	
							</div>							
						</div>
@endsection
@section('scripts')
	{!!Html::script('js/ScriptRedireccionar.js')!!}
@endsection