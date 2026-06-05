<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Http\Requests\GrupoAmigosCreateRequest;

use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Participantes;
use App\Models\Apuestas;
use App\Models\Aciertos;
use App\Models\GrupoA;
use App\Models\GrupoB;
use App\Models\GrupoC;
use App\Models\GrupoD;
use App\Models\GrupoE;
use App\Models\GrupoF;
use App\Models\GrupoG;
use App\Models\GrupoH;
use App\Models\GrupoAmigos;

use Response;

class GrupoAmigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GrupoAmigos = GrupoAmigos::GrupoAmigosIndex();
        if(isset($GrupoAmigos))
        {
            //echo "vacio";
            foreach ($GrupoAmigos as $key => $value) {
                $VectorGrupoAmigos = Participantes::select('*')
                ->where('participantes.grupo_amigos_id','=',$GrupoAmigos[$key]->id)
                ->where('participantes.deleted_at','=',null)
                ->get();

                $cantidadVector = count($VectorGrupoAmigos);
                $GrupoAmigos[$key]->Cantidad = $cantidadVector;

            }
        }
        else
        {
            //echo "hay";
        }
        //dd($GrupoAmigos);
        return view('admin.grupoamigos.index',compact('GrupoAmigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grupoamigos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoAmigosCreateRequest $request)
    {
        GrupoAmigos::create($request->all());
        Session::flash('message','Grupo creado correctamente');
        return Redirect::to('/admin/GrupoAmigos');          
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
        return view('admin.grupoamigos.edit');
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
