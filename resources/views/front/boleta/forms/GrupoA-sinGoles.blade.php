			<div class="pricing-grid grid-one" ><!--GrupoA-->
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
									</tr>
								</thead>
												
							<tbody>
								@foreach( $GrupoA as $partido)
									<tr style="border: 1px solid #ddd;">
										<td>
											<input type="radio" name="{{ $partido->A_Partido }}" id="{{ $partido->A_Partido }}" value="L" style="margin-top:9px;"   <?php if(Input::old($partido->A_Partido )== "L") { echo 'checked="checked"'; } ?>   >		
											{{-- TODO: reemplazar manualmente: {!!Form::select('GolEqui1', array('0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),'0',['id'=>'GolEqui1','style'=>'height: 30px;width=20px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!} --}}  								
										</td>
										<td>
											{{ $partido -> A_abreviado1 }}
										</td>
										<td>
											<img src="{{ $partido -> A_Bandera1 }}" alt=" {{ $partido -> A_abreviado1 }} " title=" {{ $partido -> A_abreviado1 }} " style="border-radius: 50%;" width="20" height="20" >
										</td>
										<td>
											<input type="radio" name="{{ $partido->A_Partido }}" id="{{ $partido->A_Partido }}" value="E" style="margin-top:9px;"   <?php if(Input::old( $partido->A_Partido )== "E") { echo 'checked="checked"'; } ?>   >									
										</td>
										<td>
											{{ $partido -> A_abreviado2 }}
										</td>
										<td>
											<img src="{{ $partido -> A_Bandera2 }}" alt=" {{ $partido -> A_abreviado2 }} " title=" {{ $partido -> A_abreviado2 }} " style="border-radius: 50%;" width="20" height="20" >
										</td>
										<td>
											{{-- TODO: reemplazar manualmente: {!!Form::select('GolEqui1', array('0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),'0',['id'=>'GolEqui1','style'=>'height: 30px;width=20px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!} --}}  
											<input type="radio" name="{{ $partido->A_Partido }}" id="{{ $partido->A_Partido }}" value="V" style="margin-top:9px;"   <?php if(Input::old( $partido->A_Partido )== "V") { echo 'checked="checked"'; } ?>   >										
										</td>																				
									</tr>
								@endforeach
														
																
									</tbody>
							</table>					
						</div>
					</div>
	
			</div>	  <!-- GrupoA-->