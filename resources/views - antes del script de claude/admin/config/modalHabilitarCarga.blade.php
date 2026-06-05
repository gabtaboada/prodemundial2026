 <!-- Modal -->
     <div class="modal fade" id="ModalEstadoHabilitar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel"> Carga Online de boletas </h4>
                </div>
                 <div class="modal-body">
                        <div id="mensajeEstadoHabilitar" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div>

                        <div id="TextoMsjEstado" style="font-size:16px;margin-top:20px;margin-bottom:10px;"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenEstadoHabilitar">
                        <input type="hidden" name="HabilitarCarga" value="{{ csrf_token() }}" id="HabilitarCarga">
                                    
                 </div>
                 <div class="modal-footer">
                    {!!url('#',$title= 'Confirmar' ,$attributes = ['id'=>'confirmarEstadoHabilitar','class'=> 'btn btn-primary'],$secure=null)!!}

                    {!!url('#',$title= 'Cancelar',$attributes = ['id'=>'cancelarEstadoHabilitar','class'=> 'btn btn-danger'],$secure=null)!!}


                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->