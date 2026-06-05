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
        <!--    A1 QATAR
                A2 ECUADOR
                A3 PAISES BAJOS
                A4 SENEGAL
        -->
                                    <tbody>
                                        <tr>
                                            <td   style="padding-top:13px">
                                            	@if ( $Master->A1 == "L")  
                                                    <img src="../images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                               
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>	
                                            <td style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Master -> Mas_A1_GolEqui1 }}</strong>&nbsp; &nbsp;Qatar 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                            
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Master -> Mas_A1_GolEqui2 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A2_GolEqui1 }}</strong>&nbsp;&nbsp;Senegal
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A2_GolEqui2 }}</strong>&nbsp;&nbsp;Paises bajos
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A3_GolEqui1 }}</strong>&nbsp;&nbsp;Qatar
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A3_GolEqui2 }}</strong>&nbsp;&nbsp;Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A4_GolEqui1 }}</strong>&nbsp;&nbsp;Paises bajos
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A4_GolEqui2 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A5_GolEqui1 }}</strong>&nbsp;&nbsp;Paises bajos
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A5_GolEqui2 }}</strong>&nbsp;&nbsp;Qatar
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A6_GolEqui1 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->A6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_A6_GolEqui2 }}</strong>&nbsp;&nbsp;Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
            
        <!--    B1 INGLATERRA
                B2 IRAN
                B3 ESTADOS UNIDOS
                B4 WALES
        -->        
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
                                                <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B1_GolEqui1 }}</strong>&nbsp;&nbsp;Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B1_GolEqui2 }}</strong>&nbsp;&nbsp;Iran
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B2_GolEqui1 }}</strong>&nbsp;&nbsp;Estados unidos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B2_GolEqui2 }}</strong>&nbsp;&nbsp;Wales
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Wales.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B3_GolEqui1 }}</strong>&nbsp;&nbsp;Inglaterra 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B3_GolEqui2 }}</strong>&nbsp;&nbsp;Estados unidos
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Wales.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B4_GolEqui1 }}</strong>&nbsp;&nbsp;Wales 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B4_GolEqui2 }}</strong>&nbsp;&nbsp; Iran
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Wales.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B5_GolEqui1 }}</strong>&nbsp;&nbsp;Wales 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B5_GolEqui2 }}</strong>&nbsp;&nbsp;Inglaterra
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B6_GolEqui1 }}</strong>&nbsp;&nbsp;Iran 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->B6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_B6_GolEqui2 }}</strong>&nbsp;&nbsp;Estados unidos
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
        <!--
            GRUPO C
                ARGENTINA
                ARABIA SAUDITA
                MEXICO 
                POLONIA

        -->    
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
                                                @if ( $Master->C1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C1_GolEqui1 }}</strong>&nbsp;&nbsp;Argentina
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C1_GolEqui2 }}</strong>&nbsp;&nbsp;saudita
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C2_GolEqui1 }}</strong>&nbsp;&nbsp;Mexico 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C2_GolEqui2 }}</strong>&nbsp;&nbsp;Polonia
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C3_GolEqui1 }}</strong>&nbsp;&nbsp;Argentina 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C3_GolEqui2 }}</strong>&nbsp;&nbsp;Mexico
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C4_GolEqui1 }}</strong>&nbsp;&nbsp;Polonia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C4_GolEqui2 }}</strong>&nbsp;&nbsp;saudita
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C5_GolEqui1 }}</strong>&nbsp;&nbsp;Polonia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C5_GolEqui2 }}</strong>&nbsp;&nbsp;Argentina
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C6_GolEqui1 }}</strong>&nbsp;&nbsp;saudita 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->C6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_C6_GolEqui2 }}</strong>&nbsp;&nbsp;Mexico
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
            <!--
                GRUPO D
                    FRANCIA
                    DINAMARCA
                    TUNEZ
                    AUSTRALIA

            -->    
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
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D1_GolEqui1 }}</strong>&nbsp;&nbsp;Francia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D1_GolEqui2 }}</strong>&nbsp;&nbsp;Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D2_GolEqui1 }}</strong>&nbsp;&nbsp;Dinamarca 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D2_GolEqui2 }}</strong>&nbsp;&nbsp;Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D3_GolEqui1 }}</strong>&nbsp;&nbsp;Francia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D3_GolEqui2 }}</strong>&nbsp;&nbsp;Dinamarca
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D4_GolEqui1 }}</strong>&nbsp;&nbsp;Tunez 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                     
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D4_GolEqui2 }}</strong>&nbsp;&nbsp;Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D5_GolEqui1 }}</strong>&nbsp;&nbsp;Tunez 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D5_GolEqui2 }}</strong>&nbsp;&nbsp;Francia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D6_GolEqui1 }}</strong>&nbsp;&nbsp;Australia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->D6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_D6_GolEqui2 }}</strong>&nbsp;&nbsp;Dinamarca
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
        <!--
            GRUPO E
                ESPAÑA
                ALEMANIA
                JAPON
                COSTA RICA
        -->    
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
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E1_GolEqui1 }}</strong>&nbsp;&nbsp;España
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E1_GolEqui2 }}</strong>&nbsp;&nbsp;Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/CostaRica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E2_GolEqui1 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E2_GolEqui2 }}</strong>&nbsp;&nbsp;Japon
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E3_GolEqui1 }}</strong>&nbsp;&nbsp;España
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E3_GolEqui2 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E4_GolEqui1 }}</strong>&nbsp;&nbsp;Japon
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E4_GolEqui2 }}</strong>&nbsp;&nbsp;Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/CostaRica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E5_GolEqui1 }}</strong>&nbsp;&nbsp;Japon
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E5_GolEqui2 }}</strong>&nbsp;&nbsp;España
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/CostaRica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E6_GolEqui1 }}</strong>&nbsp;&nbsp;Costa rica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->E6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_E6_GolEqui2 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
        <!-- GRUPO F
            BELGICA
            CANADA
            MARRUECOS
            CROACIA
    
        -->



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
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F1_GolEqui1 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F1_GolEqui2 }}</strong>&nbsp;&nbsp;Canada
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F2_GolEqui1 }}</strong>&nbsp;&nbsp;Marruecos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F2_GolEqui2 }}</strong>&nbsp;&nbsp;Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F3_GolEqui1 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F3_GolEqui2 }}</strong>&nbsp;&nbsp;Marruecos
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F4_GolEqui1 }}</strong>&nbsp;&nbsp;Croacia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F4_GolEqui2 }}</strong>&nbsp;&nbsp;Canada
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F5_GolEqui1 }}</strong>&nbsp;&nbsp;Croacia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F5_GolEqui2 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F6_GolEqui1 }}</strong>&nbsp;&nbsp;Canada 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->F6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_F6_GolEqui2 }}</strong>&nbsp;&nbsp;Marruecos
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
        <!--
            GRUPO G
                BRASIL
                SERBIA
                SUIZA
                CAMERUN

        -->    
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
                                                <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G1_GolEqui1 }}</strong>&nbsp;&nbsp;Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G1_GolEqui2 }}</strong>&nbsp;&nbsp;Serbia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G2_GolEqui1 }}</strong>&nbsp;&nbsp;Suiza
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G2_GolEqui2 }}</strong>&nbsp;&nbsp;Camerun
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Camerun.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G3_GolEqui1 }}</strong>&nbsp;&nbsp;Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G3_GolEqui2 }}</strong>&nbsp;&nbsp;Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Camerun.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G4_GolEqui1 }}</strong>&nbsp;&nbsp;Camerun
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G4_GolEqui2 }}</strong>&nbsp;&nbsp;Serbia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Camerun.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G5_GolEqui1 }}</strong>&nbsp;&nbsp;Camerun
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->G5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G5_GolEqui2 }}</strong>&nbsp;&nbsp;Brasil
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G6_GolEqui1 }}</strong>&nbsp;&nbsp;Serbia
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Master->G6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_G6_GolEqui2 }}</strong>&nbsp;&nbsp;Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
        <!--
            GRUPO H
                PORTUGAL
                GHANA
                URUGUAY
                COREA
        -->    
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
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H1_GolEqui1 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H1_GolEqui2 }}</strong>&nbsp;&nbsp;Ghana
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H2_GolEqui1 }}</strong>&nbsp;&nbsp;Uruguay
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H2_GolEqui2 }}</strong>&nbsp;&nbsp;Corea
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H3_GolEqui1 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H3_GolEqui2 }}</strong>&nbsp;&nbsp;Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H4_GolEqui1 }}</strong>&nbsp;&nbsp;Corea
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H4_GolEqui2 }}</strong>&nbsp;&nbsp;Ghana
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H5_GolEqui1 }}</strong>&nbsp;&nbsp;Corea 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H5_GolEqui2 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H6_GolEqui1 }}</strong>&nbsp;&nbsp;Ghana 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Master->H6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Master -> Mas_H6_GolEqui2 }}</strong>&nbsp;&nbsp;Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
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