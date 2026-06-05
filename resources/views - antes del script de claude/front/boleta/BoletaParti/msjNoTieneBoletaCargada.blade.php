<div class="about-bottom inner-padding"  >
	<div class="container" >
			

					{!! Form::model(Request::all(),['route'=>'participantes.index','method' =>'GET','role'=>'search'])!!}	
					
							<div class="contact-form">
							
									<div>
										<span>
											<input id="nombre" name="nombre" type="text" class="textbox"  placeholder="Nombre / Apellido" >
										</span>
									</div>
								    <div>
										<span>
											<input type="submit" value="Buscar" class="myButton" id="EnviarLogin">
										</span>
								    </div>								

							</div>	
					{!! Form::close()!!}
					


				<div class="clearfix"> </div>			
						
	</div>
</div>

<div class="wthree-mid">
	<div class="container">
			<div class="FormuBoleta">

				<div class="form-group">

					<div class="panel-body">
						<div class="w3ls-top" style="font-size: 25px;;font-weight: 400;color: #000;text-transform: capitalize;text-align: center;border-bottom: 2px solid #ddd;">
							{{ $participante }}
						</div>
						<div style="margin-top:10px;margin-left:10px;">
							<strong>Referencias</strong>
							<div>
								<img src="/images/cruz-verde.png" alt="" title=""  width="13" height="14" >	Resultado acertado - 1 punto de acierto
							</div>
							<div>
								<img src="/images/cruz-gris.png" alt="" title=""  width="13" height="14" > Resultado elegido	
							</div>				
							<div>
								<img src="/images/cruz.png" alt="" title=""  width="13" height="14" > Resultado del partido y no acertado	
							</div>		
							<div>
								Goles en verde :: resultado en goles acertado - 1 punto de acierto
							</div>																	
						</div>	
                            <div class="table-responsive">
							 
			 								<div class="w3ls-top" style="position: relative;
										    color: #000;
										    margin: 0 auto;
										    margin-top:10px;
										    font-size:25px;
										    text-align: center;
										    text-transform: initial ;
										    padding: 1em 0em;
										    border-radius: 5px 5px 0;
										    border-bottom: 2px solid #f14156;">
												Aún no tiene la boleta cargada
											</div>	
 		

							</div>
					</div>
				</div>

			</div>
	</div>

</div>


<!-- //about inner -->		