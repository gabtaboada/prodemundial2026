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
use App\Models\UltimosResultados;
use App\Models\Aciertos;
use App\Models\Participantes;
use App\Models\GrupoA;
use App\Models\GrupoB;
use App\Models\GrupoC;
use App\Models\GrupoD;
use App\Models\GrupoE;
use App\Models\GrupoF;
use App\Models\GrupoG;
use App\Models\GrupoH;

class MostrarApuPartController extends Controller
{
public function __construct (){
    // sin middleware por ahora
}
    public function find(Route $route){

            $this->user = Master::find($route->getParameter(''));
            $this->notFound($this->user);///por si alguien quiere editar algo desde la url//

    } 
    public function index()
    {

    }
    public function apuestaPartido($AuxGrupo,$AuxNum)
      {
        // return " grupo ".$AuxGrupo." partido ".$AuxNum;
        $GrupoMayus = strtoupper($AuxGrupo);
        $GrupoMin = strtolower($AuxGrupo); 
        $Grupo = "grupo_".$GrupoMin;
        $Partido = $GrupoMayus.$AuxNum;
        $Constante = "Grupo".$GrupoMayus;
        $AuxIndice = $AuxNum-1;
        //echo "Grupo mayuscula ".$GrupoMayus."<br>" ;
          // GRUPOS //
          switch($GrupoMayus){
            case 'A':
                $GrupoBase = GrupoA::select('*')
                ->where('deleted_at',null)
                ->orderBy('A_Partido','ASC')
                ->get();
             //   echo "A"."<br>";
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->A_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->A_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->A_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->A_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->A_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->A_Bandera2;                
              break;
            case 'B':
                $GrupoBase = GrupoB::select('*')
                ->where('deleted_at',null)
                ->orderBy('B_Partido','ASC')
                ->get(); 

                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->B_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->B_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->B_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->B_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->B_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->B_Bandera2;

              //  echo "B grupomayus".$GrupoMayus."<br> ";
                break;
            case 'C':
                $GrupoBase = GrupoC::select('*')
                ->where('deleted_at',null)
                ->orderBy('C_Partido','ASC')
                ->get();
            //    echo "C grupomayus".$GrupoMayus."<br>"; 
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->C_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->C_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->C_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->C_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->C_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->C_Bandera2;  
                              
                break;
            case 'D':
                $GrupoBase = GrupoD::select('*')
                ->where('deleted_at',null)
                ->orderBy('D_Partido','ASC')
                ->get(); 
             //   echo "D"."<br>";
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->D_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->D_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->D_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->D_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->D_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->D_Bandera2;              
                break;
            case 'E':
                $GrupoBase = GrupoE::select('*')
                ->where('deleted_at',null)
                ->orderBy('E_Partido','ASC')
                ->get();
             //   echo "E"."<br>";
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->E_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->E_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->E_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->E_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->E_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->E_Bandera2;                
                break;
            case 'F':
                $GrupoBase = GrupoF::select('*')
                ->where('deleted_at',null)
                ->orderBy('F_Partido','ASC')
                ->get(); 
             //   echo "F"."<br>"; 
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->F_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->F_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->F_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->F_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->F_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->F_Bandera2;                
                break;
            case 'G':
                $GrupoBase = GrupoG::select('*')
                ->where('deleted_at',null)
                ->orderBy('G_Partido','ASC')
                ->get();
             //   echo "G"."<br>"; 
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->G_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->G_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->G_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->G_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->G_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->G_Bandera2;  
                              
                break; 
            case 'H':
                $GrupoBase = GrupoH::select('*')
                ->where('deleted_at',null)
                ->orderBy('H_Partido','ASC')
                ->get(); 
               // echo "H"."<br>";
                $EquipoAbreviado1=  $GrupoBase[$AuxIndice]->H_abreviado1;
                $EquipoAbreviado2= $GrupoBase[$AuxIndice]->H_abreviado2;
                $Equipo1 = $GrupoBase[$AuxIndice]->H_Equipo1;
                $Equipo2 = $GrupoBase[$AuxIndice]->H_Equipo2;
                $Bandera1 = $GrupoBase[$AuxIndice]->H_Bandera1;
                $Bandera2 = $GrupoBase[$AuxIndice]->H_Bandera2;

                break;                                 

                case 'I':
                    $GrupoBase = \App\Models\GrupoI::select('*')
                    ->where('deleted_at',null)
                    ->orderBy('I_Partido','ASC')
                    ->get();
                    $EquipoAbreviado1 = $GrupoBase[$AuxIndice]->I_abreviado1;
                    $EquipoAbreviado2 = $GrupoBase[$AuxIndice]->I_abreviado2;
                    $Equipo1 = $GrupoBase[$AuxIndice]->I_Equipo1;
                    $Equipo2 = $GrupoBase[$AuxIndice]->I_Equipo2;
                    $Bandera1 = $GrupoBase[$AuxIndice]->I_Bandera1;
                    $Bandera2 = $GrupoBase[$AuxIndice]->I_Bandera2;
                    break;
                case 'J':
                    $GrupoBase = \App\Models\GrupoJ::select('*')
                    ->where('deleted_at',null)
                    ->orderBy('J_Partido','ASC')
                    ->get();
                    $EquipoAbreviado1 = $GrupoBase[$AuxIndice]->J_abreviado1;
                    $EquipoAbreviado2 = $GrupoBase[$AuxIndice]->J_abreviado2;
                    $Equipo1 = $GrupoBase[$AuxIndice]->J_Equipo1;
                    $Equipo2 = $GrupoBase[$AuxIndice]->J_Equipo2;
                    $Bandera1 = $GrupoBase[$AuxIndice]->J_Bandera1;
                    $Bandera2 = $GrupoBase[$AuxIndice]->J_Bandera2;
                    break;
                case 'K':
                    $GrupoBase = \App\Models\GrupoK::select('*')
                    ->where('deleted_at',null)
                    ->orderBy('K_Partido','ASC')
                    ->get();
                    $EquipoAbreviado1 = $GrupoBase[$AuxIndice]->K_abreviado1;
                    $EquipoAbreviado2 = $GrupoBase[$AuxIndice]->K_abreviado2;
                    $Equipo1 = $GrupoBase[$AuxIndice]->K_Equipo1;
                    $Equipo2 = $GrupoBase[$AuxIndice]->K_Equipo2;
                    $Bandera1 = $GrupoBase[$AuxIndice]->K_Bandera1;
                    $Bandera2 = $GrupoBase[$AuxIndice]->K_Bandera2;
                    break;
                case 'L':
                    $GrupoBase = \App\Models\GrupoL::select('*')
                    ->where('deleted_at',null)
                    ->orderBy('L_Partido','ASC')
                    ->get();
                    $EquipoAbreviado1 = $GrupoBase[$AuxIndice]->L_abreviado1;
                    $EquipoAbreviado2 = $GrupoBase[$AuxIndice]->L_abreviado2;
                    $Equipo1 = $GrupoBase[$AuxIndice]->L_Equipo1;
                    $Equipo2 = $GrupoBase[$AuxIndice]->L_Equipo2;
                    $Bandera1 = $GrupoBase[$AuxIndice]->L_Bandera1;
                    $Bandera2 = $GrupoBase[$AuxIndice]->L_Bandera2;
                    break;                
          }
          //dd($GrupoBase);      

        //return "grupo ".$Grupo." partido ".$Partido;  
        // A1 -> Partido
        // Par_A1_GolEqui1 -->goles equipo 1
        // Par_A1_GolEqui2 -->goles equipo 2
        $AUXGoles1 = "Par_".$Partido."_GolEqui1";
        $AUXGoles2 = "Par_".$Partido."_GolEqui2";

            $Posiciones = Participantes::select('aciertos.CantidadAciertos','aciertos.ac_Posicion','participantes.*','apuestas.'.$AUXGoles1,'apuestas.'.$AUXGoles2)
                  ->join('aciertos','aciertos.APart_id','=','participantes.id')
                  ->join('apuestas','Part_id','=','participantes.id')
                  ->where('aciertos.deleted_at',null)
                  ->where('aciertos.CantidadAciertos','>=',0)
                  ->orderBy('aciertos.ac_Posicion','ASC')
                  //->paginate(25);
                  ->get();

        //  return " Equipo1 ".$Equipo1." Equipo 2 ".$Equipo2;
          //dd($Posiciones);
if (request()->ajax()) {
    return response()->json([
        'Equipo1' => $Equipo1,
        'Equipo2' => $Equipo2,
        'Bandera1' => $Bandera1,
        'Bandera2' => $Bandera2,
        'EquipoAbreviado1' => $EquipoAbreviado1,
        'EquipoAbreviado2' => $EquipoAbreviado2,
        'posiciones' => $Posiciones->map(function($p) use ($AUXGoles1, $AUXGoles2) {
            return [
                'posicion' => $p->ac_Posicion,
                'nombre' => $p->par_apellido . ' ' . $p->par_name,
                'goles1' => $p->$AUXGoles1,
                'goles2' => $p->$AUXGoles2,
                'aciertos' => $p->CantidadAciertos,
                'id' => $p->id,
            ];
        })
    ]);
}
return view('front.apuestaPartido', compact('Posiciones','EquipoAbreviado1','EquipoAbreviado2','Equipo1','Equipo2','Bandera1','Bandera2','AUXGoles1','AUXGoles2'));
/*          
          return view('front.apuestaPartido',compact('Posiciones','EquipoAbreviado1','EquipoAbreviado2','Equipo1','Equipo2','Bandera1','Bandera2','AUXGoles1','AUXGoles2'));*/
    }    

    public function inicio()
    {
    
    }    
        
         
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function IngresarUsuario()
    {
      return view('front.login');
    }
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
