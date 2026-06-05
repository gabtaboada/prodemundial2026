<div class="form-group">
    <label>Nombre :</label>
    <input type="text" name="par_name" value="{{ old('par_name') }}" class="form-control" placeholder="Nombre">
</div>

<div class="form-group">
    <label>Apellido :</label>
    <input type="text" name="par_apellido" value="{{ old('par_apellido') }}" class="form-control" placeholder="Apellido">
</div>

<div class="form-group">
    <table class="table" style="border: 1px solid #ddd;margin-top:10px;margin-bottom:40px;width:60%;">
        <thead>
            <th>Seleccionar</th>
            <th>Grupo de amigos</th>
        </thead>
        <tbody>
            @foreach( $GrupoAmigos as $GrupoAmigo )
            <tr class="warning">
                <td>
                    <input type="checkbox" value="{{ $GrupoAmigo['id'] }}" style="margin-top:5px;margin-right:10px;" name="CheckGrupoAmigo[]">
                </td>
                <td>{{ $GrupoAmigo['GrupoAmigos'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="form-group">
    <label>Teléfono :</label>
    <input type="text" name="par_tel" value="{{ old('par_tel') }}" class="form-control" placeholder="Ingrese un número de teléfono">
</div>

<div class="form-group">
    <label>Correo :</label>
    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Correo electrónico">
</div>

<div class="form-group">
    <label>Password :</label>
    <input type="password" name="password" class="form-control">
</div>

<input type="hidden" name="par_Pago" value="NO">