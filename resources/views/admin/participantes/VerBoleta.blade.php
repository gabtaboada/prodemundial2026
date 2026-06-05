@extends('layouts.admin')

@section('content')
	@include('admin.participantes.modalEditar')
	@include('admin.alerts.success')
	@include('admin.alerts.errors')
		<div class="row">	
       		<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731">Boleta de <strong>{{ $Participante->par_apellido }} {{ $Participante->par_name }}</strong></h4>
                        </div>

	            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">	

								@include('admin.participantes.forms.Boleta')

							</div>
						</div>
		</div>
	</div>		
@endsection
@section('scripts')
	<script src="{{ asset('js/scriptEditarBoleta.js') }}"></script>
@endsection