@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
			<h3 class="heading-agileinfo">Participantes<span></span></h3>

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
                            <div class="table-responsive">
                                <table class="table">
            	
                                    <thead>
                                        <tr class="titulosTablas">
                                           
                                            <th>Nombre</th>
											<th></th>
											<th>Boleta<th>
											 
										</tr>
									</thead>
                                    @foreach($participantes as $participante )
										<tbody>
												
											  <tr  style="font-size:18px; ">	

												<td >{{ $participante -> par_apellido }} {{ $participante -> par_name }}
												</td>
												<td></td>

												<td style="font-size:13px;">
													@if($estado !=1)
															 <a href="{!!URL::to('Verboleta/'.$participante -> id)!!}" style="text-decoration:none;font-size:16px;">
													ver boleta
													</a>
													@else
													
													@endif
													
													
													<!--
													La boleta se podra ver una vez que inicie el mundial
												-->

												</td>
												<td style="font-size:16px;font-style: italic;">
													@if( $participante->ExisteBoleta =="NO" )
														No tiene la boleta cargada
													@endif
												</td>
												 
											  </tr>	


										</tbody>
									@endforeach
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        {!!$participantes->appends(Request::only(['nombre']))->render()!!}	    
                    </div><!-- panel body-->

				</div>	
			</div>

	</div>

</div>


@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection