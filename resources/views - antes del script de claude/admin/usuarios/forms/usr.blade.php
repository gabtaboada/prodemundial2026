			<div class="form-group">
				{!!Form::label( 'Nombre :')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
				
			</div>
			<div class="form-group">
				{!!Form::label( 'Apellido :')!!}
				{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
				
			</div>

			<div class="form-group">
				{!!Form::label( 'Correo :')!!}
				{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electronico'])!!}				

			</div>

			<div class="form-group">
				{!!Form::label(' Password :')!!}
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}						

			</div>	
