	@if(Session::has('errorsAciertos'))

		<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						 <ul>	
						 		@if ( Session::has('VectorNombre'))
									<strong>Error al actualizar las apuestas de los siguientes participantes    </strong>
								 	@foreach(  Session::get('VectorNombre')   as  $msj)
											 		<li> {{ $msj  }}</li>
									@endforeach
								 		
								@endif 
								

						 </ul>	
				  
				 
		</div>


	@endif