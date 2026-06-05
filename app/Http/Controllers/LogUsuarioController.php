<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Http\Requests\LogUsuarioRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
//use Redirect;
use App\Models\GrupoAmigos;


class LogUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('front.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        //if( Auth::attempt(['email' => $request['email'], 'password' => $request['password']] )     )
            if( Auth::guard('participantes')->attempt(['email' => $request['email'], 'password' => $request['password']] ) )
        {
            
         
           //return Redirect::to('http://www.google.com.ar'); 
            $UrlEnviar ="";
            Session(['urlAdmin' => $UrlEnviar]);  

            //$Grupos = Auth::user()->grupo_amigos_id;
            $Grupos = Auth::guard('participantes')->user()->grupo_amigos_id;
            Session(['DreamTeam' => 0 ]);  
            Session(['Intocables' => 0 ]);            
            if($Grupos!="0")//Si es distinto de 0, separo los valores
            {
                $separado_por_comas = explode ("*", $Grupos);
                $CantidadArray = count($separado_por_comas);
                $j=0;
                for ($i=1;$i<$CantidadArray;$i++)
                    {
                        $AuxGrupoSeleccionado = GrupoAmigos::find($separado_por_comas[$i]);
                        if( $AuxGrupoSeleccionado->Grupo_amigos == "Dream Team")
                        {
                            Session(['DreamTeam' => 1 ]);  
                        }
                        if( $AuxGrupoSeleccionado->Grupo_amigos == "Intocables")
                        {
                            Session(['Intocables' => 1 ]);
                        }   
                        if( $AuxGrupoSeleccionado->Grupo_amigos == "Gflow")
                        {
                            Session(['Gflow' => 1 ]);
                        }   
                    }
            }
            else
            {//Si es 0 es xq no tiene Grupos
                Session(['DreamTeam' => 0 ]);  
                Session(['Intocables' => 0 ]);
            }              
           // dd(Session('DreamTeam'));
           // Session::set('Usuario', 8);  
            return Redirect::to('/'); /// ORIGINAL
        }
        else
        {
            Session::flash('message-error','Los datos Son incorrectos');
            return Redirect::to('/IngresarUsuario'); 
        }     
    }
public function logoutUsuario(){
    Auth::guard('participantes')->logout();
    return Redirect::to('/'); 
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
