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
											{!!Form::select('Par_'.$partido->E_Partido.'_GolEqui1', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'), NULL ,['id'=>'Par_'.$partido->E_Partido.'_GolEqui1','style'=>'height: 23px;width=18px;font-size: 12px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  								
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
											{!!Form::select('Par_'.$partido->E_Partido.'_GolEqui2', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),NULL,['id'=>'Par_'.$partido->E_Partido.'_GolEqui2','style'=>'height: 20px;width=18px;font-size: 12px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  
																		
										</td>																				
									</tr>
								@endforeach
								<div class="form-group">
								{!!Form::hidden('E1',NULL)!!}
								{!!Form::hidden('E2',NULL)!!}
								{!!Form::hidden('E3',NULL)!!}
								{!!Form::hidden('E4',NULL)!!}
								{!!Form::hidden('E5',NULL)!!}
								{!!Form::hidden('E6',NULL)!!}
								</div>																
																
									</tbody>
							</table>					
						</div>
					</div>
	
			</div>	  <!-- GrupoE-->