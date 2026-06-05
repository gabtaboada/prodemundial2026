@extends('layouts.admin')

@section('content')
	@include('admin.alerts.request')
	

	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> Cargar boleta de {{ $participante_nombre }}</h4>
                        </div>
                   
	            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                               

	
				<form action="{{ route('admin.apuestas.store') }}" method="POST">{{ csrf_field() }}

						
						@include('admin.apuestas.forms.apuestas')
							<div class="form-group">
							<input type="hidden" name="Part_id" value="{{ $participante_id  }}">
							</div>						
						
						<button type="submit">Enviar</button>

							<a href="{!!URL::to('admin/participantes')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
								Cancelar
							</a>			
				</form>		
		
				</div>
			</div><!--  FIN /.panel-heading -->
		</div>
	</div>	<!-- FIN ROW-->
@endsection