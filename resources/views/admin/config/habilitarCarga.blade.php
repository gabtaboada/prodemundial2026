@extends('layouts.admin')

@section('content')
	@include('admin.config.modalHabilitarCarga')
	@include('admin.alerts.errors')
	@include('admin.alerts.success')

	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> Super admin</h4>
                        </div>
                   
	            <!-- /.panel-heading -->
            <div class="panel-body">
            	<div class="form-group">
            		@if( $HabilitarCarga == 0 )
	            		Esta opción es para habilitar  la carga online de los participantes&nbsp;&nbsp;
	            		<button value="1" Onclick='habDeshab(this);'  class='btn btn-success' data-toggle='modal' data-target='#ModalEstadoHabilitar'>Habilitar
	            		</button> 
	            	@else
	            		Esta opción es para deshabilitar la carga online de los participantes&nbsp;&nbsp;
	            		<button value="0" Onclick='habDeshab(this);'  class='btn btn-danger' data-toggle='modal' data-target='#ModalEstadoHabilitar'>Deshabilitar
	            		</button> 	            	
	            	@endif	
				</div>	
			</div><!--  FIN /.panel-heading -->
		</div>
	</div>	<!-- FIN ROW-->
@endsection
@section('scripts')
	<script src="{{ asset('js/scriptHabDeshabCarga.js') }}"></script>
@endsection