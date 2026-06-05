@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
			<h3 class="heading-agileinfo">Apuestas del partido<span></span></h3>

			<h4 class="PartidosTitulos"><img src="{{ $Bandera1 }}" alt="{{ $Equipo1 }}" class="EstiloBandera"  />{{ $Equipo1 }} - {{ $Equipo2 }} <img src="{{ $Bandera2 }}" alt="{{ $Equipo2 }}" class="EstiloBandera"  border="1px solid #000"/> </h4>

			
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
            	
                                    <thead>
                                        <tr>
                                            <th>Posición</th>
                                            <th>Nombre</th>
											<th>{{ $EquipoAbreviado1 }} - {{ $EquipoAbreviado2 }}</th>
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
												<td>{{ $posicion -> $AUXGoles1 }} - {{ $posicion -> $AUXGoles2 }}</td>
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
													<td>{{ $posicion -> $AUXGoles1 }} - {{ $posicion -> $AUXGoles2 }}</td>
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
														<td>{{ $posicion -> $AUXGoles1 }} - {{ $posicion -> $AUXGoles2 }}</td>
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
															<td>{{ $posicion -> $AUXGoles1 }} - {{ $posicion -> $AUXGoles2 }}</td>
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
                                </table>

                            </div>
                            <!-- /.table-responsive -->
                        {!!$Posiciones->appends(Request::only(['nombre']))->render()!!}	    
                    </div><!-- panel body-->

				</div>	
			</div>

	</div>

</div>


@endsection
@section('scripts')
	{!!Html::script('js/ScriptRedireccionar.js')!!}
@endsection