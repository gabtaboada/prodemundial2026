@foreach($grupos as $index => $grupo)

@if($index % 2 == 0)
    <div class="row">
@endif


<div class="col-md-6">
    <div class="panel panel-default">

        <div class="panel-heading">
           holis  GRUPO {{ $grupo }}
        </div>

        <div class="panel-body">

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th style="width:20px;">L</th>
                            <th></th>
                            <th></th>
                            <th style="width:20px;">E</th>
                            <th></th>
                            <th></th>
                            <th style="width:20px;">V</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($datosGrupos[$grupo] as $index => $partido)

                        @php

                            $numeroPartido = $index + 1;

                            $campoResultado = $grupo . $numeroPartido;

                            $campoGol1 = 'Mas_' . $grupo . $numeroPartido . '_GolEqui1';

                            $campoGol2 = 'Mas_' . $grupo . $numeroPartido . '_GolEqui2';

                            $prefijo = $grupo . '_';

                        @endphp

                        <tr>

                            {{-- LOCAL --}}
                            <td style="padding-top:13px">

                                @if($Master->$campoResultado == "L")
                                    <img src="/images/cruz.png" width="19" height="21">
                                @endif

                            </td>

                            {{-- BANDERA 1 --}}
                            <td>

                                <img
                                    src="{{ $partido->{$prefijo.'Bandera1'} }}"
                                    style="border-radius:50%;"
                                    width="30"
                                    height="30"
                                >

                            </td>

                            {{-- EQUIPO 1 --}}
                            <td style="padding-top:13px;font-size:15px;">

                                <strong>
                                    {{ $Master->$campoGol1 }}
                                </strong>

                                &nbsp;&nbsp;

                                {{ $partido->{$prefijo.'Equipo1'} }}

                            </td>

                            {{-- EMPATE --}}
                            <td style="padding-top:13px">

                                @if($Master->$campoResultado == "E")
                                    <img src="/images/cruz.png" width="19" height="21">
                                @endif

                            </td>

                            {{-- EQUIPO 2 --}}
                            <td style="padding-top:13px;font-size:15px;">

                                <strong>
                                    {{ $Master->$campoGol2 }}
                                </strong>

                                &nbsp;&nbsp;

                                {{ $partido->{$prefijo.'Equipo2'} }}

                            </td>

                            {{-- BANDERA 2 --}}
                            <td>

                                <img
                                    src="{{ $partido->{$prefijo.'Bandera2'} }}"
                                    style="border-radius:50%;"
                                    width="30"
                                    height="30"
                                >

                            </td>

                            {{-- VISITANTE --}}
                            <td style="padding-top:13px">

                                @if($Master->$campoResultado == "V")
                                    <img src="/images/cruz.png" width="19" height="21">
                                @endif

                            </td>

                            {{-- EDITAR --}}
                            <td>

                                <button
                                    value="{{ $Master->id }}/{{ $grupo }}/{{ $numeroPartido }}"
                                    Onclick='Modificar(this);'
                                    class='btn btn-link'
                                    data-toggle='modal'
                                    data-target='#ModalEditarMaster'
                                >

                                    <img
                                        src="/images/edit.png"
                                        width="20"
                                        height="20"
                                    >

                                </button>

                            </td>

                            {{-- ELIMINAR --}}
                            <td>

                                @if($Master->$campoResultado != NULL)

                                    <button
                                        value="{{ $Master->id }}/{{ $grupo }}/{{ $numeroPartido }}"
                                        Onclick='Eliminar(this);'
                                        class='btn btn-link'
                                        data-toggle='modal'
                                        data-target='#ModalEliminarMaster'
                                    >

                                        <img
                                            src="/images/eliminar.png"
                                            width="25"
                                            height="25"
                                            style="margin-top:-5px;"
                                        >

                                    </button>

                                @endif

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>
@if($index % 2 == 1 || $loop->last)
    </div>
@endif
@endforeach