@extends('layouts.admin')

@section('content')
	@include('admin.alerts.request')
	

	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> Nuevo participante</h4>
                        </div>

	            <!-- /.panel-heading -->
                <div class="panel-body">
                <div class="table-responsive">
                               

	
				{!!Form::open(['route'=>'admin.participantes.store','method'=>'POST'])!!}

						
						@include('admin.participantes.forms.participantes')
						{!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}

							<a href="{!!URL::to('admin/participantes')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
								Cancelar
							</a>			
				{!!Form::close()!!}		
		
				</div>
			</div>
		</div>
	</div>	
@endsection