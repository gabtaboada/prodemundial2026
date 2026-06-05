<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Prode de amigos :: Login
    </title>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]
-->
    <link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

<!--
    <link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
-->
<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon2-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon2-16x16.png">

<!--favicon fin-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">

                        @include('admin.alerts.errors')

                        <h3 class="panel-title">
                            Administrador Prode de amigos
                        </h3>
                    </div>
                    <div class="panel-body">

                        <form action="{{ route('login.store') }}" method="POST">{{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                 <div class="form-group">
                                        <!--<label for="correo">Correo:</label>-->   
                                        <label for="correo"> Email:</label>
                                      
                                        <input type="email" name="email" value="{{ old('email') }}">
                                        
                                </div>
                                <div class="form-group">
                                    <!--<label for="contrasena">Contraseña:</label>-->
                                    <!--<input type="password" name="password">-->
                                    <label for="contrasena">Password :</label>      
                                    <input type="password" name="password">
                                    
                                </div>

                                <button type="submit">Ingresar</button>

                        </form>
                        
                        <p style="margin-top:10px;">
                        {!!url('password/email', $title = 'Olvidaste tu contraseña?', $attributes = null, $secure = null)!!}    
                        </p>
                    </div>

                </div>
  
            </div>

        </div>
            @if(Session::get('navegador') != "CHROME")
                <p>  Para una visualización correcta del sistema, recomendamos el uso de google chrome. Si no lo tiene instalado puede descargarlo  
                    <a href="https://www.google.com.mx/intl/es-419/chrome/browser/features.html?brand=CHBD&gclid=Cj0KCQjwnubLBRC_ARIsAASsNNmP9EE-QGMPfCc0lNgAQjJ87UO4gl3DWWs0CWR3VC2VQvW3iYJfNtIaAhWFEALw_wcB&dclid=CLeusbeMqtUCFUsRkQodglsHMg" style="text-decoration:none;" target="_blank">
                        aqui
                    </a></p>
            @endif    
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>    
    <script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>    

</body>

</html>
