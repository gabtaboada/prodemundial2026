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
    {!!Html::style('{{ asset('') }}boostrap.min.css')!!}
    {!!Html::style('{{ asset('') }}metisMenu.min.css')!!}
    {!!Html::style('{{ asset('') }}sb-admin.css')!!}
    {!!Html::style('{{ asset('') }}sb-admin-2.css')!!}
    {!!Html::style('{{ asset('') }}font-awesome.min.css')!!}

<!--
    {!!Html::style('css/boostrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
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

                        {!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                 <div class="form-group">
                                        <!--{!!Form::label('correo','Correo:')!!}-->   
                                        {!!Form::label('correo',' Email:')!!}
                                      
                                        {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email'])!!}
                                        
                                </div>
                                <div class="form-group">
                                    <!--{!!Form::label('contrasena','Contraseña:')!!}-->
                                    <!--{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}-->
                                    {!!Form::label('contrasena','Password :')!!}      
                                    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña'])!!}
                                    
                                </div>

                                {!!Form::submit('Ingresar',['class'=>'btn btn-lg btn-success btn-block'])!!}

                        {!!Form::close()!!}
                        
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

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}    
    {!!Html::script('js/ScriptRedireccionar.js')!!}    

</body>

</html>
