@extends('layouts.frontPaginas')

@section('content')
	
	@if( $ExisteBoleta != NULL)
		@include('front.boleta.BoletaParti.VerBoletadelParticipante')
	@else
		@include('front.boleta.BoletaParti.msjNoTieneBoletaCargada')
		<!-- poner msj que no tiene boleta cargada -->
	@endif
@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection