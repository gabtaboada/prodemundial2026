 <!-- Modal -->
     <div class="modal fade" id="ModalEditarApuesta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Editar resultado del partido</h4>
                </div>
                 <div class="modal-body">
                        <p>Seleccionar el resultado</p>
                        <div id="mensajeActualizarEstado" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div><div class="form-group">    
                        <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">Local</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th style="width:20px;">Empate</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th style="width:20px;">Visitante</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td   style="padding-top:13px">
                                                <div id="cruzL" name="cruzL">
                                                </div>
                                            </td>
                                            <td>
                                      <select name="GolEqui1" id="GolEqui1" style="height: 30px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
                                        <option value="">Goles</option>
                                        @for($g = 0; $g <= 12; $g++)
                                            <option value="{{ $g }}">{{ $g }}</option>
                                        @endfor
                                    </select>
                                            </td>                                            
                                            <td>
                                                <div id="Bandera1" name="Bandera1" style="">
                                                </div>
                                            </td>   
                                            <td  style="padding-top:16px;font-size:15px;">
                                                <div id="Equipo1" name="Equipo1" >
                                                </div>
                                            </td>
                                            <td style="padding-top:13px">
                                                <div id="cruzE" name="cruzE">
                                                </div>                                    
                                            </td>
                                            <td  style="padding-top:16px;font-size:15px;">
                                                <div id="Equipo2" name="Equipo2">
                                                </div>
                                            </td>
                                            <td>
                                                <div id="Bandera2" name="Bandera2">
                                                </div>
                                            </td>
                                            <td>
                                            <select name="GolEqui2" id="GolEqui2" style="height: 30px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
                                                <option value="">Goles</option>
                                                @for($g = 0; $g <= 12; $g++)
                                                    <option value="{{ $g }}">{{ $g }}</option>
                                                @endfor
                                            </select>
                                            </td>                                            
                                            <td  style="padding-top:13px">
                                                <div id="cruzV" name="cruzV">
                                                </div>                                                                                            
                                            </td>

                                        </tr>
                                    </tbody>                                        
                                </table>
                        </div>        
                
                        {{-- TODO: reemplazar manualmente: {!!Form::label('Resultado :')!!} --}}
                            <select  name="resultadoEdit" id="resultadoEdit" style="height: 35px;width=80px;margin-left:10px; padding: 4px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                            </select>   
                        </div>                   
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenEditar">
                        <input type="hidden" name="Grupopartido"  id="Grupopartido">
                        <input type="hidden" name="divIdApuesta"  id="divIdApuesta">
                        <input type="hidden" name="grupoOculto"  id="grupoOculto">                                          
                 </div>
                 <div class="modal-footer">

<button type="button" id="confirmarActualizar" class="btn btn-primary">Confirmar</button>
<button type="button" id="cancelarActualizar" class="btn btn-danger">Cancelar</button>
                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->