@extends('layouts.admin')

@section('content')
	@include('admin.alerts.success')
<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 style="color:#0ec731"> Usuarios </h4>
                        </div>

	            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
            	
                                    <thead>
                                        <tr>
                                            
                                            <th>Nombre</th>
											<th></th>
											<th>Email</th>
											<th>Operación<th>
											<th></th>
                                        </tr>
                                    </thead>
                                    @foreach($users as $user)
										<tbody>
										  <tr class="warning">	
											<td>{{ $user -> name }} {{ $user -> apellido }}</td>
											<td>{{ $user -> email }}</td>
											<td>{!!link_to_route('admin.usuarios.edit', $title = 'Editar', $parameters = $user ->id, $attributes =['class'=>'btn btn-primary' ])!!}</td>
											<td>
												<form method="POST">{{ csrf_field() }}
												
												<button type="submit">Eliminar</button>
												
												</form>
											</td>
											<td></td>
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
   		
		
				
				
	</div>		
				{!!$users->render()!!}	
@endsection