@extends('layouts.front')

@section('content')
	@include('front.alerts.requestCreate')
					@if( $FlagCarga == 1)

						<form action="{{ route('usuarios.store') }}" method="POST">{{ csrf_field() }}

						<div class="contact-form">
							
							@include('front.alerts.msjLogin')
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								<input type="hidden" name="par_Pago" id="par_Pago" value="NO" />
								<input type="hidden" name="grupo_amigos_id" id="grupo_amigos_id" value="0" />
								<div>
									<span><label>Nombre</label></span>
									<span>
										<input name="par_name" type="text" class="textbox"  id="par_name">
									</span>
								</div>
								<div>
									<span><label>Apellido</label></span>
									<span>
										<input name="par_apellido" type="text" class="textbox"  id="par_apellido">
									</span>
								</div>	
								<div>
									<span><label>Mail</label></span>
									<span>
										<input name="email" type="text" class="textbox"  id="email">
									</span>
								</div>															
								<div>
									<span><label>Contraseña</label></span>	
									<span>
										<input name="password" type="password" class="textbox"  id="password">
									</span>
								</div>
							    <div>
									<span>
										<input type="submit" value="Registrarse" class="myButton" >
									</span>
							    </div>								

						</div>		
						</form>
					@else
						<div style="margin-top:30px;font-size:18px;text-align: center;color:#f14156;">
							<span>
								La inscripción se encuentra cerrada
							</span>
						</div>		
					@endif	
						<div class="contact-form">
							<div>
									<span><label><a href="{!!URL::to('/IngresarUsuario')!!}" style="text-decoration:none;">volver</a></label></span>	
							</div>
						</div>	
@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection