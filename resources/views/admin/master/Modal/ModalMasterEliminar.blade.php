 <!-- Modal -->
     <div class="modal fade" id="ModalEliminarMaster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Eliminar el resultado del partido</h4>
                </div>
                 <div class="modal-body">
                        <p>¿ Desea eliminar el este resultado de la tabla master ? Una vez eliminado se actualizara la tabla de aciertos.</p>
                        <div id="mensajeEliminarEstadoMaster" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenMasterEliminar">
                        <input type="hidden" name="GrupoMasterEliminar"  id="GrupoMasterEliminar">
                        <input type="hidden" name="PartidoMasterEliminar"  id="PartidoMasterEliminar">                                          
                 </div>
                 <div class="modal-footer">
             
<button type="button" id="confirmarEliminarMaster" class="btn btn-primary">Confirmar</button>
<button type="button" id="cancelarEliminarMaster" class="btn btn-danger">Cancelar</button>

                 </div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->