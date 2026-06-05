<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Http\Requests\ParticiCreateRequest;
use App\Models\Http\Requests\ParticiUpdateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Participantes;
use App\Models\GrupoAmigos;
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

use Response;
class GflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct (){

        $this->middleware('auth');
 
        if( Auth::administrador()->get())
        {
            //return('admin');
            $this->middleware('admin'); 
        }
        

        if( Auth::participantes()->get())
        {
            //$this->middleware('participantes'); 
            //return Redirect::to('/');       
        }       
           // $this->beforeFilter('@find',['only' =>['edit', 'update','destroy'] ]);


    }        
    public function index()
    {
        if( Session('Gflow') == 0 )
            {   
                return Redirect::to('/inicio');   
            }             
        $Posiciones = Participantes::select('aciertos.CantidadAciertos','aciertos.ac_Posicion','participantes.*')
                ->join('aciertos','aciertos.APart_id','=','participantes.id')
                ->where('participantes.grupo_amigos_id','LIKE','%7%')// ID DREAM TEAM 5 
                ->where('aciertos.deleted_at',null)
                ->where('aciertos.CantidadAciertos','>=',0)
                ->orderBy('aciertos.ac_Posicion','ASC')
                ->get();     

        if ( !isset($Posiciones[0]) )
        {
            $Participantes = Participantes::select('participantes.*','aciertos.CantidadAciertos')
            ->join('aciertos','aciertos.APart_id','=','participantes.id')
            ->where('participantes.grupo_amigos_id','LIKE','%7%')// ID DREAM TEAM 5 
            ->where('participantes.deleted_at',null)
            ->orderBy('par_apellido','ASC')
            ->paginate(25); 

            $Posiciones =NULL;
        }
        else
        {
            $Participantes = NULL;
            $contador=1;
            foreach ($Posiciones as $key => $value) {
                $Posiciones[$key]->ac_Posicion = $contador;
                $contador++;
            }
        }

        return view('front.grupos.gflow',compact('Posiciones','Participantes'));
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
