<div class="form-group">
	{{-- TODO: reemplazar manualmente: {!!Form::label( 'Nombre :')!!} --}}
	<input type="text" name="par_name" value="{{ old('par_name', null) }}" 'class'=>'form-control','placeholder'=>'Nombre'>
	
</div>
<div class="form-group">
	{{-- TODO: reemplazar manualmente: {!!Form::label( 'Apellido :')!!} --}}
	<input type="text" name="par_apellido" value="{{ old('par_apellido', null) }}" 'class'=>'form-control','placeholder'=>'Apellido'>
				
</div>
<div class="form-group">
			
						<div class="panel-body" id="DivTablaGruposAmigos" style="display:none;">
                            <div class="table-responsive ">
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
														<input type="checkbox" value="{{ $GrupoAmigo['id'] }}" style="margin-top:5px;margin-right:10px;" name="CheckGrupoAmigo[]" 

														>
														
																											
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

                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->				
								
</div>
<div class="form-group">
	{{-- TODO: reemplazar manualmente: {!!Form::label( 'Telefono :')!!} --}}
	<input type="text" name="par_tel" value="{{ old('par_tel', null) }}" 'class'=>'form-control','placeholder'=>'Ingrese un número de telefono'>				
</div>
<div class="form-group">
	{{-- TODO: reemplazar manualmente: {!!Form::label( 'Correo :')!!} --}}
	<input type="text" name="email" value="{{ old('email', null) }}" 'class'=>'form-control','placeholder'=>'Correo electronico'>				
</div>
<div class="form-group">
	{{-- TODO: reemplazar manualmente: {!!Form::label(' Password :')!!} --}}
	<input type="password" name="password">				
</div>	