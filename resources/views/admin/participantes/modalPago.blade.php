 <!-- Modal -->
     <div class="modal fade" id="ModalActualizarPago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">Pago de la boleta</h4>
                </div>
                 <div class="modal-body">
                        <p>Actualización del pago de la boleta</p>
                        <div id="mensajeActualizarEstadoPago" style="font-size:12px;color:#b6093e;font-weight: bold;font-style: italic;margin-bottom:10px;margin-bottom:10px;"></div><div class="form-group">    
                        <div class="table-responsive">
                                
                        </div>        
                
                        <label>¿ Realizó el pago de la boleta ? :</label>
                            <select  name="PagoBoleta" id="PagoBoleta" style="height: 35px;width=80px;margin-left:10px; padding: 4px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                            </select>   
                        </div>                   
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenPago">
                        <input type="hidden" name="PagoIdPart"  id="PagoIdPart">
                                         
                 </div>
<div class="modal-footer">
    <button type="button" id="confirmarActualizarPago" class="btn btn-primary">Actualizar</button>
    <button type="button" id="cancelarActualizarPago" class="btn btn-danger">Cancelar</button>
</div>
            </div>
            <!-- /.modal-content -->
        </div>
     <!-- /.modal-dialog -->
    </div>
 <!-- /.modal -->