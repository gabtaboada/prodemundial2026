@extends('layouts.frontInicio')

@section('content')
    <!-- About us -->
    <div class="about-3">
        <h3 class="heading-agileinfo">Bienvenidos<span>Al prode de amigos del mundial 2026</span></h3>
        <div class="container">
            <div class="d-flex">

                <div class="about1">

                    <p>Bienvenidos a la página del prode del mundial 2026. Una idea que venimos haciendo, con Gabi hace
                        varios mundiales y tratamos de mejorarla mundial a mundial. La idea es hacer un poco mas divertido
                        algo que ya de por si nos apasiona.

                        Esperemos que les guste, que nos podamos divertir y por sobre todo salir CAMPEONES en tierras norteamericanas.

                        Saludos, Gracias por participar y buena suerte</p>

                </div>
                <div class="about2">

                </div>
            </div>

        </div>
    </div>
    <!-- //About us -->
    <!-- wthree-mid -->
    <div class="wthree-mid">
        <div class="container">
            <h3></h3>

        </div>
    </div>
    <!-- //wthree-mid -->

    <!-- ultimos resultados-->
<!-- ultimos resultados-->
<div class="donails">
    <div class="container">
        <h3 class="heading-agileinfo">Ultimos resultados</h3>

        <div class="col-md-6 donail_right">
            <div class="mwho-we-textmks">
                <div class="who-right-mainsmkits">
                        <?php
                            //dd($UltimosResultados)
                            ?>
                    @forelse ($UltimosResultados as $resultado)
                      
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{ $loop->index }}">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse{{ $loop->index }}"
                                        aria-expanded="false" aria-controls="collapse{{ $loop->index }}">

                                        {{ $resultado->Equipo1 }} Vs {{ $resultado->Equipo2 }}
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $loop->index }}" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading{{ $loop->index }}" aria-expanded="false">
                                <div class="panel-body panel_text">
                                    <div class="tabla-cel-responsive" style="margin-top:-50px;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="3"
                                                        style="color: #000;font-size: 18px;line-height: 68px;text-transform: uppercase;text-decoration: none;letter-spacing: 1px;text-align: center;font-family: 'PT Serif', serif;border-bottom: 2px solid #f14156;">
                                                        grupo {{ $resultado->Ur_grupo }}
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="font-size:20px;">
                                                    <td>
                                                        <img src="{{ $resultado->Bandera1 }}" alt="" title=""
                                                            style="border-radius: 50%;border: 1px solid #ddd;"
                                                            width="40" height="40">
                                                    </td>
                                                    <td>
                                                        <p style="margin-top:5px;font-size:16px;">{{ $resultado->Equipo1 }}</p>
                                                    </td>
                                                    <td>
                                                        <p style="margin-top:5px;font-size:16px;">
                                                            <strong>{{ $resultado->ur_GolesEq1 }}</strong>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr style="font-size:20px;">
                                                    <td>
                                                        <img src="{{ $resultado->Bandera2 }}" alt="" title=""
                                                            style="border-radius: 50%;border: 1px solid #ddd;"
                                                            width="40" height="40">
                                                    </td>
                                                    <td>
                                                        <p style="margin-top:5px;font-size:16px;">{{ $resultado->Equipo2 }}</p>
                                                    </td>
                                                    <td>
                                                        <p style="margin-top:5px;font-size:16px;">
                                                            <strong>{{ $resultado->ur_GolesEq2 }}</strong>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No hay resultados disponibles.</p>
                    @endforelse

                </div>
                <div class="clearfix"> </div>
                <div class="botton">
                    <a class="join-wthree" href="{!! URL::to('resultados') !!}">ver todos
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 donail_left"></div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- ultimos resultados-->
    <!-- ultmos resultados-->
    <!-- wthree-mid -->
    <div class="wthree-mid">
        <div class="container">
            <h3></h3>

        </div>
    </div>
    <!-- //wthree-mid -->
    <!-- Clients -->


    <div class="clients">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="heading-agileinfo">Ultimos ganadores</h3>
            </div>




            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="../FrontImages/nestorAriel.jpg" alt="" />
                            <p>Qatar 2022</p>
                            <div class="client">
                                <h5>Nestor Pavoni</h5>
                            </div>
                        </li>                        
                        <li>
                            <img src="../FrontImages/marcelo.jpg" alt="" />
                            <p>Rusia 2018</p>
                            <div class="client">
                                <h5>Marcelo Trimarchi</h5>
                            </div>
                        </li>
                        <li>
                            <img src="../FrontImages/nico.jpg" alt="" />
                            <p>Brasil 2014</p>
                            <div class="client">
                                <h5>Nicolas Ardanaz</h5>
                            </div>
                        </li>
                        <li>
                            <img src="../FrontImages/ariel.jpg" alt="" />
                            <p>Brasil 2014</p>
                            <div class="client">
                                <h5>Ariel López</h5>
                            </div>
                        </li>
                        <li>
                            <img src="../FrontImages/gabriel.jpg" alt="" />
                            <p>Sudafrica 2010</p>
                            <div class="client">
                                <h5>Gabriel Taboada</h5>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>

        </div>
    </div>
    <!-- //Clients -->
@endsection
@section('scripts')
    <script src="{{ asset('js/ScriptRedireccionar.js') }}"></script>
@endsection
