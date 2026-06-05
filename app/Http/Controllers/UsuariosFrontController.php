<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Models\Http\Requests\UsuariosCreateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Participantes;
use App\Models\Aciertos;
use App\Models\Flags;
use Mail;


class UsuariosFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $HabilitadoParaCargar = Flags::select('bandera','estado')
        ->where('bandera','HabilitarCarga')
        ->get();

        //dd($HabilitadoParaCargar[0]->estado);
        $FlagCarga = $HabilitadoParaCargar[0]->estado;
        return view('front.user.create',compact('FlagCarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //public function store(Request $request)
    {
       // dd($request->all());
        $fromName  = 'Prode Amigos Mundial Rusia 2018';
        $fromEmail = $request['email'];

        Participantes::create($request->all());
        $ParticipanteId = DB::table('participantes')->max('id');
     
        Aciertos::create([
            'APart_id' =>  $ParticipanteId,
            'CantidadAciertos' => NULL,
        ]); 
      
        $data = array(
               'password' => $request->password,
            ); 
     
        Mail::send('emails.bienvenido',$data, function ($msj) use ($fromName,$fromEmail){
            $msj->subject('Prode Amigos Mundial Qatar 2022');
            $msj->to($fromEmail,$fromName);
        });
        
        Session::flash('message-error','Ha sido dado de alta');


        return Redirect::to('/IngresarUsuario');             
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
