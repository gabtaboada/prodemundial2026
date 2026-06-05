<div class="pricing-grids-info">
		
		<div class="FormuBoleta">
			@include('front.boleta.forms.GrupoA')
			@include('front.boleta.forms.GrupoB')
			@include('front.boleta.forms.GrupoC')
			@include('front.boleta.forms.GrupoD')			
			@include('front.boleta.forms.GrupoE')
			@include('front.boleta.forms.GrupoF')
			@include('front.boleta.forms.GrupoG')
			@include('front.boleta.forms.GrupoH')						
			@include('front.boleta.forms.GrupoI')	
			@include('front.boleta.forms.GrupoJ')	
			@include('front.boleta.forms.GrupoK')	
			@include('front.boleta.forms.GrupoL')													
				
					 <div>
						<span>
							<input type="submit" value="Cargar Boleta" class="myButton" id="EnviarLogin">
						</span>
				    </div>					 
<div>
    <span>
<button type="button" style="background:#4CAF50; color:white; padding:10px 20px; margin:5px; cursor:pointer; border:none; border-radius:4px;" id="BtnGuardarBorrador" onclick="guardarBorrador()">
    💾 Guardar Borrador
</button>
&nbsp;&nbsp;
{{-- <input type="submit" value="Cargar Boleta" style="background:#337ab7; color:white; padding:10px 20px; margin:5px; cursor:pointer; border:none; border-radius:4px;" id="EnviarLogin"> --}}
    </span>
</div>

<div id="mensajeBorrador" style="display:none; margin-top:10px; color:green; font-weight:bold;"></div>

<script>
function guardarBorrador() {
    var form = document.querySelector('form');
    var formData = new FormData(form);
    
    fetch('/boleta/guardarParcial', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        var msg = document.getElementById('mensajeBorrador');
        msg.style.display = 'block';
        msg.style.color = data.success ? 'green' : 'red';
        msg.innerText = data.success || data.error;
        setTimeout(() => { msg.style.display = 'none'; }, 3000);
    })
    .catch(() => {
        var msg = document.getElementById('mensajeBorrador');
        msg.style.display = 'block';
        msg.style.color = 'red';
        msg.innerText = 'Error al guardar el borrador';
        setTimeout(() => { msg.style.display = 'none'; }, 3000);
    });
}
</script>					
		</div><!-- Formu Boleta-->
</div>			