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

					{{-- TODO: reemplazar manualmente: {!!Form::model($user,['route'=>['admin.usuarios.update', $user->id],'method'=>'PUT'])!!} --}}

								@include('admin.usuarios.forms.usr')


									 	
										{{-- TODO: reemplazar manualmente: {!!Form::submit("Actualizar",['class'=>'btn btn-primary'])!!} --}}
											
										<a href="{!!URL::to('admin/usuarios')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
											Cancelar
										</a>		
					</form>	                               


		
				</div>
			</div>
		</div>
	</div>	
@endsection
@section('scripts')
     
@endsection
