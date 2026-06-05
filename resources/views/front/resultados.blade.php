@extends('layouts.frontPaginas')

@section('content')
 <!-- about inner -->
<div class="about-bottom inner-padding">

</div>
<div class="wthree-mid">
	<div class="container">
		@include('front.resultados.grupoAB')

		@include('front.resultados.grupoCD')

		@include('front.resultados.grupoEF')

		@include('front.resultados.grupoGH')
			
		@include('front.resultados.grupoIJ')
		
		@include('front.resultados.grupoKL')				
	</div>

</div>
     
	  					        
{{-- Modal apuestas del partido --}}
<div class="modal fade" id="modalApuestas" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="modalTitulo">Apuestas del partido</h4>
            </div>
            <div class="modal-body" id="modalContenido">
                <p>Cargando...</p>
            </div>
        </div>
    </div>
</div>

<!-- //about inner -->

@endsection
@section('scripts')
	<script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
	<script>
	function verApuestas(grupo, partido) {
		$('#modalContenido').html('<p>Cargando...</p>');
		$('#modalApuestas').modal('show');
		$.ajax({
			url: '/apuestaPartido/' + grupo + '/' + partido,
			headers: { 'X-Requested-With': 'XMLHttpRequest' },
			success: function(data) {
				var html = '<h4><img src="' + data.Bandera1 + '" width="25" style="border-radius:50%"> ' + data.Equipo1 + ' - ' + data.Equipo2 + ' <img src="' + data.Bandera2 + '" width="25" style="border-radius:50%"></h4>';
				html += '<table class="table table-striped"><thead><tr><th>Pos.</th><th>Participante</th><th>' + data.EquipoAbreviado1 + ' - ' + data.EquipoAbreviado2 + '</th><th>Aciertos</th></tr></thead><tbody>';
				$.each(data.posiciones, function(i, p) {
					html += '<tr><td>' + p.posicion + '</td><td>' + p.nombre + '</td><td>' + p.goles1 + ' - ' + p.goles2 + '</td><td>' + p.aciertos + '</td></tr>';
				});
				html += '</tbody></table>';
				$('#modalTitulo').html('Apuestas: ' + data.Equipo1 + ' vs ' + data.Equipo2);
				$('#modalContenido').html(html);
			},
			error: function() {
				$('#modalContenido').html('<p>Error al cargar las apuestas.</p>');
			}
		});
	}
	</script>	
@endsection