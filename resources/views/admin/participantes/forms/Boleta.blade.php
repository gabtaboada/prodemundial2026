{{-- GRUPO A --}}
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
                                            	@if ( $Apuesta->A1 == "L")  
                                                    <img src="../images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                               
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>	
                                            <td style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Apuesta -> Par_A1_GolEqui1 }}</strong>&nbsp; &nbsp;Mexico 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                            
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Apuesta -> Par_A1_GolEqui2 }}</strong>&nbsp;&nbsp;Sudafrica
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/Sudafrica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td  style="padding-top:13px">

                                                @if ( $Apuesta->A1 == "V")  
                                                     <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                               
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/A/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Apuesta->A1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A2_GolEqui1 }}</strong>&nbsp;&nbsp;Corea del sur
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A2_GolEqui2 }}</strong>&nbsp;&nbsp;Rep Checa
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Checa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->A2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                    
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Checa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A3_GolEqui1 }}</strong>&nbsp;&nbsp;Rep Checa
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A3_GolEqui2 }}</strong>&nbsp;&nbsp;Sudafrica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Sudafrica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->A3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                      
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A4_GolEqui1 }}</strong>&nbsp;&nbsp;Mexico
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A4_GolEqui2 }}</strong>&nbsp;&nbsp;Corea del sur
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>        
                                            <td>
                                                @if ( $Apuesta->A4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Checa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A5_GolEqui1 }}</strong>&nbsp;&nbsp;Rep Checa
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A5_GolEqui2 }}</strong>&nbsp;&nbsp;Mexico
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->A5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                     
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Sudafrica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A6_GolEqui1 }}</strong>&nbsp;&nbsp;Sudafrica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A6_GolEqui2 }}</strong>&nbsp;&nbsp;Corea del sur
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->A6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/A/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO B --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO B
        </div>
            
        <!--    B1 CANADA
                B2 BOSNIA
                B3 QATAR
                B4 SUIZA
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
                                                @if ( $Apuesta->B1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B1_GolEqui1 }}</strong>&nbsp;&nbsp;Canada
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B1_GolEqui2 }}</strong>&nbsp;&nbsp;Bosnia
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/Bosnia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->B1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                     
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B2_GolEqui1 }}</strong>&nbsp;&nbsp;Qatar
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B2_GolEqui2 }}</strong>&nbsp;&nbsp;Suiza
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->B2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                

                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B3_GolEqui1 }}</strong>&nbsp;&nbsp;Suiza 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B3_GolEqui2 }}</strong>&nbsp;&nbsp;Bosnia
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Bosnia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->B3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B4_GolEqui1 }}</strong>&nbsp;&nbsp;Canada 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B4_GolEqui2 }}</strong>&nbsp;&nbsp; Qatar
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->B4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B5_GolEqui1 }}</strong>&nbsp;&nbsp;Suiza 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B5_GolEqui2 }}</strong>&nbsp;&nbsp;Canada
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/Canada.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->B5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Bosnia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B6_GolEqui1 }}</strong>&nbsp;&nbsp;Bosnia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B6_GolEqui2 }}</strong>&nbsp;&nbsp;Qatar
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Qatar.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->B6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/B/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO C --}}    
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO C
        </div>
        <!--
            GRUPO C
                BRASIL
                MARRUECOS
                HAITI
                ESCOCIA

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
                                                @if ( $Apuesta->C1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C1_GolEqui1 }}</strong>&nbsp;&nbsp;Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C1_GolEqui2 }}</strong>&nbsp;&nbsp;Marruecos
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->C1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                     
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Haiti.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C2_GolEqui1 }}</strong>&nbsp;&nbsp;Haiti 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C2_GolEqui2 }}</strong>&nbsp;&nbsp;Escocia
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Escocia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->C2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                

                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Escocia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C3_GolEqui1 }}</strong>&nbsp;&nbsp;Escocia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C3_GolEqui2 }}</strong>&nbsp;&nbsp;Marruecos
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->C3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C4_GolEqui1 }}</strong>&nbsp;&nbsp;Brasil 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C4_GolEqui2 }}</strong>&nbsp;&nbsp;Haiti
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/Haiti.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->C4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Escocia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C5_GolEqui1 }}</strong>&nbsp;&nbsp;Escocia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C5_GolEqui2 }}</strong>&nbsp;&nbsp;Brasil
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/Brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->C5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                               
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C6_GolEqui1 }}</strong>&nbsp;&nbsp;Marruecos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C6_GolEqui2 }}</strong>&nbsp;&nbsp;Haiti
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/Haiti.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->C6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/C/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO D --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO D
            <!--
                GRUPO D
                    Estados unidos
                    PARAGUAY
                    AUSTRALIA
                    TURQUIA

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
                                                @if ( $Apuesta->D1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D1_GolEqui1 }}</strong>&nbsp;&nbsp;Estados unidos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D1_GolEqui2 }}</strong>&nbsp;&nbsp;Paraguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Paraguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->D1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                              
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D2_GolEqui1 }}</strong>&nbsp;&nbsp;Australia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D2_GolEqui2 }}</strong>&nbsp;&nbsp;Turquia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Turquia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>       
                                            <td>
                                                @if ( $Apuesta->D2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Turquia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D3_GolEqui1 }}</strong>&nbsp;&nbsp;Turquia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D3_GolEqui2 }}</strong>&nbsp;&nbsp;Paraguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Paraguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->D3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D4_GolEqui1 }}</strong>&nbsp;&nbsp;Estados unidos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                     
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D4_GolEqui2 }}</strong>&nbsp;&nbsp;Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                   
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->D4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Turquia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D5_GolEqui1 }}</strong>&nbsp;&nbsp;Turquia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D5_GolEqui2 }}</strong>&nbsp;&nbsp;Estados unidos
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Usa.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>           
                                            <td>
                                                @if ( $Apuesta->D5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                            
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Paraguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D6_GolEqui1 }}</strong>&nbsp;&nbsp;Paraguay 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D6_GolEqui2 }}</strong>&nbsp;&nbsp;Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>      
                                            <td>
                                                @if ( $Apuesta->D6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/D/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO E --}} 
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO E
        </div>
        <!--
            GRUPO E
                ALEMANIA
                COSTA DE MARFIL
                CURAZAO
                ECUADOR
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
                                                @if ( $Apuesta->E1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E1_GolEqui1 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E1_GolEqui2 }}</strong>&nbsp;&nbsp;Curazao
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Curazao.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->E1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Cmarfil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E2_GolEqui1 }}</strong>&nbsp;&nbsp;Costa de marfil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E2_GolEqui2 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->E2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E3_GolEqui1 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E3_GolEqui2 }}</strong>&nbsp;&nbsp;Costa de marfil
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Cmarfil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->E3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                 @if ( $Apuesta->E4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Curazao.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E4_GolEqui1 }}</strong>&nbsp;&nbsp;Curazao
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E4_GolEqui2 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>
                                            <td>
                                                @if ( $Apuesta->E4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                        </tr>    
                                       <tr>
                                           <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ecuador.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E5_GolEqui1 }}</strong>&nbsp;&nbsp;Ecuador
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E5_GolEqui2 }}</strong>&nbsp;&nbsp;Alemania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->E5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Curazao.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E6_GolEqui1 }}</strong>&nbsp;&nbsp;Curazao
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E6_GolEqui2 }}</strong>&nbsp;&nbsp;Costa de marfil
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Cmarfil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->E6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/E/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO F --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO F
        </div>
        <!-- GRUPO F
            PAISES BAJOS
            JAPON
            SUECIA
            TUNEZ
    
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
                                                @if ( $Apuesta->F1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F1_GolEqui1 }}</strong>&nbsp;&nbsp;Paises bajos
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F1_GolEqui2 }}</strong>&nbsp;&nbsp;Japon
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>                                                  
                                            <td>
                                                @if ( $Apuesta->F1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F2_GolEqui1 }}</strong>&nbsp;&nbsp;Suecia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F2_GolEqui2 }}</strong>&nbsp;&nbsp;Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->F2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F3_GolEqui1 }}</strong>&nbsp;&nbsp;Japon
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F3_GolEqui2 }}</strong>&nbsp;&nbsp;Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>  
                                            <td>
                                                @if ( $Apuesta->F3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                     
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F4_GolEqui1 }}</strong>&nbsp;&nbsp;Paises bajos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F4_GolEqui2 }}</strong>&nbsp;&nbsp;Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->F4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F5_GolEqui1 }}</strong>&nbsp;&nbsp;Tunez 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F5_GolEqui2 }}</strong>&nbsp;&nbsp;Paises bajos
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Holanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->F5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                  
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F6_GolEqui1 }}</strong>&nbsp;&nbsp;Japon 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F6_GolEqui2 }}</strong>&nbsp;&nbsp;Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->F6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/F/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO G--}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO G
        </div>
        <!--
            GRUPO G
                Belgica
                Egipto
                Iran
                Nueva zelanda


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
                                                @if ( $Apuesta->G1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G1_GolEqui1 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G1_GolEqui2 }}</strong>&nbsp;&nbsp;Egipto
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td> 
                                            <td>
                                                @if ( $Apuesta->G1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G2_GolEqui1 }}</strong>&nbsp;&nbsp;Iran
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G2_GolEqui2 }}</strong>&nbsp;&nbsp;Nueva zelanda
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Nzelanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td> 
                                            <td>
                                                @if ( $Apuesta->G2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                          
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G3_GolEqui1 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G3_GolEqui2 }}</strong>&nbsp;&nbsp;Iran
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->G3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G4_GolEqui1 }}</strong>&nbsp;&nbsp;Egipto
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G4_GolEqui2 }}</strong>&nbsp;&nbsp;Nueva zelanda
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Nzelanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->G4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Nzelanda.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G5_GolEqui1 }}</strong>&nbsp;&nbsp;Nueva zelanda
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G5_GolEqui2 }}</strong>&nbsp;&nbsp;Belgica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->G5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                  
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G6_GolEqui1 }}</strong>&nbsp;&nbsp;Egipto
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G6_GolEqui2 }}</strong>&nbsp;&nbsp;Iran
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>          
                                            <td>
                                                @if ( $Apuesta->G6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/G/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO H --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO H
        </div>
        <!--
            GRUPO H
                España
                arabia saudita
                URUGUAY
                cabo verde

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
                                                @if ( $Apuesta->H1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H1_GolEqui1 }}</strong>&nbsp;&nbsp;Espana
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H1_GolEqui2 }}</strong>&nbsp;&nbsp;Cabo verde
                                            </td>
                                            <td>
                                                <img src="/images/banderas/CaboVerde.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->H1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/ASaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H2_GolEqui1 }}</strong>&nbsp;&nbsp;Arabia saudita
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H2_GolEqui2 }}</strong>&nbsp;&nbsp;Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->H2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H3_GolEqui1 }}</strong>&nbsp;&nbsp;España
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H3_GolEqui2 }}</strong>&nbsp;&nbsp;Arabia saudita
                                            </td>
                                            <td>
                                                <img src="/images/banderas/ASaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->H3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/CaboVerde.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H4_GolEqui1 }}</strong>&nbsp;&nbsp;Cabo verde
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H4_GolEqui2 }}</strong>&nbsp;&nbsp;Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->H4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uruguay.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H5_GolEqui1 }}</strong>&nbsp;&nbsp;Uruguay 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H5_GolEqui2 }}</strong>&nbsp;&nbsp;España
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->H5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/CaboVerde.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H6_GolEqui1 }}</strong>&nbsp;&nbsp;Cabo verde 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H6_GolEqui2 }}</strong>&nbsp;&nbsp;Arabia saudita
                                            </td>
                                            <td>
                                                <img src="/images/banderas/ASaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->H6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/H/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO I --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO I
        </div>
        <!--
            GRUPO I
                Francia
                Senegal
                Irak
                Noruega

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
                                                @if ( $Apuesta->I1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I1_GolEqui1 }}</strong>&nbsp;&nbsp;Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I1_GolEqui2 }}</strong>&nbsp;&nbsp;Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->I1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Irak.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I2_GolEqui1 }}</strong>&nbsp;&nbsp;Irak
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I2_GolEqui2 }}</strong>&nbsp;&nbsp;Noruega
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Noruega.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->I2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I3_GolEqui1 }}</strong>&nbsp;&nbsp;Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I3_GolEqui2 }}</strong>&nbsp;&nbsp;Irak
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Irak.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->I3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Noruega.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I4_GolEqui1 }}</strong>&nbsp;&nbsp;Noruega
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I4_GolEqui2 }}</strong>&nbsp;&nbsp;Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->I4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Noruega.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I5_GolEqui1 }}</strong>&nbsp;&nbsp;Noruega 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I5_GolEqui2 }}</strong>&nbsp;&nbsp;Francia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->I5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I6_GolEqui1 }}</strong>&nbsp;&nbsp;Senegal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_I6_GolEqui2 }}</strong>&nbsp;&nbsp;Irak
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Irak.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->I6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/I/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->I6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/I/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO J --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO J
        </div>
        <!--
            GRUPO J
                ARGENTINA
                JORDANIA
                AUSTRIA
                ARGELIA

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
                                                @if ( $Apuesta->J1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Austria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J1_GolEqui1 }}</strong>&nbsp;&nbsp;Austria
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J1_GolEqui2 }}</strong>&nbsp;&nbsp;Jordania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Jordania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->J1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J2_GolEqui1 }}</strong>&nbsp;&nbsp;Argentina
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J2_GolEqui2 }}</strong>&nbsp;&nbsp;Argelia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argelia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->J2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J3_GolEqui1 }}</strong>&nbsp;&nbsp;Argentina
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J3_GolEqui2 }}</strong>&nbsp;&nbsp;Austria
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Austria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->J3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Jordania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J4_GolEqui1 }}</strong>&nbsp;&nbsp;Jordania
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J4_GolEqui2 }}</strong>&nbsp;&nbsp;Argelia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argelia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->J4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Jordania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J5_GolEqui1 }}</strong>&nbsp;&nbsp;Jordania 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J5_GolEqui2 }}</strong>&nbsp;&nbsp;Argentina
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->J5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Argelia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J6_GolEqui1 }}</strong>&nbsp;&nbsp;Argelia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_J6_GolEqui2 }}</strong>&nbsp;&nbsp;Austria
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Austria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->J6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/J/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->J6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/J/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO K --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO K
        </div>
        <!--
            GRUPO K
                pORTUGAL
                CONGO
                UZBEKISTAN
                COLOMBIA

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
                                                @if ( $Apuesta->K1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K1_GolEqui1 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K1_GolEqui2 }}</strong>&nbsp;&nbsp;Congo
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Congo.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->K1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uzbekistan.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K2_GolEqui1 }}</strong>&nbsp;&nbsp;Uzbekistan
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K2_GolEqui2 }}</strong>&nbsp;&nbsp;Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->K2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K3_GolEqui1 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K3_GolEqui2 }}</strong>&nbsp;&nbsp;Uzbekistan
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uzbekistan.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->K3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Congo.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K4_GolEqui1 }}</strong>&nbsp;&nbsp;Congo
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K4_GolEqui2 }}</strong>&nbsp;&nbsp;Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->K4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K5_GolEqui1 }}</strong>&nbsp;&nbsp;Colombia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K5_GolEqui2 }}</strong>&nbsp;&nbsp;Portugal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->K5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Congo.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K6_GolEqui1 }}</strong>&nbsp;&nbsp;Congo
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_K6_GolEqui2 }}</strong>&nbsp;&nbsp;Uzbekistan
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Uzbekistan.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->K6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/K/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->K6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/K/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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
{{-- GRUPO L --}}
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            GRUPO L
        </div>
        <!--
            GRUPO L
                INGLATERRA
                CROACIA
                GHANA
                PANAMA

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
                                                @if ( $Apuesta->L1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L1_GolEqui1 }}</strong>&nbsp;&nbsp;Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L1_GolEqui2 }}</strong>&nbsp;&nbsp;Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->L1 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/1" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                        
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L2_GolEqui1 }}</strong>&nbsp;&nbsp;Ghana
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L2_GolEqui2 }}</strong>&nbsp;&nbsp;Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->L2 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/2" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L3_GolEqui1 }}</strong>&nbsp;&nbsp;Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L3_GolEqui2 }}</strong>&nbsp;&nbsp;Ghana
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>    
                                            <td>
                                                @if ( $Apuesta->L3 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/3" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                            
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L4_GolEqui1 }}</strong>&nbsp;&nbsp;Croacia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L4_GolEqui2 }}</strong>&nbsp;&nbsp;Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>     
                                            <td>
                                                @if ( $Apuesta->L4 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/4" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                           
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L5_GolEqui1 }}</strong>&nbsp;&nbsp;Panama 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L5_GolEqui2 }}</strong>&nbsp;&nbsp;Inglaterra
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>         
                                            <td>
                                                @if ( $Apuesta->L5 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/5" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
                                                @endif
                                            </td>                                                                                       
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L6_GolEqui1 }}</strong>&nbsp;&nbsp;Croacia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_L6_GolEqui2 }}</strong>&nbsp;&nbsp;Ghana
                                            </td>
                                            <td>
                                                <img src="/images/banderas/Ghana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->L6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/L/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Master" title="Modificar Master"></button> 
                                            </td>   
                                            <td>
                                                @if ( $Apuesta->L6 != NULL )
                                                    <button value="{{ $Apuesta -> id }}/L/6" Onclick='Eliminar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEliminarMaster'><img src="/images/eliminar.png" width="25" height="25" alt="Modificar Master" title="Modificar Master" style="margin-top:-5px;"></button>
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