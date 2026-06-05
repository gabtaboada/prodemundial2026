<div class="form-group">
	{!!Form::label( 'Nombre :')!!}
	{!!Form::text('par_name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
	
</div>
<div class="form-group">
	{!!Form::label( 'Apellido :')!!}
	{!!Form::text('par_apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
				
</div>

<div class="form-group">
			
				
					<table class="table" style="border: 1px solid #ddd;margin-top:10px;margin-bottom:40px;width:60%; ">
						 
							<thead>
								
								<th>Seleccionar</th>
								<th>Grupo de amigos</th>
 							
							</thead>
							<tbody>
								
									@foreach( $GrupoAmigos as $GrupoAmigo )
										<tbody>
												<tr class="warning">
													<td>
														<input type="checkbox" value="{{ $GrupoAmigo['id'] }}" style="margin-top:5px;margin-right:10px;" name="CheckGrupoAmigo[]"> 
													</td>	
													
													<td>
														{{ $GrupoAmigo['GrupoAmigos'] }}
													</td>

												</tr>			
										</tbody>
												
									@endforeach
								
							</tbody>
 
						
					
					</table>	
			
</div>

<div class="form-group">
	{!!Form::label( 'Telefono :')!!}
	{!!Form::text('par_tel',null,['class'=>'form-control','placeholder'=>'Ingrese un número de telefono'])!!}				
</div>
<div class="form-group">
	{!!Form::label( 'Correo :')!!}
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electronico'])!!}				
</div>
<div class="form-group">
	{!!Form::label(' Password :')!!}
	{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}				
</div>	
<div class="form-group">
	{!!Form::hidden('par_Pago', "NO" )!!}
</div>		
