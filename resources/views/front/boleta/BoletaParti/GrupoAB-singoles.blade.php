<div class="pricing-grids-info">
	
		<div class="pricing-grid grid-one">
			<div class="w3ls-top">
				<h3>Grupo A</h3> 
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
					@foreach( $GrupoA as $partido)
						<tr style="border: 1px solid #ddd;">
							<td>
								@if($partido->Apuesta =="L")
									<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >							
								@endif
							</td>
							<td>
								{{ $partido -> A_abreviado1 }}
							</td>
							<td>
								<img src="{{ $partido -> A_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
							</td>
							<td>
								@if($partido->Apuesta =="E")
									<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
								@endif							
							</td>
							<td>
								{{ $partido -> A_abreviado2 }}
							</td>
							<td>
								<img src="{{ $partido -> A_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
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
			</div>									
	 	</div>
	</div><!-- pricing-grid grid-one -->
	<div class="pricing-grid grid-two">
		<div class="w3ls-top">
		<h3>Grupo B</h3> 
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
						@foreach( $GrupoB as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Apuesta =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >	
							@endif
						</td>
						<td>
							{{ $partido -> B_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> B_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Apuesta =="E")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >			
						
							@endif							
						</td>
						<td>
							{{ $partido -> B_abreviado2 }}
						</td>
						<td>
							<img src="{{ $partido -> B_Bandera2 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
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
			</div><!--tabla cel-->														
		</div>
	</div><!-- pricing-grid grid-two -->
	<div class="clearfix"> </div> 
				<!--End-slider-script-->
</div><!-- pricing-grids-info-->		
				<!-- GRUPO A Y GRUPO B -->