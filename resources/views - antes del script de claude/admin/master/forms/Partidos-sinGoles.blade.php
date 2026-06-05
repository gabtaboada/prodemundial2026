<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
            GRUPO A
        </div>
                        <!-- /.panel-heading -->
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
                                        <tr>
                                            <td   style="padding-top:13px">
                                                @if ( $Master->A1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                                
                                            </td>
                                            <td>
                                                <img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Rusia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                            
                                            </td>

                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                A. Saudita
                                            </td>                                            
                                            <td  style="padding-top:13px">
                                                 &nbsp;<strong>{{ $Master -> Mas_A1_GolEqui2 }}</strong>
                                                @if ( $Master->A1 == "V")  
                                                     <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                               
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/A/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Master->A1 != NULL )
                                                    <button value="{{ $Master -> id }}/A/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>
                                           
                                        </tr>                                        
                                        <tr>
                                            <td   style="padding-top:13px">
                                            	@if ( $Master->A1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>	
                                            <td style="padding-top:13px;font-size:15px;">
                                            	Rusia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                            
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                            	A. Saudita
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td  style="padding-top:13px">
                                                @if ( $Master->A1 == "V")  
                                                     <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                               
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/A/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Master->A1 != NULL )
                                                    <button value="{{ $Master -> id }}/A/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Egipto
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Master -> id }}/A/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->A2 != NULL )
                                                    <button value="{{ $Master -> id }}/A/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                    
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Rusia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Egipto
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Master -> id }}/A/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->A3 != NULL )
                                                    <button value="{{ $Master -> id }}/A/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                      
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Uruguay
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                A. Saudita
                                            </td>
                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Master -> id }}/A/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>        
                                            <td>
                                                @if ( $Master->A4 != NULL )
                                                    <button value="{{ $Master -> id }}/A/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Uruguay
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Rusia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Master -> id }}/A/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->A5 != NULL )
                                                    <button value="{{ $Master -> id }}/A/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                     
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                A. Saudita
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Egipto
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Master -> id }}/A/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->A6 != NULL )
                                                    <button value="{{ $Master -> id }}/A/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                      
                                        </tr>                                               
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO B
        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">L</th>
                                            <th ></th>
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
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Marruecos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Iran
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Master->B1 != NULL )
                                                    <button value="{{ $Master -> id }}/B/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                     
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Portugal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                España
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->B2 != NULL )
                                                    <button value="{{ $Master -> id }}/B/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                

                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Portugal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Marruecos
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->B3 != NULL )
                                                    <button value="{{ $Master -> id }}/B/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Iran 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                 España
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->B4 != NULL )
                                                    <button value="{{ $Master -> id }}/B/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Iran 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Portugal
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->B5 != NULL )
                                                    <button value="{{ $Master -> id }}/B/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                España 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Marruecos
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/B/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->B6 != NULL )
                                                    <button value="{{ $Master -> id }}/B/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                
                                        </tr>                                                                                                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>      
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO C
        </div>
                        <!-- /.panel-heading -->
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
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>                                        
                                            <td>
                                                <button value="{{ $Master -> id }}/C/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>      
                                            <td>
                                                @if ( $Master->C1 != NULL )
                                                    <button value="{{ $Master -> id }}/C/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Peru
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Dinamarca
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/C/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->C2 != NULL )
                                                    <button value="{{ $Master -> id }}/C/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Dinamarca
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            <td style="padding-top:13px;font-size:15px;">
                                                Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>    
                                            <td>
                                                <button value="{{ $Master -> id }}/C/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Master->C3 != NULL )
                                                    <button value="{{ $Master -> id }}/C/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                      
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>

                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Peru
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/C/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Master->C4 != NULL )
                                                    <button value="{{ $Master -> id }}/C/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                          
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Dinamarca
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Francia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/C/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->C5 != NULL )
                                                    <button value="{{ $Master -> id }}/C/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                   
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Australia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Peru
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/C/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->C6 != NULL )
                                                    <button value="{{ $Master -> id }}/C/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                   
                                        </tr>                                                                     
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO D
        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">L</th>
                                            <th ></th>
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
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Argentina 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                Islandia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Master->D1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->D1 != NULL )
                                                    <button value="{{ $Master -> id }}/D/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                              
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Croacia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                Nigeria
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Master->D2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>       
                                            <td>
                                                @if ( $Master->D2 != NULL )
                                                    <button value="{{ $Master -> id }}/D/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Argentina 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Master->D3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->D3 != NULL )
                                                    <button value="{{ $Master -> id }}/D/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Nigeria 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                     
                                            <td style="padding-top:13px;font-size:15px;">
                                                Islandia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                   
                                            <td style="padding-top:13px">
                                                @if ( $Master->D4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->D4 != NULL )
                                                    <button value="{{ $Master -> id }}/D/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Nigeria 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Argentina
                                            </td>
                                            <td>
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->D5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>           
                                            <td>
                                                @if ( $Master->D5 != NULL )
                                                    <button value="{{ $Master -> id }}/D/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                            
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Islandia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Master->D6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/D/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>      
                                            <td>
                                                @if ( $Master->D6 != NULL )
                                                    <button value="{{ $Master -> id }}/D/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                 
                                        </tr>                                                                                                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div> 
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO E
        </div>
                        <!-- /.panel-heading -->
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
                                        <tr>
                                            <td  style="margin-top:9px;">
                                                @if ( $Master->E1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Costa rica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                Serbia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->E1 != NULL )
                                                    <button value="{{ $Master -> id }}/E/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->E2 != NULL )
                                                    <button value="{{ $Master -> id }}/E/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->E3 != NULL )
                                                    <button value="{{ $Master -> id }}/E/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                 @if ( $Master->E4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Serbia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Master->E4 != NULL )
                                                    <button value="{{ $Master -> id }}/E/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                        </tr>    
                                       <tr>
                                           <td style="padding-top:13px">
                                                @if ( $Master->E5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Serbia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Brasil
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Master->E5 != NULL )
                                                    <button value="{{ $Master -> id }}/E/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suiza
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/E/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->E6 != NULL )
                                                    <button value="{{ $Master -> id }}/E/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                                                     
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO F
        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">L</th>
                                            <th ></th>
                                            <th></th>
                                            <th style="width:20px;">E</th>
                                            <th></th>
                                            <th></th>
                                            <th style="width:20px;">V</th>
                                            <th>Editar</th>
                                            <ht>Eliminar</th>
                                        </tr>
                                    </thead>
          
                                    <tbody>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Alemania 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Mexico
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->F1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>                                                  
                                            <td>
                                                @if ( $Master->F1 != NULL )
                                                    <button value="{{ $Master -> id }}/F/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suecia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                Corea
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Master->F2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->F2 != NULL )
                                                    <button value="{{ $Master -> id }}/F/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Alemania 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Master->F3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Master->F3 != NULL )
                                                    <button value="{{ $Master -> id }}/F/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Corea 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                Mexico
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Master->F4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->F4 != NULL )
                                                    <button value="{{ $Master -> id }}/F/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Corea 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Alemania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->F5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Master->F5 != NULL )
                                                    <button value="{{ $Master -> id }}/F/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                  
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Mexico 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->F6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/F/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->F6 != NULL )
                                                    <button value="{{ $Master -> id }}/F/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                        </tr>                                                                                                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>     
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO G
        </div>
                        <!-- /.panel-heading -->
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
                                        <tr>
                                            <td  style="margin-top:9px;">
                                                @if ( $Master->G1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td> 
                                            <td>
                                                @if ( $Master->G1 != NULL )
                                                    <button value="{{ $Master -> id }}/G/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Tunez
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Inglaterra
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td> 
                                            <td>
                                                @if ( $Master->G2 != NULL )
                                                    <button value="{{ $Master -> id }}/G/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                          
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Master->G3 != NULL )
                                                    <button value="{{ $Master -> id }}/G/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->G4 != NULL )
                                                    <button value="{{ $Master -> id }}/G/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Belgica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Master->G5 != NULL )
                                                    <button value="{{ $Master -> id }}/G/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                  @if ( $Master->G6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                Panama
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Master->G6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Master->G6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/G/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>          
                                            <td>
                                                @if ( $Master->G6 != NULL )
                                                    <button value="{{ $Master -> id }}/G/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                 
                                        </tr>                                                                     
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO H
        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">L</th>
                                            <th ></th>
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
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Colombia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                Japon
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Master->H1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Master->H1 != NULL )
                                                    <button value="{{ $Master -> id }}/H/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Polonia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Master->H2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->H2 != NULL )
                                                    <button value="{{ $Master -> id }}/H/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Japon
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->H3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Master->H3 != NULL )
                                                    <button value="{{ $Master -> id }}/H/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Polonia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Master->H4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Master->H4 != NULL )
                                                    <button value="{{ $Master -> id }}/H/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Japon 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                Polonia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Master->H5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Master->H5 != NULL )
                                                    <button value="{{ $Master -> id }}/H/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                Senegal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Master->H6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Master -> id }}/H/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarMaster'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Master->H6 != NULL )
                                                    <button value="{{ $Master -> id }}/H/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                             
                                        </tr>                                                                                                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
    </div>                    
</div>      