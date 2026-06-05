			<div class="form-group">
				{{-- TODO: reemplazar manualmente: {!!Form::label( 'Nombre :')!!} --}}
				<input type="text" name="name" value="{{ old('name', null) }}" 'class'=>'form-control','placeholder'=>'Nombre'>
				
			</div>
			<div class="form-group">
				{{-- TODO: reemplazar manualmente: {!!Form::label( 'Apellido :')!!} --}}
				<input type="text" name="apellido" value="{{ old('apellido', null) }}" 'class'=>'form-control','placeholder'=>'Apellido'>
				
			</div>

			<div class="form-group">
				{{-- TODO: reemplazar manualmente: {!!Form::label( 'Correo :')!!} --}}
				<input type="text" name="email" value="{{ old('email', null) }}" 'class'=>'form-control','placeholder'=>'Correo electronico'>				

			</div>

			<div class="form-group">
				{{-- TODO: reemplazar manualmente: {!!Form::label(' Password :')!!} --}}
				<input type="password" name="password">						

			</div>	
