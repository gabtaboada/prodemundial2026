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
use App\Models\Apuestas;
use App\Models\GrupoA;
use App\Models\GrupoB;
use App\Models\GrupoC;
use App\Models\GrupoD;
use App\Models\GrupoE;
use App\Models\GrupoF;
use App\Models\GrupoG;
use App\Models\GrupoH;
use App\Models\Flags;

class PartiFrontController extends Controller
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
               $participantes = Participantes::Posiciones($request->get('nombre'))
                ->select('participantes.*')
                ->where('participantes.deleted_at',null)
                ->where('participantes.par_Pago',"SI")
                ->orderBy('participantes.par_apellido','ASC')           
                ->paginate(25);    
        }  
        else
        {        
            $participantes = Participantes::select('participantes.*')
                ->where('participantes.deleted_at',null)
                ->where('participantes.par_Pago',"SI")
                ->orderBy('participantes.par_apellido','ASC')
                ->paginate(25);
              //  dd($Posiciones);
        }
        foreach ($participantes as $key => $value) {
            $ApuestaParti = Apuestas::select('*')
            ->where('Part_id',$participantes[$key]->id)
            ->get();

            if(isset($ApuestaParti[0]))
            {
                //echo "el participante ".$participantes[$key]->par_apellido." cargo la boleta "."<br>";
                $participantes[$key]['ExisteBoleta'] = "SI";
            }
            else
            {
                //echo "el participante ".$participantes[$key]->par_apellido." NO cargo la boleta "."<br>";
                $participantes[$key]['ExisteBoleta'] = "NO";
            }
        }
        $flag = Flags::select('estado')
        ->where('bandera','HabilitarCarga')
        ->first();
        //dd($flag->estado);
        $estado=$flag->estado;
        return view('front.participantes',compact('participantes','estado'));
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
