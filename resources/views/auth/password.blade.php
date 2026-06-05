@extends('layouts.front')

@section('content')

		 <form action="{{ url('/usuario/password/email') }}" method="POST">{{ csrf_field() }}

			<div class="contact-form">
				
					<div>
						<span>
							<label>Mail</label>
						</span>
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

@endsection