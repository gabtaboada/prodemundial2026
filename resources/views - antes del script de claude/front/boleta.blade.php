@extends('layouts.frontPaginas')

@section('content')

	@if( $ExisteBoleta != NULL)
		
		@include('front.boleta.VerBoleta')
	@else
		@if( ( $HabilitarCarga == 1 ) && ( $Pago == "SI") )
			@include('front.boleta.create')
		@else
			@if( ( $HabilitarCarga == 0 ) && ( $Pago == "SI") )
					Se encuentra deshabilitada la carga de la boleta
				@include('front.boleta.MsjDeshabilitada')
			@endif
			@if( ( $HabilitarCarga == 1 ) && ( ( $Pago == "NO") || ( $Pago == null) ) )
				@include('front.boleta.pago')	
					@section('scripts')
						{!!Html::script('js/ScriptRedireccionar.js')!!}
					@endsection
			@endif	
		@endif
	@endif

@endsection