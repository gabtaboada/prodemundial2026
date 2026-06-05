<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Aciertos;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Participantes;
use App\Models\Apuestas;
use App\Models\GrupoA;
use App\Models\GrupoB;
use App\Models\GrupoC;
use App\Models\GrupoD;
use App\Models\GrupoE;
use App\Models\GrupoF;
use App\Models\GrupoG;
use App\Models\GrupoH;
use App\Models\GrupoI;
use App\Models\GrupoJ;
use App\Models\GrupoK;
use App\Models\GrupoL;
use App\Models\UltimosResultados;
use Illuminate\Support\Facades\Response;
//use Response;
class MasterController extends Controller
{
public function __construct()
{
    //
}
    public function find(Route $route){

            $this->admin =Master::find($route->getParameter('admin/master'));
            $this->notFound($this->admin);///por si alguien quiere editar algo desde la url//

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    public function index()
    {
        $Master = Master::find(1);
        //dd($Master);
        return view('admin.master.index',compact('Master'));
    }*/

    public function index()
    {
        $Master = Master::find(1);

        $grupos = [
            'A','B','C','D',
            'E','F','G','H',
            'I','J','K','L'
        ];

        $datosGrupos = [];

        foreach ($grupos as $grupo)
        {
            $tabla = 'grupo_' . strtolower($grupo);

            $datosGrupos[$grupo] = \DB::table($tabla)->get();
        }

        return view(
            'admin.master.index',
            compact(
                'Master',
                'grupos',
                'datosGrupos'
            )
        );
    }        
    public function ObtengoDatosMaster($id,$grupo,$numero,$partido)
    {
//        echo "grupo "+$grupo+" numero "+$numero+" partido "+$partido;
        $master = Master::find(1);
        //echo $partido." -> ".$apuesta->$partido." Grupo ".$grupo."<br>" ;
        $AuxGolesEquipo1 = "Mas_".$partido."_GolEqui1";
        $AuxGolesEquipo2 = "Mas_".$partido."_GolEqui2"; 

        switch ($grupo) {
            case 'A':

                    $DatosPartido = GrupoA::select('*')
                    ->where('A_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->A_Equipo1;
                    $Equipo2 = $DatosPartido[0]->A_Equipo2;
                    $Bandera1 = $DatosPartido[0]->A_Bandera1;
                    $Bandera2 = $DatosPartido[0]->A_Bandera2;

                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;

                break;
            case 'B':
                    $DatosPartido = GrupoB::select('*')
                    ->where('B_Partido',$partido)
                    ->get();

                    $Equipo1 = $DatosPartido[0]->B_Equipo1;
                    $Equipo2 = $DatosPartido[0]->B_Equipo2;
                    $Bandera1 = $DatosPartido[0]->B_Bandera1;
                    $Bandera2 = $DatosPartido[0]->B_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;
            case 'C':
                    $DatosPartido = GrupoC::select('*')
                    ->where('C_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->C_Equipo1;
                    $Equipo2 = $DatosPartido[0]->C_Equipo2;
                    $Bandera1 = $DatosPartido[0]->C_Bandera1;
                    $Bandera2 = $DatosPartido[0]->C_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;
            case 'D':
                    $DatosPartido = GrupoD::select('*')
                    ->where('D_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->D_Equipo1;
                    $Equipo2 = $DatosPartido[0]->D_Equipo2;
                    $Bandera1 = $DatosPartido[0]->D_Bandera1;
                    $Bandera2 = $DatosPartido[0]->D_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;
            case 'E':
                    $DatosPartido = GrupoE::select('*')
                    ->where('E_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->E_Equipo1;
                    $Equipo2 = $DatosPartido[0]->E_Equipo2;
                    $Bandera1 = $DatosPartido[0]->E_Bandera1;
                    $Bandera2 = $DatosPartido[0]->E_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;       
            case 'F':
                    $DatosPartido = GrupoF::select('*')
                    ->where('F_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->F_Equipo1;
                    $Equipo2 = $DatosPartido[0]->F_Equipo2;
                    $Bandera1 = $DatosPartido[0]->F_Bandera1;
                    $Bandera2 = $DatosPartido[0]->F_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;    
            case 'G':
                    $DatosPartido = GrupoG::select('*')
                    ->where('G_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->G_Equipo1;
                    $Equipo2 = $DatosPartido[0]->G_Equipo2;
                    $Bandera1 = $DatosPartido[0]->G_Bandera1;
                    $Bandera2 = $DatosPartido[0]->G_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;    
            case 'H':
                    $DatosPartido = GrupoH::select('*')
                    ->where('H_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->H_Equipo1;
                    $Equipo2 = $DatosPartido[0]->H_Equipo2;
                    $Bandera1 = $DatosPartido[0]->H_Bandera1;
                    $Bandera2 = $DatosPartido[0]->H_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;    
// GRUPO I
            case 'I':
                    $DatosPartido = GrupoI::select('*')
                    ->where('I_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->I_Equipo1;
                    $Equipo2 = $DatosPartido[0]->I_Equipo2;
                    $Bandera1 = $DatosPartido[0]->I_Bandera1;
                    $Bandera2 = $DatosPartido[0]->I_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;                    
// GRUPO J
            case 'J':
                    $DatosPartido = GrupoJ::select('*')
                    ->where('J_Partido',$partido)
                    ->get();
                   
                    $Equipo1 = $DatosPartido[0]->J_Equipo1;
                    $Equipo2 = $DatosPartido[0]->J_Equipo2;
                    $Bandera1 = $DatosPartido[0]->J_Bandera1;
                    $Bandera2 = $DatosPartido[0]->J_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;    
//GRUPO K          
            case 'K':
                    $DatosPartido = GrupoK::select('*')
                    ->where('K_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->K_Equipo1;
                    $Equipo2 = $DatosPartido[0]->K_Equipo2;
                    $Bandera1 = $DatosPartido[0]->K_Bandera1;
                    $Bandera2 = $DatosPartido[0]->K_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;                    
// GRUPO L
            case 'L':
                    $DatosPartido = GrupoL::select('*')
                    ->where('L_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->L_Equipo1;
                    $Equipo2 = $DatosPartido[0]->L_Equipo2;
                    $Bandera1 = $DatosPartido[0]->L_Bandera1;
                    $Bandera2 = $DatosPartido[0]->L_Bandera2;
                    $GolesEquipo1 = $master->$AuxGolesEquipo1;
                    $GolesEquipo2 = $master->$AuxGolesEquipo2;                    
                break;    

        }// cierro switch 
/*        
        $TblUltimosResu = UltimosResultados::select('ur_GolesEq1','ur_GolesEq2')
        ->where('Ur_partido',$partido)
        ->get();


        if (isset($TblUltimosResu[0]))
        {
            $UR_GolesEquipo1 = $TblUltimosResu[0]->ur_GolesEq1 ;
            $UR_GolesEquipo2 = $TblUltimosResu[0]->ur_GolesEq2 ;
        }
        else
        {
            $UR_GolesEquipo1 = 0;
            $UR_GolesEquipo2 = 0;
        }
*/
        //return Response::json([$partido,$master->$partido,$Equipo1,$Equipo2,$Bandera1,$Bandera2,$UR_GolesEquipo1,$UR_GolesEquipo2,$GolesEquipo1,$GolesEquipo2]);
        return Response::json([$partido,$master->$partido,$Equipo1,$Equipo2,$Bandera1,$Bandera2,$GolesEquipo1,$GolesEquipo2]);

    }
    public function confirmarActualizarMaster(request $request)
    {
    /// verifico que los resultados este bien, si es 0a 0 empate     
        $GolesEquipo1 = $request->GolesEquipo1;
        $GolesEquipo2 = $request->GolesEquipo2;
        //echo " goles equipo1 ".$GolesEquipo1. "goles equipo 2 ".$GolesEquipo2."<br>";
        $errorResultado = 0;
        switch ($request->resultado) {
            case 'L':
          //      echo "entra L <br>";
                if( $GolesEquipo1 <= $GolesEquipo2)
                {
            //        echo "es menor o igual , goles equipo 1<br>"  ;
                    $errorResultado = 1;
                }
                else
                {
              //      echo "Local mayor<br>";
                    $errorResultado = 0;
                }
                break;
            case 'E':
                //echo "entra E <br>";
                if( $GolesEquipo1 != $GolesEquipo2)
                {
                  //  echo "son distintos <br>"  ;
                    $errorResultado = 1;
                }
                else
                {
                    //echo "empate <br>";
                    $errorResultado = 0;
                }                
                break;
            case 'V':
                //echo "entra V <br>";
                if( $GolesEquipo1 >= $GolesEquipo2)
                {
                  //  echo "es mayor o igual , goles equipo 1 <br>"  ;
                    $errorResultado = 1;
                }
                else
                {
                   // echo "visitante mayor <br>";
                    $errorResultado = 0;
                }                
                break;                
        }    
        //echo "".$errorResultado;                    
        if( $errorResultado == 0)
        {        
                    //
                    $GrupoPartido =$request->GrupoPartido;
                    $AuxGolesEquipo1 = "Mas_".$GrupoPartido."_GolEqui1";
                    $AuxGolesEquipo2 = "Mas_".$GrupoPartido."_GolEqui2";
                   // echo "grupo partido ".$request->GrupoPartido." resultado ".$request->resultado." <br> ";
                    $master = Master::find(1);
                   // if (  $master->$GrupoPartido != $request->resultado) 
                    
                    if ( ($master->$AuxGolesEquipo1 != $GolesEquipo1) or ($master->$AuxGolesEquipo2 != $GolesEquipo2) )
                    {// si es distinto puedo cambiar pero primero verifico q los goles sean distintos tmb
                        //echo "master resultado ".$master->$GrupoPartido." resultado elegido ".$request->resultado." master goles eq1 ".$master->$AuxGolesEquipo1." master goles eq2 ".$master->$AuxGolesEquipo2." elegido goles eq1 ".$GolesEquipo1." elegido goles eq2 ".$GolesEquipo2;
                        //dd("entra");  
                           // echo "master ".$master->$GrupoPartido;
                                        $master->$GrupoPartido = $request->resultado;
                                        $master->$AuxGolesEquipo1 = $GolesEquipo1;
                                        $master->$AuxGolesEquipo2 = $GolesEquipo2;
                                        $master->save();
                                        switch ($request->resultado) {
                                            case 'L':
                                                $MensajeResult = "Local";
                                                break;
                                            case 'E':
                                                $MensajeResult = "Empate";
                                                break;
                                            case 'V':
                                                $MensajeResult = "Visitante";
                                                break;                
                                        }
                                        $aciertos = 0;
                                        if($master->save())
                                          {
                                            // verifico si este partido fue cargado anteriormente para modificarlo
                                            // en la tabla ultimos resultados, sino lo cargo-
                                            $ExisteUltimos = UltimosResultados::select('*')
                                            ->where('Ur_partido',$request->GrupoPartido)
                                            ->get();

                                            if (isset($ExisteUltimos[0]))
                                            {//si existe actualizo el resultado
                                                $ExisteUltimos[0]->Ur_resultado = $request->resultado;
                                                $ExisteUltimos[0]->ur_GolesEq1 = $GolesEquipo1;
                                                $ExisteUltimos[0]->ur_GolesEq2 = $GolesEquipo2;
                                                $ExisteUltimos[0]->save();
                                            }
                                            else
                                            {
                                                UltimosResultados::create([
                                                        'Ur_grupo' => $request->grupo,
                                                        'Ur_partido' => $request->GrupoPartido,
                                                        'Ur_resultado' => $request->resultado,
                                                        'ur_GolesEq1' => $GolesEquipo1,
                                                        'ur_GolesEq2' => $GolesEquipo2,
                                                    ]); 
                                            }

                                                switch ($request->grupo) {
                                                    case 'A':
                                                            $DatosPartido = GrupoA::select('*')
                                                            ->where('A_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->A_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->A_Equipo2;
                                                        break;
                                                    case 'B':
                                                            $DatosPartido = GrupoB::select('*')
                                                            ->where('B_Partido',$request->GrupoPartido)
                                                            ->get();

                                                            $Equipo1 = $DatosPartido[0]->B_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->B_Equipo2;
                                                        break;
                                                    case 'C':
                                                            $DatosPartido = GrupoC::select('*')
                                                            ->where('C_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->C_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->C_Equipo2;
                                                        break;
                                                    case 'D':
                                                            $DatosPartido = GrupoD::select('*')
                                                            ->where('D_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->D_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->D_Equipo2;
                                                        break;
                                                    case 'E':
                                                            $DatosPartido = GrupoE::select('*')
                                                            ->where('E_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->E_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->E_Equipo2;
                                                        break;       
                                                    case 'F':
                                                            $DatosPartido = GrupoF::select('*')
                                                            ->where('F_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->F_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->F_Equipo2;
                                                        break;    
                                                    case 'G':
                                                            $DatosPartido = GrupoG::select('*')
                                                            ->where('G_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->G_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->G_Equipo2;
                                                        break;    
                                                    case 'H':
                                                            $DatosPartido = GrupoH::select('*')
                                                            ->where('H_Partido',$request->GrupoPartido)
                                                            ->get();
                                                            $Equipo1 = $DatosPartido[0]->H_Equipo1;
                                                            $Equipo2 = $DatosPartido[0]->H_Equipo2;
                                                        break;    


                                                }//Cierro switch para saber equipo                
                                                $ApuestasParticipantes = Apuestas:: SeleccionpApuestasValidas();

                                                foreach ($ApuestasParticipantes as $key => $value) {
                                                    //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
                                                    //echo "A1 ".$ApuestasParticipantes[$key]->A1;
                                /////////////////////////// GRUPO A ////
                                                        if ($ApuestasParticipantes[$key]->A1 == $master->A1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A1_GolEqui1 == $master->Mas_A1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A1_GolEqui2 == $master->Mas_A1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }
                                                        }   
                                                        if ($ApuestasParticipantes[$key]->A2 == $master->A2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A2_GolEqui1 == $master->Mas_A2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A2_GolEqui2 == $master->Mas_A2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->A3 == $master->A3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A3_GolEqui1 == $master->Mas_A3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A3_GolEqui2 == $master->Mas_A3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->A4 == $master->A4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A4_GolEqui1 == $master->Mas_A4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A4_GolEqui2 == $master->Mas_A4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A5 == $master->A5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A5_GolEqui1 == $master->Mas_A5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A5_GolEqui2 == $master->Mas_A5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A6 == $master->A6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A6_GolEqui1 == $master->Mas_A6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A6_GolEqui2 == $master->Mas_A6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO B ////
                                                        if ($ApuestasParticipantes[$key]->B1 == $master->B1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B1_GolEqui1 == $master->Mas_B1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B1_GolEqui2 == $master->Mas_B1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                 
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B2 == $master->B2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B2_GolEqui1 == $master->Mas_B2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B2_GolEqui2 == $master->Mas_B2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->B3 == $master->B3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B3_GolEqui1 == $master->Mas_B3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B3_GolEqui2 == $master->Mas_B3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->B4 == $master->B4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B4_GolEqui1 == $master->Mas_B4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B4_GolEqui2 == $master->Mas_B4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B5 == $master->B5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B5_GolEqui1 == $master->Mas_B5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B5_GolEqui2 == $master->Mas_B5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B6 == $master->B6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B6_GolEqui1 == $master->Mas_B6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B6_GolEqui2 == $master->Mas_B6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }             
                                /////////////////////////// GRUPO C ////
                                                        if ($ApuestasParticipantes[$key]->C1 == $master->C1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C1_GolEqui1 == $master->Mas_C1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C1_GolEqui2 == $master->Mas_C1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C2 == $master->C2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C2_GolEqui1 == $master->Mas_C2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C2_GolEqui2 == $master->Mas_C2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->C3 == $master->C3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C3_GolEqui1 == $master->Mas_C3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C3_GolEqui2 == $master->Mas_C3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->C4 == $master->C4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C4_GolEqui1 == $master->Mas_C4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C4_GolEqui2 == $master->Mas_C4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C5 == $master->C5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C5_GolEqui1 == $master->Mas_C5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C5_GolEqui2 == $master->Mas_C5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C6 == $master->C6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C6_GolEqui1 == $master->Mas_C6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C6_GolEqui2 == $master->Mas_C6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO D ////
                                                        if ($ApuestasParticipantes[$key]->D1 == $master->D1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D1_GolEqui1 == $master->Mas_D1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D1_GolEqui2 == $master->Mas_D1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D2 == $master->D2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D2_GolEqui1 == $master->Mas_D2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D2_GolEqui2 == $master->Mas_D2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->D3 == $master->D3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D3_GolEqui1 == $master->Mas_D3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D3_GolEqui2 == $master->Mas_D3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->D4 == $master->D4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D4_GolEqui1 == $master->Mas_D4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D4_GolEqui2 == $master->Mas_D4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D5 == $master->D5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D5_GolEqui1 == $master->Mas_D5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D5_GolEqui2 == $master->Mas_D5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D6 == $master->D6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D6_GolEqui1 == $master->Mas_D6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D6_GolEqui2 == $master->Mas_D6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }        
                                /////////////////////////// GRUPO E ////
                                                        if ($ApuestasParticipantes[$key]->E1 == $master->E1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E1_GolEqui1 == $master->Mas_E1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E1_GolEqui2 == $master->Mas_E1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E2 == $master->E2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E2_GolEqui1 == $master->Mas_E2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E2_GolEqui2 == $master->Mas_E2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->E3 == $master->E3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E3_GolEqui1 == $master->Mas_E3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E3_GolEqui2 == $master->Mas_E3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->E4 == $master->E4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E4_GolEqui1 == $master->Mas_E4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E4_GolEqui2 == $master->Mas_E4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E5 == $master->E5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E5_GolEqui1 == $master->Mas_E5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E5_GolEqui2 == $master->Mas_E5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E6 == $master->E6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E6_GolEqui1 == $master->Mas_E6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E6_GolEqui2 == $master->Mas_E6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO F ////
                                                        if ($ApuestasParticipantes[$key]->F1 == $master->F1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F1_GolEqui1 == $master->Mas_F1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F1_GolEqui2 == $master->Mas_F1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F2 == $master->F2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F2_GolEqui1 == $master->Mas_F2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F2_GolEqui2 == $master->Mas_F2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->F3 == $master->F3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F3_GolEqui1 == $master->Mas_F3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F3_GolEqui2 == $master->Mas_F3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->F4 == $master->F4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F4_GolEqui1 == $master->Mas_F4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F4_GolEqui2 == $master->Mas_F4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F5 == $master->F5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F5_GolEqui1 == $master->Mas_F5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F5_GolEqui2 == $master->Mas_F5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F6 == $master->F6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F6_GolEqui1 == $master->Mas_F6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F6_GolEqui2 == $master->Mas_F6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO G ////
                                                        if ($ApuestasParticipantes[$key]->G1 == $master->G1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G1_GolEqui1 == $master->Mas_G1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G1_GolEqui2 == $master->Mas_G1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G2 == $master->G2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G2_GolEqui1 == $master->Mas_G2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G2_GolEqui2 == $master->Mas_G2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->G3 == $master->G3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G3_GolEqui1 == $master->Mas_G3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G3_GolEqui2 == $master->Mas_G3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->G4 == $master->G4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G4_GolEqui1 == $master->Mas_G4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G4_GolEqui2 == $master->Mas_G4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G5 == $master->G5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G5_GolEqui1 == $master->Mas_G5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G5_GolEqui2 == $master->Mas_G5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G6 == $master->G6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G6_GolEqui1 == $master->Mas_G6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G6_GolEqui2 == $master->Mas_G6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO H ////
                                                        if ($ApuestasParticipantes[$key]->H1 == $master->H1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H1_GolEqui1 == $master->Mas_H1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H1_GolEqui2 == $master->Mas_H1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H2 == $master->H2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H2_GolEqui1 == $master->Mas_H2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H2_GolEqui2 == $master->Mas_H2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->H3 == $master->H3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H3_GolEqui1 == $master->Mas_H3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H3_GolEqui2 == $master->Mas_H3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->H4 == $master->H4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H4_GolEqui1 == $master->Mas_H4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H4_GolEqui2 == $master->Mas_H4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H5 == $master->H5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H5_GolEqui1 == $master->Mas_H5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H5_GolEqui2 == $master->Mas_H5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H6 == $master->H6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H6_GolEqui1 == $master->Mas_H6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H6_GolEqui2 == $master->Mas_H6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                              
                                                    //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
                                                    //echo " cantidad Aciertos ".$aciertos."<br>"; 
                                                    $VectorAciertos = Aciertos::select('*')
                                                    ->where('APart_id',$ApuestasParticipantes[$key]->Part_id)
                                                    ->get();
                                                    $VectorAciertos[0]->CantidadAciertos = $aciertos;                       
                                                    $VectorAciertos[0]->save();
                                                    $aciertos = 0;                          
                                                }/// cierro foreach       
                                            $OrdenoAciertos = Aciertos::select('*')
                                                ->where('aciertos.CantidadAciertos','>=',0)
                                                ->orderBy('aciertos.CantidadAciertos','DESC')    
                                                ->get();
                                            $contador = 1;
                                            foreach ($OrdenoAciertos as $key => $value) {
                                                    $OrdenoAciertos[$key]->ac_Posicion = $contador;
                                                    $OrdenoAciertos[$key]->save();
                                                    $contador++;
                                                }       
                                            $mensaje = "exito";

                                            Session::flash('message','Actualización correcta. Partido : '.$request->GrupoPartido." ::: ".$Equipo1." Vs ".$Equipo2." ::: ".$MensajeResult);        
                                          }
                                          else
                                          {
                                            $mensaje = "error";
                                          }
                    }// cierro el if si el resultado elegido es distinto al del master
                    else
                    {
                     //   echo "master resultado ".$master->$GrupoPartido." resultado elegido ".$request->resultado." master goles eq1 ".$master->$AuxGolesEquipo1." master goles eq2 ".$master->$AuxGolesEquipo2." elegido goles eq1 ".$GolesEquipo1." elegido goles eq2 ".$GolesEquipo2;
                     //   dd("no entra");                          
                        $mensaje = "exito";
                        Session::flash('message-error','El resultado seleccionado es igual al cargado anteriormente, no se actualizo la tabla de aciertos');                    
                    }
        }// cierro if de errorResultado
        else
        {   
            Session::forget('message');
            Session::forget('message-error');
            $mensaje = "errorResultado";
        }                    
        return response ()->json([$mensaje]); 
    }  
    public function confirmarEliminarMaster(Request $request)
    {
       // echo " grupo ".$request->grupo." partido ".$request->partido;
        $master = Master::find(1);
        $partido = $request->partido;
        $AuxGolesEquipo1 = "Mas_".$partido."_GolEqui1";
        $AuxGolesEquipo2 = "Mas_".$partido."_GolEqui2";  

        $master->$partido = NULL;
        $master->$AuxGolesEquipo1 = NULL;
        $master->$AuxGolesEquipo2 = NULL;
        $master->save();
        if($master->save())
        {
            // verifico si este partido fue cargado anteriormente para eliminarlo
            // en la tabla ultimos resultados
            $ExisteUltimos = UltimosResultados::select('*')
            ->where('Ur_partido',$request->partido)
            ->get();

            if (isset($ExisteUltimos[0]))
            {//si existe lo borro
                DB::table('ultimos_resultados')->where('id', '=',$ExisteUltimos[0]->id)->delete();  
            }

            $aciertos = 0; 
            $ApuestasParticipantes = Apuestas:: SeleccionpApuestasValidas();
               foreach ($ApuestasParticipantes as $key => $value) {
                                //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
                                //echo "A1 ".$ApuestasParticipantes[$key]->A1;
            /////////////////////////// GRUPO A ////
/* SIN GOLES                
                                    if ($ApuestasParticipantes[$key]->A1 == $master->A1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A2 == $master->A2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->A3 == $master->A3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->A4 == $master->A4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A5 == $master->A5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A6 == $master->A6)
                                    {
                                        $aciertos++;
                                    }     
            /////////////////////////// GRUPO B ////
                                    if ($ApuestasParticipantes[$key]->B1 == $master->B1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B2 == $master->B2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->B3 == $master->B3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->B4 == $master->B4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B5 == $master->B5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B6 == $master->B6)
                                    {
                                        $aciertos++;
                                    }             
            /////////////////////////// GRUPO C ////
                                    if ($ApuestasParticipantes[$key]->C1 == $master->C1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C2 == $master->C2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->C3 == $master->C3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->C4 == $master->C4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C5 == $master->C5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C6 == $master->C6)
                                    {
                                        $aciertos++;
                                    }     
            /////////////////////////// GRUPO D ////
                                    if ($ApuestasParticipantes[$key]->D1 == $master->D1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D2 == $master->D2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->D3 == $master->D3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->D4 == $master->D4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D5 == $master->D5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D6 == $master->D6)
                                    {
                                        $aciertos++;
                                    }        
            /////////////////////////// GRUPO E ////
                                    if ($ApuestasParticipantes[$key]->E1 == $master->E1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E2 == $master->E2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->E3 == $master->E3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->E4 == $master->E4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E5 == $master->E5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E6 == $master->E6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO F ////
                                    if ($ApuestasParticipantes[$key]->F1 == $master->F1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F2 == $master->F2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->F3 == $master->F3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->F4 == $master->F4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F5 == $master->F5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F6 == $master->F6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO G ////
                                    if ($ApuestasParticipantes[$key]->G1 == $master->G1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G2 == $master->G2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->G3 == $master->G3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->G4 == $master->G4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G5 == $master->G5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G6 == $master->G6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO H ////
                                    if ($ApuestasParticipantes[$key]->H1 == $master->H1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H2 == $master->H2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->H3 == $master->H3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->H4 == $master->H4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H5 == $master->H5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H6 == $master->H6)
                                    {
                                        $aciertos++;
                                    }        
*/
                                                        if ($ApuestasParticipantes[$key]->A1 == $master->A1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A1_GolEqui1 == $master->Mas_A1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A1_GolEqui2 == $master->Mas_A1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }
                                                        }   
                                                        if ($ApuestasParticipantes[$key]->A2 == $master->A2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A2_GolEqui1 == $master->Mas_A2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A2_GolEqui2 == $master->Mas_A2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->A3 == $master->A3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A3_GolEqui1 == $master->Mas_A3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A3_GolEqui2 == $master->Mas_A3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->A4 == $master->A4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A4_GolEqui1 == $master->Mas_A4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A4_GolEqui2 == $master->Mas_A4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A5 == $master->A5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A5_GolEqui1 == $master->Mas_A5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A5_GolEqui2 == $master->Mas_A5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A6 == $master->A6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A6_GolEqui1 == $master->Mas_A6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A6_GolEqui2 == $master->Mas_A6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO B ////
                                                        if ($ApuestasParticipantes[$key]->B1 == $master->B1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B1_GolEqui1 == $master->Mas_B1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B1_GolEqui2 == $master->Mas_B1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                 
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B2 == $master->B2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B2_GolEqui1 == $master->Mas_B2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B2_GolEqui2 == $master->Mas_B2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->B3 == $master->B3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B3_GolEqui1 == $master->Mas_B3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B3_GolEqui2 == $master->Mas_B3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->B4 == $master->B4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B4_GolEqui1 == $master->Mas_B4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B4_GolEqui2 == $master->Mas_B4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B5 == $master->B5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B5_GolEqui1 == $master->Mas_B5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B5_GolEqui2 == $master->Mas_B5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B6 == $master->B6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B6_GolEqui1 == $master->Mas_B6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B6_GolEqui2 == $master->Mas_B6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }             
                                /////////////////////////// GRUPO C ////
                                                        if ($ApuestasParticipantes[$key]->C1 == $master->C1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C1_GolEqui1 == $master->Mas_C1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C1_GolEqui2 == $master->Mas_C1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C2 == $master->C2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C2_GolEqui1 == $master->Mas_C2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C2_GolEqui2 == $master->Mas_C2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->C3 == $master->C3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C3_GolEqui1 == $master->Mas_C3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C3_GolEqui2 == $master->Mas_C3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->C4 == $master->C4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C4_GolEqui1 == $master->Mas_C4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C4_GolEqui2 == $master->Mas_C4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C5 == $master->C5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C5_GolEqui1 == $master->Mas_C5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C5_GolEqui2 == $master->Mas_C5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C6 == $master->C6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C6_GolEqui1 == $master->Mas_C6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C6_GolEqui2 == $master->Mas_C6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO D ////
                                                        if ($ApuestasParticipantes[$key]->D1 == $master->D1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D1_GolEqui1 == $master->Mas_D1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D1_GolEqui2 == $master->Mas_D1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D2 == $master->D2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D2_GolEqui1 == $master->Mas_D2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D2_GolEqui2 == $master->Mas_D2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->D3 == $master->D3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D3_GolEqui1 == $master->Mas_D3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D3_GolEqui2 == $master->Mas_D3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->D4 == $master->D4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D4_GolEqui1 == $master->Mas_D4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D4_GolEqui2 == $master->Mas_D4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D5 == $master->D5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D5_GolEqui1 == $master->Mas_D5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D5_GolEqui2 == $master->Mas_D5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D6 == $master->D6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D6_GolEqui1 == $master->Mas_D6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D6_GolEqui2 == $master->Mas_D6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }        
                                /////////////////////////// GRUPO E ////
                                                        if ($ApuestasParticipantes[$key]->E1 == $master->E1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E1_GolEqui1 == $master->Mas_E1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E1_GolEqui2 == $master->Mas_E1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E2 == $master->E2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E2_GolEqui1 == $master->Mas_E2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E2_GolEqui2 == $master->Mas_E2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->E3 == $master->E3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E3_GolEqui1 == $master->Mas_E3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E3_GolEqui2 == $master->Mas_E3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->E4 == $master->E4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E4_GolEqui1 == $master->Mas_E4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E4_GolEqui2 == $master->Mas_E4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E5 == $master->E5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E5_GolEqui1 == $master->Mas_E5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E5_GolEqui2 == $master->Mas_E5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E6 == $master->E6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E6_GolEqui1 == $master->Mas_E6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E6_GolEqui2 == $master->Mas_E6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO F ////
                                                        if ($ApuestasParticipantes[$key]->F1 == $master->F1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F1_GolEqui1 == $master->Mas_F1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F1_GolEqui2 == $master->Mas_F1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F2 == $master->F2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F2_GolEqui1 == $master->Mas_F2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F2_GolEqui2 == $master->Mas_F2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->F3 == $master->F3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F3_GolEqui1 == $master->Mas_F3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F3_GolEqui2 == $master->Mas_F3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->F4 == $master->F4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F4_GolEqui1 == $master->Mas_F4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F4_GolEqui2 == $master->Mas_F4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F5 == $master->F5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F5_GolEqui1 == $master->Mas_F5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F5_GolEqui2 == $master->Mas_F5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F6 == $master->F6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F6_GolEqui1 == $master->Mas_F6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F6_GolEqui2 == $master->Mas_F6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO G ////
                                                        if ($ApuestasParticipantes[$key]->G1 == $master->G1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G1_GolEqui1 == $master->Mas_G1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G1_GolEqui2 == $master->Mas_G1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G2 == $master->G2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G2_GolEqui1 == $master->Mas_G2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G2_GolEqui2 == $master->Mas_G2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->G3 == $master->G3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G3_GolEqui1 == $master->Mas_G3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G3_GolEqui2 == $master->Mas_G3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->G4 == $master->G4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G4_GolEqui1 == $master->Mas_G4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G4_GolEqui2 == $master->Mas_G4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G5 == $master->G5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G5_GolEqui1 == $master->Mas_G5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G5_GolEqui2 == $master->Mas_G5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G6 == $master->G6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G6_GolEqui1 == $master->Mas_G6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G6_GolEqui2 == $master->Mas_G6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO H ////
                                                        if ($ApuestasParticipantes[$key]->H1 == $master->H1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H1_GolEqui1 == $master->Mas_H1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H1_GolEqui2 == $master->Mas_H1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H2 == $master->H2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H2_GolEqui1 == $master->Mas_H2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H2_GolEqui2 == $master->Mas_H2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->H3 == $master->H3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H3_GolEqui1 == $master->Mas_H3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H3_GolEqui2 == $master->Mas_H3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->H4 == $master->H4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H4_GolEqui1 == $master->Mas_H4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H4_GolEqui2 == $master->Mas_H4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H5 == $master->H5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H5_GolEqui1 == $master->Mas_H5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H5_GolEqui2 == $master->Mas_H5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H6 == $master->H6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H6_GolEqui1 == $master->Mas_H6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H6_GolEqui2 == $master->Mas_H6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                                                              
                                //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
                                //echo " cantidad Aciertos ".$aciertos."<br>"; 
                                $VectorAciertos = Aciertos::select('*')
                                ->where('APart_id',$ApuestasParticipantes[$key]->Part_id)
                                ->get();
                                $VectorAciertos[0]->CantidadAciertos = $aciertos;                       
                                $VectorAciertos[0]->save();
                                $aciertos = 0;                          
                            }/// cierro foreach    
            $OrdenoAciertos = Aciertos::select('*')
                ->where('aciertos.CantidadAciertos','>=',0)
                ->orderBy('aciertos.CantidadAciertos','DESC')    
                ->get();
            $contador = 1;
            foreach ($OrdenoAciertos as $key => $value) {
                    $OrdenoAciertos[$key]->ac_Posicion = $contador;
                    $OrdenoAciertos[$key]->save();
                    $contador++;
                }                                               
            $mensaje = "exito";
            Session::flash('message','Resultado eliminado correctamente de la tabla master, y se realizao la actualización de la tabla aciertos.');                    
        }
        else
        {
            $mensaje = "error";
            
        }        
        return response ()->json([$mensaje]); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ActualizarAciertos()
    {
        return view('admin.master.actualizarAciertos');
    }
    public function confirmarActualizarAciertos(Request $request)
    {
        $master = Master::find(1);
        $aciertos = 0;
        $VectorNombre = NULL ;
        $errorsAciertos = 0 ;
        $ApuestasParticipantes = Apuestas:: SeleccionpApuestasValidas();
            foreach ($ApuestasParticipantes as $key => $value) {
            //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
            //echo "A1 ".$ApuestasParticipantes[$key]->A1;
            /////////////////////////// GRUPO A ////
/* SIN GOLES                
                                    if ($ApuestasParticipantes[$key]->A1 == $master->A1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A2 == $master->A2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->A3 == $master->A3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->A4 == $master->A4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A5 == $master->A5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->A6 == $master->A6)
                                    {
                                        $aciertos++;
                                    }     
            /////////////////////////// GRUPO B ////
                                    if ($ApuestasParticipantes[$key]->B1 == $master->B1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B2 == $master->B2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->B3 == $master->B3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->B4 == $master->B4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B5 == $master->B5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->B6 == $master->B6)
                                    {
                                        $aciertos++;
                                    }             
            /////////////////////////// GRUPO C ////
                                    if ($ApuestasParticipantes[$key]->C1 == $master->C1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C2 == $master->C2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->C3 == $master->C3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->C4 == $master->C4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C5 == $master->C5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->C6 == $master->C6)
                                    {
                                        $aciertos++;
                                    }     
            /////////////////////////// GRUPO D ////
                                    if ($ApuestasParticipantes[$key]->D1 == $master->D1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D2 == $master->D2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->D3 == $master->D3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->D4 == $master->D4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D5 == $master->D5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->D6 == $master->D6)
                                    {
                                        $aciertos++;
                                    }        
            /////////////////////////// GRUPO E ////
                                    if ($ApuestasParticipantes[$key]->E1 == $master->E1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E2 == $master->E2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->E3 == $master->E3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->E4 == $master->E4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E5 == $master->E5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->E6 == $master->E6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO F ////
                                    if ($ApuestasParticipantes[$key]->F1 == $master->F1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F2 == $master->F2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->F3 == $master->F3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->F4 == $master->F4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F5 == $master->F5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->F6 == $master->F6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO G ////
                                    if ($ApuestasParticipantes[$key]->G1 == $master->G1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G2 == $master->G2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->G3 == $master->G3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->G4 == $master->G4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G5 == $master->G5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->G6 == $master->G6)
                                    {
                                        $aciertos++;
                                    }                                                 
            /////////////////////////// GRUPO H ////
                                    if ($ApuestasParticipantes[$key]->H1 == $master->H1)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H2 == $master->H2)
                                    {
                                        $aciertos++;
                                    }       
                                    if ($ApuestasParticipantes[$key]->H3 == $master->H3)
                                    {
                                        $aciertos++;
                                    }                                 
                                    if ($ApuestasParticipantes[$key]->H4 == $master->H4)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H5 == $master->H5)
                                    {
                                        $aciertos++;
                                    }
                                    if ($ApuestasParticipantes[$key]->H6 == $master->H6)
                                    {
                                        $aciertos++;
                                    }        
*/
                                                        if ($ApuestasParticipantes[$key]->A1 == $master->A1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A1_GolEqui1 == $master->Mas_A1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A1_GolEqui2 == $master->Mas_A1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }
                                                        }   
                                                        if ($ApuestasParticipantes[$key]->A2 == $master->A2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A2_GolEqui1 == $master->Mas_A2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A2_GolEqui2 == $master->Mas_A2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->A3 == $master->A3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A3_GolEqui1 == $master->Mas_A3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A3_GolEqui2 == $master->Mas_A3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->A4 == $master->A4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A4_GolEqui1 == $master->Mas_A4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A4_GolEqui2 == $master->Mas_A4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A5 == $master->A5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A5_GolEqui1 == $master->Mas_A5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A5_GolEqui2 == $master->Mas_A5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->A6 == $master->A6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_A6_GolEqui1 == $master->Mas_A6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_A6_GolEqui2 == $master->Mas_A6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO B ////
                                                        if ($ApuestasParticipantes[$key]->B1 == $master->B1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B1_GolEqui1 == $master->Mas_B1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B1_GolEqui2 == $master->Mas_B1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                 
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B2 == $master->B2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B2_GolEqui1 == $master->Mas_B2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B2_GolEqui2 == $master->Mas_B2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->B3 == $master->B3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B3_GolEqui1 == $master->Mas_B3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B3_GolEqui2 == $master->Mas_B3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->B4 == $master->B4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B4_GolEqui1 == $master->Mas_B4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B4_GolEqui2 == $master->Mas_B4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B5 == $master->B5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B5_GolEqui1 == $master->Mas_B5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B5_GolEqui2 == $master->Mas_B5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->B6 == $master->B6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_B6_GolEqui1 == $master->Mas_B6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_B6_GolEqui2 == $master->Mas_B6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }             
                                /////////////////////////// GRUPO C ////
                                                        if ($ApuestasParticipantes[$key]->C1 == $master->C1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C1_GolEqui1 == $master->Mas_C1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C1_GolEqui2 == $master->Mas_C1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C2 == $master->C2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C2_GolEqui1 == $master->Mas_C2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C2_GolEqui2 == $master->Mas_C2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->C3 == $master->C3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C3_GolEqui1 == $master->Mas_C3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C3_GolEqui2 == $master->Mas_C3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->C4 == $master->C4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C4_GolEqui1 == $master->Mas_C4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C4_GolEqui2 == $master->Mas_C4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C5 == $master->C5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C5_GolEqui1 == $master->Mas_C5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C5_GolEqui2 == $master->Mas_C5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->C6 == $master->C6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_C6_GolEqui1 == $master->Mas_C6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_C6_GolEqui2 == $master->Mas_C6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }     
                                /////////////////////////// GRUPO D ////
                                                        if ($ApuestasParticipantes[$key]->D1 == $master->D1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D1_GolEqui1 == $master->Mas_D1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D1_GolEqui2 == $master->Mas_D1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D2 == $master->D2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D2_GolEqui1 == $master->Mas_D2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D2_GolEqui2 == $master->Mas_D2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->D3 == $master->D3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D3_GolEqui1 == $master->Mas_D3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D3_GolEqui2 == $master->Mas_D3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->D4 == $master->D4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D4_GolEqui1 == $master->Mas_D4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D4_GolEqui2 == $master->Mas_D4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D5 == $master->D5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D5_GolEqui1 == $master->Mas_D5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D5_GolEqui2 == $master->Mas_D5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->D6 == $master->D6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_D6_GolEqui1 == $master->Mas_D6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_D6_GolEqui2 == $master->Mas_D6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }        
                                /////////////////////////// GRUPO E ////
                                                        if ($ApuestasParticipantes[$key]->E1 == $master->E1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E1_GolEqui1 == $master->Mas_E1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E1_GolEqui2 == $master->Mas_E1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                                
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E2 == $master->E2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E2_GolEqui1 == $master->Mas_E2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E2_GolEqui2 == $master->Mas_E2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->E3 == $master->E3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E3_GolEqui1 == $master->Mas_E3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E3_GolEqui2 == $master->Mas_E3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->E4 == $master->E4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E4_GolEqui1 == $master->Mas_E4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E4_GolEqui2 == $master->Mas_E4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E5 == $master->E5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E5_GolEqui1 == $master->Mas_E5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E5_GolEqui2 == $master->Mas_E5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->E6 == $master->E6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_E6_GolEqui1 == $master->Mas_E6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_E6_GolEqui2 == $master->Mas_E6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO F ////
                                                        if ($ApuestasParticipantes[$key]->F1 == $master->F1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F1_GolEqui1 == $master->Mas_F1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F1_GolEqui2 == $master->Mas_F1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F2 == $master->F2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F2_GolEqui1 == $master->Mas_F2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F2_GolEqui2 == $master->Mas_F2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->F3 == $master->F3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F3_GolEqui1 == $master->Mas_F3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F3_GolEqui2 == $master->Mas_F3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->F4 == $master->F4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F4_GolEqui1 == $master->Mas_F4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F4_GolEqui2 == $master->Mas_F4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F5 == $master->F5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F5_GolEqui1 == $master->Mas_F5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F5_GolEqui2 == $master->Mas_F5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->F6 == $master->F6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_F6_GolEqui1 == $master->Mas_F6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_F6_GolEqui2 == $master->Mas_F6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO G ////
                                                        if ($ApuestasParticipantes[$key]->G1 == $master->G1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G1_GolEqui1 == $master->Mas_G1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G1_GolEqui2 == $master->Mas_G1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G2 == $master->G2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G2_GolEqui1 == $master->Mas_G2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G2_GolEqui2 == $master->Mas_G2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->G3 == $master->G3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G3_GolEqui1 == $master->Mas_G3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G3_GolEqui2 == $master->Mas_G3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->G4 == $master->G4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G4_GolEqui1 == $master->Mas_G4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G4_GolEqui2 == $master->Mas_G4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G5 == $master->G5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G5_GolEqui1 == $master->Mas_G5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G5_GolEqui2 == $master->Mas_G5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->G6 == $master->G6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_G6_GolEqui1 == $master->Mas_G6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_G6_GolEqui2 == $master->Mas_G6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                 
                                /////////////////////////// GRUPO H ////
                                                        if ($ApuestasParticipantes[$key]->H1 == $master->H1)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H1_GolEqui1 == $master->Mas_H1_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H1_GolEqui2 == $master->Mas_H1_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H2 == $master->H2)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H2_GolEqui1 == $master->Mas_H2_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H2_GolEqui2 == $master->Mas_H2_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }       
                                                        if ($ApuestasParticipantes[$key]->H3 == $master->H3)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H3_GolEqui1 == $master->Mas_H3_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H3_GolEqui2 == $master->Mas_H3_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                 
                                                        if ($ApuestasParticipantes[$key]->H4 == $master->H4)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H4_GolEqui1 == $master->Mas_H4_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H4_GolEqui2 == $master->Mas_H4_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H5 == $master->H5)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H5_GolEqui1 == $master->Mas_H5_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H5_GolEqui2 == $master->Mas_H5_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }
                                                        if ($ApuestasParticipantes[$key]->H6 == $master->H6)
                                                        {
                                                            $aciertos++;
                                                            if( ($ApuestasParticipantes[$key]->Par_H6_GolEqui1 == $master->Mas_H6_GolEqui1) and ( $ApuestasParticipantes[$key]->Par_H6_GolEqui2 == $master->Mas_H6_GolEqui2) )
                                                            {
                                                                $aciertos++;
                                                            }                                                            
                                                        }                                                                                              
                                //echo "participante ".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";
                                //echo " cantidad Aciertos ".$aciertos."<br>"; 
                                $VectorAciertos = Aciertos::select('*')
                                ->where('APart_id',$ApuestasParticipantes[$key]->Part_id)
                                ->get();
                                $VectorAciertos[0]->CantidadAciertos = $aciertos;                       
                                $VectorAciertos[0]->save();
                                $aciertos = 0;           

                                if($VectorAciertos[0]->save())
                                {

                                }
                                else
                                {
                                    $VectorNombre[$errorsAciertos] = $ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name;
                                    $errorsAciertos++;
                                    //echo "".$ApuestasParticipantes[$key]->par_apellido." ".$ApuestasParticipantes[$key]->par_name."<br>";                                    
                                }

                            }/// cierro foreach     

        if ( $errorsAciertos != 0)    
        {
            Session::flash('errorsAciertos',$errorsAciertos);
            Session::flash('VectorNombre',$VectorNombre);                    
        }
            
        
        $mensaje = "exito";
        if ( $VectorNombre == NULL )
        {
            $OrdenoAciertos = Aciertos::select('*')
                ->where('aciertos.CantidadAciertos','>=',0)
                ->orderBy('aciertos.CantidadAciertos','DESC')    
                ->get();
            $contador = 1;
            //dd($OrdenoAciertos);
            foreach ($OrdenoAciertos as $key => $value) {
                    $OrdenoAciertos[$key]->ac_Posicion = $contador;
                    $OrdenoAciertos[$key]->save();
                    $contador++;
                }            
            Session::flash('message','Se actualizo la tabla aciertos de forma correcta');
        }

        return response ()->json([$mensaje]);                             
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
