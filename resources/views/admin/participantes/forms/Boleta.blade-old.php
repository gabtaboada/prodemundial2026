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
                                        </tr>
                                    </thead>
          
                                    <tbody>
                                        <tr>
                                            <td   style="padding-top:13px">
                                            	@if ( $Apuesta->A1 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>	
                                            <td style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Apuesta -> Par_A1_GolEqui1 }}</strong>&nbsp; &nbsp;Rusia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                            
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                            	<strong>{{ $Apuesta -> Par_A1_GolEqui2 }}</strong>&nbsp; &nbsp;A. Saudita
                                            </td>
                                            <td>
                                            	<img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td  style="padding-top:13px">
                                                @if ( $Apuesta->A1 == "V")  
                                                     <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif                                               
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/A/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A2_GolEqui1 }}</strong>&nbsp; &nbsp;Egipto
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A2_GolEqui2 }}</strong>&nbsp; &nbsp;Uruguay
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A3_GolEqui1 }}</strong>&nbsp; &nbsp;Rusia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A3_GolEqui2 }}</strong>&nbsp; &nbsp;Egipto
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                            
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A4_GolEqui1 }}</strong>&nbsp; &nbsp;Uruguay
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A4_GolEqui2 }}</strong>&nbsp; &nbsp;A. Saudita
                                            </td>
                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                            
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/uru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A5_GolEqui1 }}</strong>&nbsp; &nbsp;Uruguay
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A5_GolEqui2 }}</strong>&nbsp; &nbsp;Rusia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/rusia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                            
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/aSaudita.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A6_GolEqui1 }}</strong>&nbsp; &nbsp;A. Saudita
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_A6_GolEqui2 }}</strong>&nbsp; &nbsp;Egipto
                                            </td>
                                            <td>
                                                <img src="/images/banderas/egipto.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->A6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                               <button value="{{ $Apuesta -> id }}/A/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                               <strong>{{ $Apuesta -> Par_B1_GolEqui1 }}</strong>&nbsp; &nbsp; Marruecos 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B1_GolEqui2 }}</strong>&nbsp; &nbsp; Iran
                                            </td>                                            
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B2_GolEqui1 }}</strong>&nbsp; &nbsp; Portugal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B2_GolEqui2 }}</strong>&nbsp; &nbsp; España
                                                
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  

                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B3_GolEqui1 }}</strong>&nbsp; &nbsp; Portugal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B3_GolEqui2 }}</strong>&nbsp; &nbsp; Marruecos
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B4_GolEqui1 }}</strong>&nbsp; &nbsp; Iran 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B4_GolEqui2 }}</strong>&nbsp; &nbsp; España
                                               
                                            </td>                                            
                                            <td >
                                                 <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/iran.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B5_GolEqui1 }}</strong>&nbsp; &nbsp; Iran 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B5_GolEqui2 }}</strong>&nbsp; &nbsp; Portugal
                                             
                                            </td>                                            
                                            <td >
                                                   <img src="/images/banderas/portugal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/espana.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B6_GolEqui1 }}</strong>&nbsp; &nbsp; España 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_B6_GolEqui2 }}</strong>&nbsp; &nbsp; Marruecos
                                             
                                            </td>                                            
                                            <td >
                                                <img src="/images/banderas/marruecos.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->B6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/B/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C1_GolEqui1 }}</strong>&nbsp; &nbsp; Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C1_GolEqui2 }}</strong>&nbsp; &nbsp; Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>                                        
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>      
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C2_GolEqui1 }}</strong>&nbsp; &nbsp; Peru
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                               <strong>{{ $Apuesta -> Par_C2_GolEqui2 }}</strong>&nbsp; &nbsp;  Dinamarca
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C3_GolEqui1 }}</strong>&nbsp; &nbsp; Dinamarca
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C3_GolEqui2 }}</strong>&nbsp; &nbsp; Australia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>    
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>

                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                               <strong>{{ $Apuesta -> Par_C4_GolEqui1 }}</strong>&nbsp; &nbsp;Francia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C4_GolEqui2 }}</strong>&nbsp; &nbsp; Peru
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                      
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/dinamarca.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C5_GolEqui1 }}</strong>&nbsp; &nbsp; Dinamarca
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C5_GolEqui2 }}</strong>&nbsp; &nbsp; Francia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/francia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/australia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C6_GolEqui1 }}</strong>&nbsp; &nbsp; Australia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_C6_GolEqui2 }}</strong>&nbsp; &nbsp; Peru
                                            </td>
                                            <td>
                                                <img src="/images/banderas/peru.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->C6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/C/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D1_GolEqui1 }}</strong>&nbsp; &nbsp; Argentina 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D1_GolEqui2 }}</strong>&nbsp; &nbsp; Islandia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D2_GolEqui1 }}</strong>&nbsp; &nbsp; Croacia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D2_GolEqui2 }}</strong>&nbsp; &nbsp; Nigeria
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D3_GolEqui1 }}</strong>&nbsp; &nbsp; Argentina 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D3_GolEqui2 }}</strong>&nbsp; &nbsp; Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D4_GolEqui1 }}</strong>&nbsp; &nbsp; Nigeria 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                     
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D4_GolEqui2 }}</strong>&nbsp; &nbsp; Islandia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                   
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/nigeria.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D5_GolEqui1 }}</strong>&nbsp; &nbsp; Nigeria 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D5_GolEqui2 }}</strong>&nbsp; &nbsp; Argentina
                                            </td>
                                            <td>
                                                <img src="/images/banderas/argentina.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/islandia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D6_GolEqui1 }}</strong>&nbsp; &nbsp; Islandia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_D6_GolEqui2 }}</strong>&nbsp; &nbsp; Croacia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/croacia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->D6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/D/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E1_GolEqui1 }}</strong>&nbsp; &nbsp; Costa rica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E1_GolEqui2 }}</strong>&nbsp; &nbsp; Serbia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E2_GolEqui1 }}</strong>&nbsp; &nbsp; Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E2_GolEqui2 }}</strong>&nbsp; &nbsp; Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E3_GolEqui1 }}</strong>&nbsp; &nbsp; Brasil
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E3_GolEqui2 }}</strong>&nbsp; &nbsp; Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                 @if ( $Apuesta->E4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E4_GolEqui1 }}</strong>&nbsp; &nbsp; Serbia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E4_GolEqui2 }}</strong>&nbsp; &nbsp; Suiza
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>    
                                       <tr>
                                           <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/serbia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E5_GolEqui1 }}</strong>&nbsp; &nbsp; Serbia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E5_GolEqui2 }}</strong>&nbsp; &nbsp; Brasil
                                            </td>
                                            <td>
                                                <img src="/images/banderas/brasil.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suiza.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E6_GolEqui1 }}</strong>&nbsp; &nbsp; Suiza
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_E6_GolEqui2 }}</strong>&nbsp; &nbsp; Costa rica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/costarica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->E6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/E/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F1_GolEqui1 }}</strong>&nbsp; &nbsp; Alemania 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F1_GolEqui2 }}</strong>&nbsp; &nbsp; Mexico
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F2_GolEqui1 }}</strong>&nbsp; &nbsp; Suecia 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F2_GolEqui2 }}</strong>&nbsp; &nbsp; Corea
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F3_GolEqui1 }}</strong>&nbsp; &nbsp; Alemania 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F3_GolEqui2 }}</strong>&nbsp; &nbsp; Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F4_GolEqui1 }}</strong>&nbsp; &nbsp; Corea 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                       
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F4_GolEqui2 }}</strong>&nbsp; &nbsp; Mexico
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                 
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/corea.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F5_GolEqui1 }}</strong>&nbsp; &nbsp; Corea 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F5_GolEqui2 }}</strong>&nbsp; &nbsp; Alemania
                                            </td>
                                            <td>
                                                <img src="/images/banderas/alemania.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                  
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/mexico.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F6_GolEqui1 }}</strong>&nbsp; &nbsp; Mexico 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_F6_GolEqui2 }}</strong>&nbsp; &nbsp; Suecia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/suecia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->F6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/F/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G1_GolEqui1 }}</strong>&nbsp; &nbsp; Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td  style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G1_GolEqui2 }}</strong>&nbsp; &nbsp; Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G2_GolEqui1 }}</strong>&nbsp; &nbsp; Tunez
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G2_GolEqui2 }}</strong>&nbsp; &nbsp; Inglaterra
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G3_GolEqui1 }}</strong>&nbsp; &nbsp; Belgica
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G3_GolEqui2 }}</strong>&nbsp; &nbsp; Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G4_GolEqui1 }}</strong>&nbsp; &nbsp; Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G4_GolEqui2 }}</strong>&nbsp; &nbsp; Panama
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>    
                                       <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/inglaterra.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G5_GolEqui1 }}</strong>&nbsp; &nbsp; Inglaterra
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G5_GolEqui2 }}</strong>&nbsp; &nbsp; Belgica
                                            </td>
                                            <td>
                                                <img src="/images/banderas/belgica.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->G5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                               
                                        </tr>                                                        
                                       <tr>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/panama.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>   
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G6_GolEqui1 }}</strong>&nbsp; &nbsp; Panama
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_G6_GolEqui2 }}</strong>&nbsp; &nbsp; Tunez
                                            </td>
                                            <td>
                                                <img src="/images/banderas/tunez.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>
                                            <td style="padding-top:13px">
                                                  @if ( $Apuesta->G6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/G/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H1_GolEqui1 }}</strong>&nbsp; &nbsp; Colombia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H1 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H1_GolEqui2 }}</strong>&nbsp; &nbsp; Japon
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H1 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/1" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                 
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H2_GolEqui1 }}</strong>&nbsp; &nbsp; Polonia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                        
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H2_GolEqui2 }}</strong>&nbsp; &nbsp; Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H2 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/2" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                 
                                        </tr>
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H3_GolEqui1 }}</strong>&nbsp; &nbsp; Japon
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H3_GolEqui2 }}</strong>&nbsp; &nbsp; Senegal
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H3 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/3" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                 
                                        </tr> 
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H4_GolEqui1 }}</strong>&nbsp; &nbsp; Polonia
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                      
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H4_GolEqui2 }}</strong>&nbsp; &nbsp; Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                                  
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H4 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/4" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                 
                                         </tr>   
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/japon.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H5_GolEqui1 }}</strong>&nbsp; &nbsp; Japon 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                          
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H5_GolEqui2 }}</strong>&nbsp; &nbsp; Polonia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/polonia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                              
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H5 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/5" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
                                            </td>                                                 
                                        </tr>                                             
                                        <tr>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "L")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/images/banderas/senegal.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                            
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H6_GolEqui1 }}</strong>&nbsp; &nbsp; Senegal 
                                            </td>
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "E")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                         
                                            <td style="padding-top:13px;font-size:15px;">
                                                <strong>{{ $Apuesta -> Par_H6_GolEqui2 }}</strong>&nbsp; &nbsp; Colombia
                                            </td>
                                            <td>
                                                <img src="/images/banderas/colombia.png" alt="" title="" style="border-radius: 50%;" width="30" height="30" >
                                            </td>                                               
                                            <td style="padding-top:13px">
                                                @if ( $Apuesta->H6 == "V")  
                                                    <img src="/images/cruz.png" alt="" title=""  width="19" height="21" >
                                                @endif
                                            </td>
                                            <td>
                                                <button value="{{ $Apuesta -> id }}/H/6" Onclick='Modificar(this);'  class='btn btn-link ' data-toggle='modal' data-target='#ModalEditarApuesta'><img src="/images/edit.png" width="20" height="20" alt="Modificar Apuesta" title="Modificar Apuesta"></button> 
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