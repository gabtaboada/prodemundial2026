<div class="pricing-grids-info" style="margin-top:20px;">
		<div class="pricing-grid grid-one">
			<div class="w3ls-top">
				<h3>Grupo E</h3> 
			</div>
			<div class="w3ls-bottom">
				<div class="tabla-cel-responsive">
				<table class="table">
					<thead>
					<tr>
						<th colspan="3" style="text-align: center;font-size:16px;">
							L
						</th>
						<!--<th></th>-->
						<!--<th></th>-->
						<th  style="text-align: center;font-size:16px;">E</th>
						<th colspan="3" style="text-align: center;font-size:16px;">
							V
						</th>
						<!--
						<th></th>
						<th></th>
					-->
					</tr>
					</thead>
										
					<tbody>
						@foreach( $GrupoE as $partido)
							<tr style="border: 1px solid #ddd;">
								<td>
									@if($partido->Apuesta =="L")

										@if($partido-> MasterResultado =="L")
											<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
										@else
											@if($partido-> MasterResultado ==NULL)
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@else
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@endif
										@endif
									@else
										@if($partido-> MasterResultado == "L")
											<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
										@endif
																									
									@endif

									@if ( $partido -> MasterGolesEquipo1 === "vacio" ) 
									
										{{ $partido -> GolesEquipo1 }}&nbsp;

									@else 
										@if( ( $partido -> GolesEquipo1 == $partido -> MasterGolesEquipo1 )	 AND ( $partido -> GolesEquipo2 == $partido -> MasterGolesEquipo2 )	)
											
											<font color="#4ac70a" style="font-family: 'Pacifico', cursive;font-size:16px;"><strong>{{ $partido -> GolesEquipo1 }}</strong>&nbsp; </font>
										@else
											<font color="#545454">
												{{ $partido -> GolesEquipo1 }}&nbsp;
											</font>	
										@endif										
									@endif	
								</td>
								<td>
									{{ $partido -> E_abreviado1 }}
								</td>
								<td>
									<img src="{{ $partido -> E_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
								</td>
								<td>
									@if($partido->Apuesta =="E")
										@if($partido-> MasterResultado =="E")
											<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
										@else
											@if($partido-> MasterResultado ==NULL)
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@else
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@endif
										@endif
											
									@else
										@if($partido-> MasterResultado == "E")
											<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
										@endif
																									
									@endif						
								</td>
								<td>
									{{ $partido -> E_abreviado2 }}
								</td>
								<td>
									<img src="{{ $partido -> E_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
								</td>
								<td>
								@if ( $partido -> MasterGolesEquipo2 === "vacio" ) 
								
									{{ $partido -> GolesEquipo2 }}&nbsp;

								@else 
									@if( ( $partido -> GolesEquipo1 == $partido -> MasterGolesEquipo1 )	 AND ( $partido -> GolesEquipo2 == $partido -> MasterGolesEquipo2 )	)
										
										<font color="#4ac70a" style="font-family: 'Pacifico', cursive;font-size:16px;"><strong>{{ $partido -> GolesEquipo2 }}</strong>&nbsp; </font>
									@else
										<font color="#545454">
											{{ $partido -> GolesEquipo2 }}&nbsp;
										</font>		
									@endif										
								@endif	
								
								@if($partido->Apuesta == "V")
									@if($partido-> MasterResultado == "V")
										<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
									@else
										@if($partido-> MasterResultado == NULL)
											<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
										@else
											<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
										@endif
									@endif
															
									
								@else
									@if($partido-> MasterResultado == "V")
										<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
									@endif
								@endif									
								</td>																				
							</tr>
						@endforeach
												
														
						</tbody>
				</table>						
				</div><!-- tabla cel!-->										
		 	</div>
		</div><!-- pricing-grid grid-one -->
		<div class="pricing-grid grid-two">
			<div class="w3ls-top">
			<h3>Grupo F</h3> 
			</div>
			<div class="w3ls-bottom">
				<div class="tabla-cel-responsive">
					<table class="table">
						<thead>
						<tr>
							<th colspan="3" style="text-align: center;font-size:16px;">
								L
							</th>
							<!--<th></th>-->
							<!--<th></th>-->
							<th  style="text-align: center;font-size:16px;">E</th>
							<th colspan="3" style="text-align: center;font-size:16px;">
								V
							</th>
							<!--
							<th></th>
							<th></th>
						-->
						</tr>
						</thead>
											
						<tbody>
							@foreach( $GrupoF as $partido)
						<tr style="border: 1px solid #ddd;">
							<td>
									@if($partido->Apuesta =="L")

										@if($partido-> MasterResultado =="L")
											<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
										@else
											@if($partido-> MasterResultado ==NULL)
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@else
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@endif
										@endif
									@else
										@if($partido-> MasterResultado == "L")
											<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
										@endif
																									
									@endif

									@if ( $partido -> MasterGolesEquipo1 === "vacio" ) 
									
										{{ $partido -> GolesEquipo1 }}&nbsp;

									@else 
										@if( ( $partido -> GolesEquipo1 == $partido -> MasterGolesEquipo1 )	 AND ( $partido -> GolesEquipo2 == $partido -> MasterGolesEquipo2 )	)
											
											<font color="#4ac70a" style="font-family: 'Pacifico', cursive;font-size:16px;"><strong>{{ $partido -> GolesEquipo1 }}</strong>&nbsp; </font>
										@else
											<font color="#545454">
												{{ $partido -> GolesEquipo1 }}&nbsp;
											</font>		
										@endif										
									@endif	
							</td>
							<td>
								{{ $partido -> F_abreviado1 }}
							</td>
							<td>
								<img src="{{ $partido -> F_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
							</td>
							<td>
									@if($partido->Apuesta =="E")
										@if($partido-> MasterResultado =="E")
											<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
										@else
											@if($partido-> MasterResultado ==NULL)
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@else
												<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
											@endif
										@endif
											
									@else
										@if($partido-> MasterResultado == "E")
											<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
										@endif
																									
									@endif								
							</td>
							<td>
								{{ $partido -> F_abreviado2 }}
							</td>
							<td>
								<img src="{{ $partido -> F_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
							</td>
							<td>
								@if ( $partido -> MasterGolesEquipo2 === "vacio" ) 
								
									{{ $partido -> GolesEquipo2 }}&nbsp;

								@else 
									@if( ( $partido -> GolesEquipo1 == $partido -> MasterGolesEquipo1 )	 AND ( $partido -> GolesEquipo2 == $partido -> MasterGolesEquipo2 )	)
										
										<font color="#4ac70a" style="font-family: 'Pacifico', cursive;font-size:16px;"><strong>{{ $partido -> GolesEquipo2 }}</strong>&nbsp; </font>
									@else
										<font color="#545454">
											{{ $partido -> GolesEquipo2 }}&nbsp;
										</font>		
									@endif										
								@endif	
								
								@if($partido->Apuesta == "V")
									@if($partido-> MasterResultado == "V")
										<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	
									@else
										@if($partido-> MasterResultado == NULL)
											<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
										@else
											<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" >	
										@endif
									@endif
															
									
								@else
									@if($partido-> MasterResultado == "V")
										<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
									@endif
								@endif								
							</td>																				
						</tr>
						@endforeach						
																
							</tbody>
					</table>						
				</div><!-- tabla ceñ !-->													
			</div>
		</div><!-- pricing-grid grid-two -->
	<div class="clearfix"> </div> 
				<!--End-slider-script-->
</div><!-- pricing-grids-info-->		
				<!-- GRUPO A Y GRUPO B -->