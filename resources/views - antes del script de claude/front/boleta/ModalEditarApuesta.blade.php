 <!-- Modal -->
     <div class="modal fade" id="ModalEditarApuesta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Resultado del partido</h4>
                </div>
                 <div class="modal-body">
                        <div id="mensajeActualizarEstadoApuesta" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div><div class="form-group">    
                        <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">Local</th>
                                            
                                            <th></th>
                                            <th></th>
                                            <th style="width:20px;">Empate</th>
                                            <th></th>
                                            <th></th>
                                            <th style="width:20px;">Visitante</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td   style="padding-top:13px">
                                                <div id="cruzL" name="cruzLApuesta" style="height:19px;">
                                                </div>

                                                <select  name="GolesEquipo1" id="GolesEquipo1" style="height: 35px;width=18px;margin-top:10px; padding: 4px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;" ></select>                                                
                                                                                                      
                                            </td>
                                            
                                                                                                   
                                            
                                            <td>
                                                <div id="Bandera1" name="Bandera1" style="">
                                                </div>
                                                
                                            </td>   
                                            <td  style="padding-top:16px;font-size:15px;">
                                                <div id="Equipo1" name="Equipo1" >
                                                </div>
                                            </td>
                                            <td style="padding-top:13px" style="height:19px;">
                                                <div id="cruzE" name="cruzEApuesta">
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
                                            
                                                                                               
                                            
                                            <td  style="padding-top:13px">
                                                                                                
                                                <div id="cruzV" name="cruzVApuesta" style="height:19px;">
                                                </div>     
                                                <select  name="GolesEquipo2" id="GolesEquipo2" style="height: 35px;width=18px;margin-top:10px; padding: 4px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;" ></select>                                                    
                                            </td>


                                        </tr>
                                    </tbody>                                        
                                </table>
                        </div>        
 
                        </div>                   
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenApuesta">
                        <input type="hidden" name="GrupoOcul"  id="GrupoOcul">
                        <input type="hidden" name="ResultadoOcul"  id="ResultadoOcul">
                        <input type="hidden" name="PartidoOcul"  id="PartidoOcul">                                          
                 </div>
                 <div class="modal-footer">
                    {!!url('#',$title= 'Confirmar' ,$attributes = ['id'=>'confirmarActualizarApuesta','class'=> 'btn btn-primary'],$secure=null)!!}

                    {!!url('#',$title= 'Cancelar',$attributes = ['id'=>'cancelarApuesta','class'=> 'btn btn-danger'],$secure=null)!!}


                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->