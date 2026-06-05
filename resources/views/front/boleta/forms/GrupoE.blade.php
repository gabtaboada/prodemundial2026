			<div class="pricing-grid grid-one" ><!--GrupoE-->
					<div class="w3ls-top">
						<h3>Grupo E</h3> 
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
									</tr>
								</thead>
												
							<tbody>
								@foreach( $GrupoE as $partido)
									<tr style="border: 1px solid #ddd;">
										<td style="padding:0px;">
											{{-- Goles Equipo 1 --}}
											<select name="Par_{{ $partido->E_Partido }}_GolEqui1" 
													id="Par_{{ $partido->E_Partido }}_GolEqui1"
													style="height: 23px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
												<option value="">Goles</option>
												@for($g = 0; $g <= 12; $g++)
													<option value="{{ $g }}"
														{{-- {{ old('Par_'.$partido->E_Partido.'_GolEqui1') === (string)$g ? 'selected' : '' }} --}}
														{{ (old('Par_'.$partido->E_Partido.'_GolEqui1') !== null ? old('Par_'.$partido->E_Partido.'_GolEqui1') : (isset($Borrador) && $Borrador && !is_null($Borrador->{'Par_'.$partido->E_Partido.'_GolEqui1'}) ? (string)$Borrador->{'Par_'.$partido->E_Partido.'_GolEqui1'} : '')) === (string)$g ? 'selected' : '' }}
														>
														{{ $g }}
													</option>
												@endfor
											</select>									
										</td>
										<td>
											{{ $partido -> E_abreviado1 }}
										</td>
										<td>
											<img src="{{ $partido -> E_Bandera1 }}" alt=" {{ $partido -> E_abreviado1 }} " title=" {{ $partido -> E_abreviado1 }} " style="border-radius: 50%;" width="20" height="20" >
										</td>
										<td style="max-width: 15px;margin-top:5px;">
												VS									
										</td>
										<td>
											{{ $partido -> E_abreviado2 }}
										</td>
										<td>
											<img src="{{ $partido -> E_Bandera2 }}" alt=" {{ $partido -> E_abreviado2 }} " title=" {{ $partido -> E_abreviado2 }} " style="border-radius: 50%;" width="20" height="20" >
										</td>
										<td  style="padding:0px;">
											{{-- Goles Equipo 2 --}}
											<select name="Par_{{ $partido->E_Partido }}_GolEqui2" 
													id="Par_{{ $partido->E_Partido }}_GolEqui2"
													style="height: 20px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
												<option value="">Goles</option>
												@for($g = 0; $g <= 12; $g++)
													<option value="{{ $g }}"
														{{-- {{ old('Par_'.$partido->E_Partido.'_GolEqui2') === (string)$g ? 'selected' : '' }} --}}
														{{ (old('Par_'.$partido->E_Partido.'_GolEqui2') !== null ? old('Par_'.$partido->E_Partido.'_GolEqui2') : (isset($Borrador) && $Borrador && !is_null($Borrador->{'Par_'.$partido->E_Partido.'_GolEqui2'}) ? (string)$Borrador->{'Par_'.$partido->E_Partido.'_GolEqui2'} : '')) === (string)$g ? 'selected' : '' }}
														>
														{{ $g }}
													</option>
												@endfor
											</select>
																		
										</td>																				
									</tr>
								@endforeach
								<div class="form-group">
								<input type="hidden" name="E1" value="{{ NULL }}">
								<input type="hidden" name="E2" value="{{ NULL }}">
								<input type="hidden" name="E3" value="{{ NULL }}">
								<input type="hidden" name="E4" value="{{ NULL }}">
								<input type="hidden" name="E5" value="{{ NULL }}">
								<input type="hidden" name="E6" value="{{ NULL }}">
								</div>																
																
									</tbody>
							</table>					
						</div>
					</div>
	
			</div>	  <!-- GrupoE-->