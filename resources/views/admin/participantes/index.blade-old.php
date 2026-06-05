@extends('layouts.admin')

@section('content')
	@include('admin.alerts.success')
	@include('admin.participantes.modalPago')
<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 style="color:#0ec731"> Participantes </h4>
                        </div>
			


	            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
									<div class="form-group">
										  	<label for="Filtros">Buscar participantes</label>
									</div>
									{{-- TODO: reemplazar manualmente: {!! Form::model(Request::all(),['route'=>'admin.participantes.index','method' =>'GET','class'=>'navbar-form navbar-left pull-lef','role'=>'search'])!!} --}}	
											<div class="form-group">
											  	<input type="text" name="ParticipanteBusqueda" value="{{ old('ParticipanteBusqueda', null) }}" 'class'=>'form-control','placeholder'=>'Apellido / Nombre'>
											   
											</div>
											<div class="form-group">
												<select name="pago">@foreach($pago as $key => $value)<option value="{{ $key }}">{{ $value }}</option>@endforeach</select>
											</div>											  
					   					      <div class="form-group">
											 	 <button type="submit" class="btn btn-default">Buscar</button>
											  </div>
									</form>
           							<p>
			                			<em style="font-size:12px;">Total participantes :  {!!$participantes->total()!!} </em>
			          			 	</p>	
           							<p>
			                			<em style="font-size:12px;">Total de participantes qe pagaron :  {!!$TotalPagaron!!} </em>
			          			 	</p>	
                                    <thead>
                                        <tr>
                                            
                                            <th>Nombre</th>
											<th>Email</th>
											<th>Boleta</th>
											<th>Grupo de amigos</th>
											<th>Pagó</th>
											<th>Fecha de pago</th>
											<th>Aciertos</th>
											<th>Operación<th>
											<th></th>
                                        </tr>
                                    </thead>
                                    @foreach($participantes as $participante)
										<tbody>
										  <tr class="warning">	
											<td>{{ $participante -> par_apellido }} {{ $participante -> par_name }}</td>
											<td>{{ $participante -> email }}</td>
											<td>
												@if($participante->Apuesta == "Tiene")
													<a href="{!!URL::to('/admin/participantes/VerBoleta')!!}/{{ $participante -> id }}" style="text-decoration:none;">
														Ver boleta
														&nbsp;&nbsp;
														<img src="/images/edit.png" width="20" height="20" alt="" title="">
													</a> 
												@else
													<a href="{!!URL::to('/admin/apuestas/cargarBoleta')!!}/{{ $participante -> id }}" style="text-decoration:none;">
														Cargar boleta
														&nbsp;&nbsp;
														<img src="/images/new.png" width="20" height="20" alt="" title="">
													</a> 												
												@endif	
											</td>
											<td>
												@if( $participante->grupo_amigos_id != "0")
													{{ $participante->GrupoAmigos}}
												@endif
											</td>
											<td style="padding-top:1px;">
			                            		@if ( ($participante->par_Pago == NULL) or ($participante->par_Pago == "NO") )
			                            			<font style="color:#860101;font-weight: bold;">NO PAGO 
			                            				<button value="{{ $participante -> id }}" Onclick='ActualizarPago(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalActualizarPago'>
			                            				<img src="/images/pagando.png" width="23" height="23" alt="" title="" style="margin-top:-5px;">
			                            				</button>
			                            			</font>

			                            		@else
			                            			<font style="color:#308601;font-weight: bold;">SI PAGO
			                            				<button value="{{ $participante -> id }}" Onclick='ActualizarPago(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalActualizarPago'>
			                            				<img src="/images/edit.png" width="18" height="18" alt="" title="" style="margin-top:-5px;margin-left:10px;">
			                            				</button>
			                            			</font>
			                            			

			                            			
			                            		@endif												
											</td>
											<td>
												<font style="color:#000;">
													{{ $participante -> par_FechaPago }}
												</font>
											</td>
											<td>
												{{ $participante -> CantidadAciertos }}
											</td>
											<td><a href="{{ url('admin/participantes/'.$participante->id.'/edit') }}" class="btn btn-primary">Editar</a>

											</td>
											<td>
												<form method="POST">{{ csrf_field() }}
												
												<button type="submit">Eliminar</button>
												
												</form>												
											</td>
											<td></td>
										  </tr>	
										</tbody>
									@endforeach
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
         <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
   		
		
				
				
	</div>		
				{!!$participantes->appends(Request::only(['participanteBusqueda','pago']))->render()!!}	
@endsection
@section('scripts')
	<script src="{{ asset('js/scriptPago.js') }}"></script>
@endsection