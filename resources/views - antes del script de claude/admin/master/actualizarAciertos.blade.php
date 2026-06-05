@extends('layouts.admin')

@section('content')
	@include('admin.master.Modal.ModalActualizarAciertos')
	@include('admin.alerts.msjErrorAciertos')
	@include('admin.alerts.success')
	@include('admin.alerts.errors')
	<div class="row">	
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 style="color:#0ec731"> Actualizar aciertos</h4>
            </div>
			<div class="form-group">
				<p style="margin-top:20px;margin-left:10px;font-size:16px;">Para actualizar la tabla de aciertos haga 
					<button value="#" Onclick='Actualizar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalActualizarAciertos' style="margin-top:-2px;text-decoration:none;font-size:16px;">
						click aca
					</button>
				</p>
			</div>
		</div>
	</div>		

@endsection
@section('scripts')
	{!!Html::script('js/scriptActualizarAciertos.js')!!}
@endsection