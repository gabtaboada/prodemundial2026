 <!-- Modal -->
     <div class="modal fade" id="ModalActualizarAciertos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Actualización tabla aciertos</h4>
                </div>
                 <div class="modal-body">
                        <p style="font-size:16px;color:#016b86;">Confirmar para actualizar la tabla aciertos </p>
                        <div id="mensajeActualizarAciertos" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenActualizarAciertos">
                                                                  
                 </div>
                 <div class="modal-footer">
<button type="button" id="confirmarActualizarAciertos" class="btn btn-primary">Confirmar</button>
<button type="button" id="cancelarActualizarAciertos" class="btn btn-danger">Cancelar</button>
                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->