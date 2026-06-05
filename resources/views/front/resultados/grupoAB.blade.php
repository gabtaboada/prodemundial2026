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
					@foreach( $GrupoA as $partido)
						<tr style="border: 1px solid #ddd;">
							<td>
								@if($partido->Resultado =="L")
									<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
								@endif
								&nbsp;<strong>{{ $partido -> GolesEquipo1 }}</strong>

							</td>
							<td>
								{{ $partido -> A_abreviado1 }}
							</td>
							<td>
								<img src="{{ $partido -> A_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
							</td>
							<td>
								@if($partido->Resultado =="E")
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
								&nbsp;<strong>{{ $partido -> GolesEquipo2 }}</strong>
								@if($partido->Resultado =="V")
									<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
								@endif								
							</td>	<td>
							{{-- <a href="{!!URL::to('apuestaPartido/A/'.$i)!!}">
								<img src="/FrontImages/lupa.png" alt="Mostrar apuestas" title="Mostrar apuestas"  width="25" height="25" >	
								</a> --}}
@if($cargaDeshabilitada)
<a href="#" onclick="verApuestas('A', {{ $i }}); return false;">
    <img src="/FrontImages/lupa.png" alt="Mostrar apuestas" title="Mostrar apuestas" width="25" height="25">
</a>
@endif								
							</td>
							<?php 
								$i++;
							?>
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
						@foreach( $GrupoB as $partido)
					<tr style="border: 1px solid #ddd;">
						<td>
							@if($partido->Resultado =="L")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
							@endif
							&nbsp;<strong>{{ $partido -> GolesEquipo1 }}
						</td>
						<td>
							{{ $partido -> B_abreviado1 }}
						</td>
						<td>
							<img src="{{ $partido -> B_Bandera1 }}" alt="" title="" style="border-radius: 50%;border: 1px solid #ddd;" width="20" height="20" >
						</td>
						<td>
							@if($partido->Resultado =="E")
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
							&nbsp;<strong>{{ $partido -> GolesEquipo2 }}
							@if($partido->Resultado =="V")
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" >										
							@endif								
						</td>	
						<td>
@if($cargaDeshabilitada)
<a href="#" onclick="verApuestas('B', {{ $i }}); return false;">
								<img src="/FrontImages/lupa.png" alt="Mostrar apuestas" title="Mostrar apuestas"  width="25" height="25" >	
                                                                </a>
@endif
						</td>																			
						<?php 
								$i++;
						?>
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