@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
			<h3 class="heading-agileinfo">Posiciones<span></span></h3>

					{{-- TODO: reemplazar manualmente: {!! Form::model(Request::all(),['route'=>'posiciones.index','method' =>'GET','role'=>'search'])!!} --}}	
					
							<div class="contact-form">
							
									<div>
										<span>
											<input id="nombre" name="nombre" type="text" class="textbox"  placeholder="Nombre / Apellido" >
										</span>
									</div>
								    <div>
										<span>
											<input type="submit" value="Buscar" class="myButton" id="EnviarLogin">
										</span>
								    </div>								

							</div>	
					</form>
					


				<div class="clearfix"> </div>
	</div>
</div>

<div class="wthree-mid">
	<div class="container">

		
			<div class="pricing-grids-info">
						<div class="pricing-grid grid-one">

							<div class="w3ls-bottom">
								<div class="tabla-cel-responsive">
										<table class="table">
			            	
			                                    <thead>
			                                        <tr>
			                                            <th>Posición</th>
			                                            <th>Nombre</th>
														<th></th>
														<th>Aciertos</th>
														<th>Boleta<th>
													</tr>
												</thead>
												<?php $i=1;
											
												?>
												<tbody>	
			                                    @foreach($Posiciones as $posicion )
													
													@if( $i < 3)	
														
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
														
													
													<?php $i = $i+1;
														
													?>
													@endif
												@endforeach
												</tbody>
												</table>									
								</div>
							</div>									
						</div>
			</div><!-- pricing-grid grid-one -->
			<div class="pricing-grid grid-two">
				<div class="w3ls-bottom">
						<div class="tabla-cel-responsive">
							<table class="table">	
								<table class="table">
            	
                                    <thead>
                                        <tr>
                                            <th>Posición</th>
                                            <th>Nombre</th>
											<th></th>
											<th>Aciertos</th>
											<th>Boleta<th>
										</tr>
									</thead>

									<tbody>
                                    @foreach($Posiciones as $posicion )
										
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

										
									@endforeach
									</tbody>
									</table>									
							</table>
						</div><!--tabla cel-->														
				</div>
			</div><!-- pricing-grid grid-two -->
    </div>
                <!-- /.table-responsive -->
                        {!!$Posiciones->appends(Request::only(['nombre']))->render()!!}	    
</div><!-- panel body-->


</div>


@endsection