 <!-- Modal -->
     <div class="modal fade" id="ModalEditarMaster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Resultado del partido</h4>
                </div>
                 <div class="modal-body">
                        <p>Seleccionar el resultado</p>
                        <div id="mensajeActualizarEstadoMaster" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div><div class="form-group">    
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
                                                <div id="cruzL" name="cruzLMaster">
                                                </div>
                                            </td>
                                            <td>
                                            {!!Form::select('GolEqui1', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),NULL,['id'=>'GolEqui1','style'=>'height: 30px;width=15px;font-size: 12px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  
                                            </td>
                                            <td>
                                                <div id="Bandera1" name="Bandera1" style="">
                                                </div>
                                            </td>   
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <div id="Equipo1" name="Equipo1" >
                                                </div>
                                            </td>
                                            <td style="padding-top:13px">
                                                <div id="cruzE" name="cruzEMaster">
                                                </div>                                    
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <div id="Equipo2" name="Equipo2">
                                                </div>
                                            </td>

                                            <td>
                                                <div id="Bandera2" name="Bandera2">
                                                </div>
                                            </td>
                                            <td>
                                            {!!Form::select('GolEqui2', array(NULL => 'Goles','0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12'),NULL,['id'=>'GolEqui2','style'=>'height: 30px;width=20px; font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;'])!!}  
                                            </td>                                            
                                            <td  style="padding-top:13px">
                                                <div id="cruzV" name="cruzVMaster">
                                                </div>                                                                                            
                                            </td>

                                        </tr>
                                    </tbody>                                        
                                </table>
                        </div>        
                
                        {!!Form::label('Resultado :')!!}
                            <select  name="resultadoMaster" id="resultadoMaster" style="height: 35px;width=80px;margin-left:10px; padding: 4px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                            </select>   
                        </div>                   
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenMaster">
                        <input type="hidden" name="GrupopartidoMaster"  id="GrupopartidoMaster">
                        <input type="hidden" name="grupoOcultoMaster"  id="grupoOcultoMaster">                                          
                 </div>
                 <div class="modal-footer">
                    {!!url('#',$title= 'Actualizar' ,$attributes = ['id'=>'confirmarActualizarMaster','class'=> 'btn btn-primary'],$secure=null)!!}

                    {!!url('#',$title= 'Cancelar',$attributes = ['id'=>'cancelarActualizarMaster','class'=> 'btn btn-danger'],$secure=null)!!}


                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->