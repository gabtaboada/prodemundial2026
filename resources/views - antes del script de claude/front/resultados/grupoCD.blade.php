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
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
								
			<tbody>
				<?php 
							$i=1;
				?>
				@foreach( $GrupoC as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Resultado =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
							@endif
							&nbsp;<strong>{{ $partido -> GolesEquipo1 }}
						</td>
						<td>
							{{ $partido -> C_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> C_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Resultado =="E")
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
							&nbsp;<strong>{{ $partido -> GolesEquipo2 }}
							@if($partido->Resultado =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
							@endif								
						</td>	
						<td>
							<a href="{!!URL::to('apuestaPartido/C/'.$i)!!}">
								<img src="/images/iconview.png" alt="Mostrar apuestas" title="Mostrar apuestas"  width="25" height="25" >	
								</a>
						</td>
						<?php 
								$i++;
						?>																			
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
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
										
					<tbody>
						<?php 
									$i=1;
						?>						
						@foreach( $GrupoD as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							&nbsp;<strong>{{ $partido -> GolesEquipo1 }}
							@if($partido->Resultado =="L")
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
							@if($partido->Resultado =="E")
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
							&nbsp;<strong>{{ $partido -> GolesEquipo2 }}
							@if($partido->Resultado =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
							@endif								
						</td>
						<td>
							<a href="{!!URL::to('apuestaPartido/D/'.$i)!!}">
								<img src="/images/iconview.png" alt="Mostrar apuestas" title="Mostrar apuestas"  width="25" height="25" >	
								</a>
						</td>
						<?php 
								$i++;
						?>																					
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