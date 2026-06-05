@extends('layouts.admin')

@section('content')
	@include('admin.alerts.success')
	@include('admin.alerts.errors')
	@include('admin.alerts.request')

	<div class="row">	
	        <div class="panel panel-default">
	                        <div class="panel-heading">
	                           <h4 style="color:#0ec731"> Grupo de amigos </h4>
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table">
									<form action="{{ route('admin.GrupoAmigos.store') }}" method="POST">{{ csrf_field() }}

											
											<div class="form-group">
												{{-- TODO: reemplazar manualmente: {!!Form::label( 'Nombre del grupo nuevo :')!!} --}}
												<input type="text" name="Grupo_amigos" value="{{ old('Grupo_amigos', null) }}" 'class'=>'form-control','placeholder'=>'Nombre del grupo nuevo'>
												
											</div>											
											<button type="submit">Crear</button>

												<a href="{!!URL::to('admin/GrupoAmigos')!!}" class="btn btn-danger" style="text-decoration:none;color:#FFFFFF;margin-left:20px;" >
													Cancelar
												</a>			
									</form>										
									</table>
                            	</div>
                            <!-- /.table-responsive -->
                       		</div>
         <!-- /.panel-body -->
        	</div>
         <!-- /.panel -->
	</div>			     <!-- /.row-->            

@endsection	