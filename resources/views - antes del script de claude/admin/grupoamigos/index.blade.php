@extends('layouts.admin')

@section('content')
	@include('admin.alerts.success')
	@include('admin.alerts.errors')

	<div class="row">	
	        <div class="panel panel-default">
	                        <div class="panel-heading">
	                           <h4 style="color:#0ec731"> Grupo de amigos </h4>
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table">
	           							<p>
				                			<a style="text-decoration: none;" href="{!!URL::to('/admin/GrupoAmigos/create')!!}">Crear grupo de amigos</a>
				          			 	</p>		                                	
										<thead>
                                        	<tr>
                                            
	                                            <th>Nombre Grupo de Amigos</th>
												
												<th></th>
                                        	</tr>
                                    	</thead>	
                                    	@foreach($GrupoAmigos as $GrupoAmigo)
										<tbody>
										  <tr class="warning">	
											<td>{{ $GrupoAmigo -> Grupo_amigos }}</td>			
										  </tr>
										</tbody>
										@endforeach  		

									</table>
                            	</div>
                            <!-- /.table-responsive -->
                       		</div>
         <!-- /.panel-body -->
        	</div>
         <!-- /.panel -->
	</div>			     <!-- /.row-->                           	
@endsection	