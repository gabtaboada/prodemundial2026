<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Flags;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use Carbon\Carbon;

class FlagController extends Controller
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
    public function HabilitarDeshabilitar()
    {
        $flag = Flags::select('*')
        ->where('bandera','HabilitarCarga')
        ->get();

        $HabilitarCarga= $flag[0]->estado;
        //dd($HabilitarCarga);
        return view('admin.config.habilitarCarga',compact('HabilitarCarga'));
    }
    public function confirmarHabDeshabCarga(Request $request)
    {
        //echo " estado ".$request->EstadoCarga;
        $Estado = Flags::select('*')
        ->where('bandera','HabilitarCarga')
        ->get();

        //echo " ".$Estado[0]->bandera." ".$Estado[0]->estado;

        $Estado[0]->estado = $request->EstadoCarga;
        $Estado[0]->save();
        if($Estado[0]->save())
        {
            $mensaje = "exito";
            if( $request->EstadoCarga == 1 )
            {
                Session::flash('message','Quedo habilitada la carga online de las boletas');        
            }
            else
            {
                Session::flash('message','Quedo deshabilitada la carga online de las boletas');        
            }
            
        }
        else
        {
            $mensaje = "exito";
            Session::flash('message-error','Se produjo un error al guardar la petición');        
        }
        return response ()->json([$mensaje]); 
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
    public function store(Request $request)
    {
        //
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
