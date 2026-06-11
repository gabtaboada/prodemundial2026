<div class="pricing-grids-info" style="margin-top:20px;">
		<div class="pricing-grid grid-one">
			<div class="w3ls-top">
				<h3>Grupo K</h3> 
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
						@foreach( $GrupoK as $partido)
							<tr style="border: 1px solid #ddd;">
								<td>
									@if($partido->Apuesta =="L")
										<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
																				
									@endif
									&nbsp;<strong>{{ $partido -> GolesEquipo1 }}</strong>
								</td>
								<td>
									{{ $partido -> K_abreviado1 }}
								</td>
								<td>
									<img src="{{ $partido -> K_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
										
								</td>
								<td>
									@if($partido->Apuesta =="E")
										<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
						
									@endif							
								</td>
								<td>
									{{ $partido -> K_abreviado2 }}
								</td>
								<td>
									<img src="{{ $partido -> K_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
								</td>
								<td>
									<strong>{{ $partido -> GolesEquipo2 }}</strong>&nbsp;			
									@if($partido->Apuesta =="V")
										<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
									@endif								
								</td>	
									<td>
										@if( $HabilitarCarga == 1)
											<button value="{{ $partido -> K_Partido }}/K" Onclick='ModificarApuesta(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta' style="padding:0px;"><img src="/FrontImages/edit.png" width="14" height="14" alt="Modificar Master" title="Modificar Master"></button>											
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
		<h3>Grupo L</h3> 
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
						@foreach( $GrupoL as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Apuesta =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >		

							@endif
							&nbsp;<strong>{{ $partido -> GolesEquipo1 }}</strong>
						</td>
						<td>
							{{ $partido -> L_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> L_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="E")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
																		
							@endif							
						</td>
						<td>
							{{ $partido -> L_abreviado2 }}
						</td>
						<td>
							<img src="{{ $partido -> L_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							<strong>{{ $partido -> GolesEquipo2 }}</strong>&nbsp;			
							@if($partido->Apuesta =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
							@endif								
						</td>	
							<td>
								@if( $HabilitarCarga == 1)
									<button value="{{ $partido -> L_Partido }}/L" Onclick='ModificarApuesta(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta' style="padding:0px;"><img src="/FrontImages/edit.png" width="14" height="14" alt="Modificar Master" title="Modificar Master"></button>											
								@endif									
							</td>																				
					</tr>
				@endforeach						
														
					</tbody>
				</table>
			</div><!-- tabla cel--> 	
		</div>
	</div><!-- pricing-grid grid-two -->
	<div class="clearfix"> </div> 
				<!--End-slider-script-->
</div><!-- pricing-grids-info-->		
				<!-- GRUPO A Y GRUPO B -->