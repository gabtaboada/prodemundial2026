@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
			<h3 class="heading-agileinfo">Posiciones en Intocables<span></span></h3>
			<div class="clearfix"> </div>
	</div>
</div>

<div class="wthree-mid">
	<div class="container">
		
			<div class="FormuBoleta">
				<div class="form-group">

					<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
									@if( $Posiciones != NULL)
	                                    <thead>
	                                        <tr>
	                                            <th>Posición</th>
	                                            <th>Nombre</th>
												<th></th>
												<th>Aciertos</th>
												<th>Boleta<th>
											</tr>
										</thead>									
	                                    @foreach($Posiciones as $posicion )
											<tbody>
												@if( $posicion -> ac_Posicion == 1 )		
												  <tr  style="font-size:18px;font-weight: bold;text-transform: uppercase;">	
													<td>
														{{ $posicion -> ac_Posicion}}
													</td>
													<td >{{ $posicion -> par_apellido }} {{ $posicion -> par_name }}
													</td>
													<td></td>
													<td>
														{{ $posicion -> CantidadAciertos}}
													</td>
													<td>
														<a href="{!!URL::to('Verboleta/'.$posicion -> id)!!}" style="text-decoration:none;font-size:14px;">
														ver boleta
														</a>
													</td>
													<td></td>
												  </tr>	
												@else
													@if ( $posicion -> ac_Posicion == 2 )	
													  <tr  style="font-size:17px;text-transform: uppercase;">	
														<td>
																{{ $posicion -> ac_Posicion}}
														</td>
														<td >{{ $posicion -> par_apellido }} {{ $posicion -> par_name }}
														</td>
														<td></td>
														<td>
															{{ $posicion -> CantidadAciertos}}
														</td>											
														<td>
															<a href="{!!URL::to('Verboleta/'.$posicion -> id)!!}" style="text-decoration:none;font-size:14px;">
																ver boleta
															</a>
														</td>
														<td></td>
													  </tr>	
													@else
														@if ( $posicion -> ac_Posicion == 3 )	
														  <tr style="font-size:16px;text-transform: uppercase;font-size:16px;">	
															<td>
																	{{ $posicion -> ac_Posicion}}
															</td>
															<td >{{ $posicion -> par_apellido }} {{ $posicion -> par_name }}
															</td>
															<td></td>
															<td>
																{{ $posicion -> CantidadAciertos}}
															</td>											
															<td>
																<a href="{!!URL::to('Verboleta/'.$posicion -> id)!!}" style="text-decoration:none;font-size:14px;">
																	ver boleta
																</a>
															</td>
															<td></td>
														  </tr>	
														@else
															@if ( $posicion -> ac_Posicion >3 )	
															  <tr class="warning" style="font-size:16px;text-transform: uppercase;">	
																<td>
																		{{ $posicion -> ac_Posicion}}
																</td>
																<td >{{ $posicion -> par_apellido }} {{ $posicion -> par_name }}
																</td>
																<td></td>
																<td>
																	{{ $posicion -> CantidadAciertos}}
																</td>											
																<td>
																	<a href="{!!URL::to('Verboleta/'.$posicion -> id)!!}" style="text-decoration:none;font-size:14px;">
																		ver boleta
																	</a>
																</td>
																<td></td>
															  </tr>	
															@endif										  												  
														@endif										  											  
													@endif										  
												@endif  
											</tbody>
										@endforeach
									@else
										@if( $Participantes != NULL )
		                                    <thead>
		                                        <tr class="titulosTablas">
		                                           
		                                            <th>Nombre</th>
													<th></th>
													<th>Boleta<th>
													 
												</tr>
											</thead>										
		                                    @foreach($Participantes as $participante )
												<tbody>
														
													  <tr  style="font-size:18px; ">	

														<td >{{ $participante -> par_apellido }} {{ $participante -> par_name }}
														</td>
														<td></td>

														<td>
															<a href="{!!URL::to('Verboleta/'.$participante -> id)!!}" style="text-decoration:none;font-size:16px;">
															ver boleta
															</a>
														</td>
														<td style="font-size:16px;font-style: italic;">
															@if( $participante->ExisteBoleta =="NO" )
																No tiene la boleta cargada
															@endif
														</td>
														 
													  </tr>	


												</tbody>
											@endforeach										
										@endif
									@endif
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                    </div><!-- panel body-->

				</div>	
			</div>

	</div>

</div>


@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection