@extends('layouts.admin')

@section('content')
	@include('admin.alerts.request')
	

	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> Nuevo usuario</h4>
                        </div>

	            <!-- /.panel-heading -->
                <div class="panel-body">
                <div class="table-responsive">
                               

	
				<form action="{{ route('admin.usuarios.store') }}" method="POST">{{ csrf_field() }}

						
						@include('admin.usuarios.forms.usr')
						<button type="submit">Enviar</button>

							<a href="{!!URL::to('admin/usuarios')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
								Cancelar
							</a>			
				</form>		
		
				</div>
			</div>
		</div>
	</div>	
@endsection