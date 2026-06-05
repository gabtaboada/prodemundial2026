<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de gestion de inscripciones</title>

    {!!Html::style('css/boostrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/bootstrap-theme.min.css')!!}
    
    {!!Html::style('css/bootstrap-standalone.css')!!}    
    {!!Html::style('css/bootstrap-switch.css')!!} 


   
    @section('css')
    @show
<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon2-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon2-16x16.png">

<!--favicon fin-->
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{!!URL::to('admin/inicio')!!}">
                            Prode amigos mundial 2018
                        </a>  
                            
                    </div>
            
         
<ul class="nav navbar-top-links navbar-right">
      <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        {!!Auth::user()->apellido!!} {!!Auth::user()->name!!}
                        &nbsp;&nbsp;

                           <span class="avatar current"><img src="../images/user50.png" alt="{!!Auth::user()->apellido!!} {!!Auth::user()->name!!}" title="{!!Auth::user()->apellido!!} {!!Auth::user()->name!!}" style="border-radius: 50%;" width="40" height="40" ></span>
                        <i class="fa fa-caret-down"></i> 
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{!!URL::to('/usuario/perfil')!!}"><i class="fa fa-user fa-fw"></i>  Perfil</a>
                            
                        </li>
                        
                        <li class="divider"></li>
                                            
                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesión</a>
                        </li>
                    </ul>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
</ul>



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                                <li>
                                    <a href="{!!URL::to('admin/inicio')!!}"><i class="fa fa-home fa-fw"></i> Inicio<span class="fa arrow"></span></a>

                                </li> 
                                <li>
                                    <a href="#"><i class="fa fa-trophy fa-fw"></i> Master<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/admin/master')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver master</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/admin/master/actualizarAciertos')!!}"><i class='fa fa-refresh fa-fw'></i> Actualizar Aciertos</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li>
                                        
                                    <a href="#"><i class="fa fa-users fa-fw"></i> Participantes<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                       
                                        <li>
                                            <a href="{!!URL::to('/admin/participantes')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver participantes</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/admin/participantes/create')!!}"><i class='fa fa-plus fa-fw'></i> Alta participantes</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/admin/GrupoAmigos')!!}"><i class='fa fa-plus fa-fw'></i>Grupo Amigos</a>
                                        </li>                                                                
                                    </ul>
                                </li>     
                                <li>
                                        
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                       
                                        <li>
                                            <a href="{!!URL::to('/admin/usuarios')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver usuarios</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/admin/usuarios/create')!!}"><i class='fa fa-plus fa-fw'></i> Alta usuarios</a>
                                        </li>
                                                                
                                    </ul>
                                </li>                           
                                <li>
                                        
                                    <a href="#"><i class="fa fa-cog fa-fw"></i> SuperAdmin<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                       
                                        <li>
                                            <a href="{!!URL::to('/admin/HabilitarDeshabilitar/carga')!!}"><i class='fa fa-power-off fa-fw'></i> Carga OnLine</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/admin/Superadmin/backUp')!!}"><i class='fa fa-power-off fa-fw'></i> Realizar backup</a>
                                        </li>

                                                                
                                    </ul>
                                </li>                                                                            

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
             @yield('content')


             @if(Session::get('navegador') != "CHROME")
                <p style="margin-top:20px;"> Para una visualización correcta del sistema, recomendamos el uso de google chrome. Si no lo tiene instalado puede descargarlo 
                    <a href="https://www.google.com.mx/intl/es-419/chrome/browser/features.html?brand=CHBD&gclid=Cj0KCQjwnubLBRC_ARIsAASsNNmP9EE-QGMPfCc0lNgAQjJ87UO4gl3DWWs0CWR3VC2VQvW3iYJfNtIaAhWFEALw_wcB&dclid=CLeusbeMqtUCFUsRkQodglsHMg" style="text-decoration:none;" target="_blank">
                      
                        aca
                    </a>
                </p>
            @endif   
        </div>

    </div>
    

    
    {!!Html::script('{{ asset('js/') }}jquery.min.js')!!}
    {!!Html::script('{{ asset('js/') }}bootstrap.min.js')!!}
    {!!Html::script('{{ asset('js/') }}metisMenu.min.js')!!}
    {!!Html::script('{{ asset('js/') }}sb-admin-2.js')!!}
 
    @section('scripts')
    @show
    <script>

    </script>           
</body>

</html>