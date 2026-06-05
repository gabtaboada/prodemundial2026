<div class="pricing-grids-info" style="margin-top:20px;">
		<div class="pricing-grid grid-one">
			<div class="w3ls-top">
				<h3>Grupo C</h3> 
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
				@foreach( $GrupoC as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Apuesta =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
									
							@endif
						</td>
						<td>
							{{ $partido -> C_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> C_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="E")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >
					
							@endif							
						</td>
						<td>
							{{ $partido -> C_abreviado2 }}
						</td>
						<td>
							<img src="{{ $partido -> C_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
			
							@endif								
						</td>																				
					</tr>
				@endforeach
										
												
				</tbody>
			</table>	
			</div><!-- tabla cel-->									
	 	</div>
	</div><!-- pricing-grid grid-one -->
	<div class="pricing-grid grid-two">
		<div class="w3ls-top">
		<h3>Grupo D</h3> 
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
						@foreach( $GrupoD as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Apuesta =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
																		
							@endif
						</td>
						<td>
							{{ $partido -> D_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> D_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="E")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >		
			
							@endif							
						</td>
						<td>
							{{ $partido -> D_abreviado2 }}
						</td>
						<td>
							<img src="{{ $partido -> D_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
																		
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