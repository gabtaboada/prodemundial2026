<div class="about-bottom inner-padding"  >
	<div class="container" >
			

					{{-- TODO: reemplazar manualmente: {!! Form::model(Request::all(),['route'=>'posiciones.index','method' =>'GET','role'=>'search'])!!} 	
					
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
					</form>--}}
				<form action="{{ route('participantes.index') }}" method="GET" role="search">
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
					</form>					 


				<div class="clearfix"> </div>			
						
	</div>
</div>

<div class="wthree-mid">
	<div class="container">
			<div class="FormuBoleta">

				<div class="form-group">

					<div class="panel-body">
						<div class="w3ls-top" style="font-size: 25px;;font-weight: 400;color: #000;text-transform: capitalize;text-align: center;border-bottom: 2px solid #ddd;">
							@if ($CantidadAciertos == NULL)
								{{ $participante }}
							@else
								{{ $participante }} - {{ $CantidadAciertos }} aciertos
							@endif

							
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

								@include('front.boleta.BoletaParti.GrupoAB')
								@include('front.boleta.BoletaParti.GrupoCD')
								@include('front.boleta.BoletaParti.GrupoEF')
								@include('front.boleta.BoletaParti.GrupoGH')
								@include('front.boleta.BoletaParti.GrupoIJ')
								@include('front.boleta.BoletaParti.GrupoKL')
							</div>
					</div>
				</div>

			</div>
	</div>

</div>


<!-- //about inner -->		