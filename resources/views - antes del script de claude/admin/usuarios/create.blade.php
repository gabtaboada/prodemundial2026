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
                               

	
				{!!Form::open(['route'=>'admin.usuarios.store','method'=>'POST'])!!}

						
						@include('admin.usuarios.forms.usr')
						{!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}

							<a href="{!!URL::to('admin/usuarios')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
								Cancelar
							</a>			
				{!!Form::close()!!}		
		
				</div>
			</div>
		</div>
	</div>	
@endsection