<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DateTime;
use Auth;
use Carbon\Carbon;
use JavaScript;
use App\Models\Master;
use App\Models\Participantes;
use App\Models\UltimosResultados;
use App\Models\Aciertos;
use App\Models\GrupoA;
use App\Models\GrupoB;
use App\Models\GrupoC;
use App\Models\GrupoD;
use App\Models\GrupoE;
use App\Models\GrupoF;
use App\Models\GrupoG;
use App\Models\GrupoH;

class PosicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       if  (trim($request->get('nombre')) != null) 
        {  
               $Posiciones = Participantes::Posiciones($request->get('nombre'))
                ->join('aciertos','aciertos.APart_id','=','participantes.id')
                ->select('aciertos.CantidadAciertos','participantes.*','aciertos.ac_Posicion')
                ->orderBy('aciertos.ac_Posicion','ASC')
                ->where('aciertos.deleted_at',null)
                ->where('aciertos.CantidadAciertos','>=',0)                
                ->paginate(25);    
        }  
        else
        {        
            $Posiciones = Participantes::select('aciertos.CantidadAciertos','aciertos.ac_Posicion','participantes.*')
                ->join('aciertos','aciertos.APart_id','=','participantes.id')
                ->where('aciertos.deleted_at',null)
                ->where('aciertos.CantidadAciertos','>=',0)
                ->orderBy('aciertos.ac_Posicion','ASC')
                ->paginate(25);
              //  dd($Posiciones);
        }
       // dd($Posiciones);
        return view('front.posiciones',compact('Posiciones'));
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
