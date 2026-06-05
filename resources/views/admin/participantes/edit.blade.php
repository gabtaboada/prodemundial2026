@extends('layouts.admin')

@section('content')
	@include('admin.alerts.request')
	

	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> Editar los datos del participante</h4>
                        </div>

	            <!-- /.panel-heading -->
                <div class="panel-body">
                <div class="table-responsive">

					{{-- TODO: reemplazar manualmente: {!!Form::model($participante,['route'=>['admin.participantes.update', $participante->id],'method'=>'PUT'])!!} --}}

								@include('admin.participantes.forms.partiEdit')


									 	
										{{-- TODO: reemplazar manualmente: {!!Form::submit("Actualizar",['class'=>'btn btn-primary'])!!} --}}
											
										<a href="{!!URL::to('admin/participantes')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
											Cancelar
										</a>		
					</form>	                               


		
				</div>
			</div>
		</div>
	</div>	
@endsection
@section('scripts')
        <script src="{{ asset('js/scriptEditarParticipantes.js') }}"></script>
@endsection
