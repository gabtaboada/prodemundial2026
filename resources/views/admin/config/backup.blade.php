@extends('layouts.admin')

@section('content')
	<div class="row">	
		@include('admin.alerts.success')
		@include('admin.alerts.errors')
	</div>	
	<div class="row">	
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:#0ec731"> 
                            	Realizar back up
                            </h4>
                        </div>

	            <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="table-responsive">
                            	<div class="form-group" >
								<p>
									Si desea realizar una copia de seguridad de la base de datos, por favor haga click 
									<a href="{!!URL::to('/superadmin/descargarBackUp')!!}" style="text-decoration:none;">aca</a>
									</p>

								
								</div>
								

							</div>
						</div>
		</div>
	</div>			
@endsection