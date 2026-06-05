	<div class="pricing-grid grid-two" ><!--Grupo B -->
		<div class="CajaDerecha">
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
									</tr>
								</thead>
													
								<tbody>
									@foreach( $GrupoB as $partido)
								<tr style="border: 1px solid #ddd;">
										<td style="padding:0px;">
											{!!Form::select('Par_'.$partido->B_Partido.'_GolEqui1', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'), NULL ,['id'=>'Par_'.$partido->B_Partido.'_GolEqui1','style'=>'height: 23px;width=18px;font-size: 12px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  								
										</td>
									<td style="max-width: 30px;">
										{{ $partido -> B_abreviado1 }}
									</td>
									<td style="max-width: 23px;">
										<img src="{{ $partido -> B_Bandera1 }}" alt="" title="" style="border-radius: 50%;" width="20" height="20" >
									</td>
									<td style="max-width: 15px;margin-top:5px;">
											VS									
									</td>

									<td style="max-width: 23px;">
										<img src="{{ $partido -> B_Bandera2 }}" alt="" title="" style="border-radius: 50%;" width="20" height="20" >
									</td>
									<td style="max-width: 30px;">
										{{ $partido -> B_abreviado2 }}
									</td>									
									<td  style="padding:0px;">
											{!!Form::select('Par_'.$partido->B_Partido.'_GolEqui2', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),NULL,['id'=>'Par_'.$partido->B_Partido.'_GolEqui2','style'=>'height: 20px;width=18px;font-size: 12px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  
																		
										</td>																				
								</tr>
							@endforeach						
			<div class="form-group">
			{!!Form::hidden('B1',NULL)!!}
			{!!Form::hidden('B2',NULL)!!}
			{!!Form::hidden('B3',NULL)!!}
			{!!Form::hidden('B4',NULL)!!}
			{!!Form::hidden('B5',NULL)!!}
			{!!Form::hidden('B6',NULL)!!}
			</div>																		
								</tbody>
						</table>
						</div><!--tabla cel-->										
			</div>
	</div><!-- caja derecha -->		
</div><!-- Grupo B -->
	<div class="clearfix"> </div> 			  
				<!-- GRUPO AB -->				