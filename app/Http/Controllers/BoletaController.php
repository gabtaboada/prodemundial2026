<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BoletaCreateRequest; // BIEN
//use App\Models\Http\Requests\BoletaCreateRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Redirect;
use DateTime;
//use Auth;
use Carbon\Carbon;
use JavaScript;
use Response;
use App\Models\Master;
use App\Models\Apuestas;
use App\Models\Participantes;
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
use App\Models\BoletaParcial;
use App\Models\Flags;

use Illuminate\Routing\Route;


class BoletaController extends Controller
{
    /*public function __construct (){

        $this->middleware('auth');
 
        if( Auth::administrador()->get())
        {
            $this->middleware('admin'); 
        }
        

        if( Auth::participantes()->get())
        {
          $this->middleware('auth');
           $this->middleware('participantes'); 
            return Redirect::to('/');       
        }        
 
        $this->beforeFilter('@find',['only' =>['edit', 'update','destroy'] ]);


    }   */
   public function __construct()
{
    //
}
    public function find(Route $route){

            $this->user = Master::find($route->getParameter(''));
            $this->notFound($this->user);///por si alguien quiere editar algo desde la url//

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //dd(Auth::guard('participantes')->user()->id);
      //if ( isset(Auth::guard('participantes')->user()->id ))
// BIEN

      if (!Auth::guard('participantes')->check()) {
          return redirect()->to('/');
      }
        $Apuesta = Apuestas::select('*')
        ->where('Part_id',Auth::guard('participantes')->user()->id)
        ->get();
        if(isset($Apuesta[0]))
        {
            $ExisteBoleta = $Apuesta[0]; 
              $Apuesta = Apuestas::select('A1','A2','A3','A4','A5','A6','Par_A1_GolEqui1','Par_A1_GolEqui2','Par_A2_GolEqui1','Par_A2_GolEqui2','Par_A3_GolEqui1','Par_A3_GolEqui2','Par_A4_GolEqui1','Par_A4_GolEqui2','Par_A5_GolEqui1','Par_A5_GolEqui2','Par_A6_GolEqui1','Par_A6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoA = $Apuesta[0];
              
              $Apuesta = Apuestas::select('B1','B2','B3','B4','B5','B6','Par_B1_GolEqui1','Par_B1_GolEqui2','Par_B2_GolEqui1','Par_B2_GolEqui2','Par_B3_GolEqui1','Par_B3_GolEqui2','Par_B4_GolEqui1','Par_B4_GolEqui2','Par_B5_GolEqui1','Par_B5_GolEqui2','Par_B6_GolEqui1','Par_B6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoB = $Apuesta[0];      
              
              $Apuesta = Apuestas::select('C1','C2','C3','C4','C5','C6','Par_C1_GolEqui1','Par_C1_GolEqui2','Par_C2_GolEqui1','Par_C2_GolEqui2','Par_C3_GolEqui1','Par_C3_GolEqui2','Par_C4_GolEqui1','Par_C4_GolEqui2','Par_C5_GolEqui1','Par_C5_GolEqui2','Par_C6_GolEqui1','Par_C6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoC = $Apuesta[0];     
              
              $Apuesta = Apuestas::select('D1','D2','D3','D4','D5','D6','Par_D1_GolEqui1','Par_D1_GolEqui2','Par_D2_GolEqui1','Par_D2_GolEqui2','Par_D3_GolEqui1','Par_D3_GolEqui2','Par_D4_GolEqui1','Par_D4_GolEqui2','Par_D5_GolEqui1','Par_D5_GolEqui2','Par_D6_GolEqui1','Par_D6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoD = $Apuesta[0]; 
              
              $Apuesta = Apuestas::select('E1','E2','E3','E4','E5','E6','Par_E1_GolEqui1','Par_E1_GolEqui2','Par_E2_GolEqui1','Par_E2_GolEqui2','Par_E3_GolEqui1','Par_E3_GolEqui2','Par_E4_GolEqui1','Par_E4_GolEqui2','Par_E5_GolEqui1','Par_E5_GolEqui2','Par_E6_GolEqui1','Par_E6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoE = $Apuesta[0]; 
              
              $Apuesta = Apuestas::select('F1','F2','F3','F4','F5','F6','Par_F1_GolEqui1','Par_F1_GolEqui2','Par_F2_GolEqui1','Par_F2_GolEqui2','Par_F3_GolEqui1','Par_F3_GolEqui2','Par_F4_GolEqui1','Par_F4_GolEqui2','Par_F5_GolEqui1','Par_F5_GolEqui2','Par_F6_GolEqui1','Par_F6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoF = $Apuesta[0]; 

              $Apuesta = Apuestas::select('G1','G2','G3','G4','G5','G6','Par_G1_GolEqui1','Par_G1_GolEqui2','Par_G2_GolEqui1','Par_G2_GolEqui2','Par_G3_GolEqui1','Par_G3_GolEqui2','Par_G4_GolEqui1','Par_G4_GolEqui2','Par_G5_GolEqui1','Par_G5_GolEqui2','Par_G6_GolEqui1','Par_G6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoG = $Apuesta[0];      

              $Apuesta = Apuestas::select('H1','H2','H3','H4','H5','H6','Par_H1_GolEqui1','Par_H1_GolEqui2','Par_H2_GolEqui1','Par_H2_GolEqui2','Par_H3_GolEqui1','Par_H3_GolEqui2','Par_H4_GolEqui1','Par_H4_GolEqui2','Par_H5_GolEqui1','Par_H5_GolEqui2','Par_H6_GolEqui1','Par_H6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoH = $Apuesta[0];                                  
              //dd($ApuGrupoA->A1);
              $Apuesta = Apuestas::select('I1','I2','I3','I4','I5','I6','Par_I1_GolEqui1','Par_I1_GolEqui2','Par_I2_GolEqui1','Par_I2_GolEqui2','Par_I3_GolEqui1','Par_I3_GolEqui2','Par_I4_GolEqui1','Par_I4_GolEqui2','Par_I5_GolEqui1','Par_I5_GolEqui2','Par_I6_GolEqui1','Par_I6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoI = $Apuesta[0];  

              $Apuesta = Apuestas::select('J1','J2','J3','J4','J5','J6','Par_J1_GolEqui1','Par_J1_GolEqui2','Par_J2_GolEqui1','Par_J2_GolEqui2','Par_J3_GolEqui1','Par_J3_GolEqui2','Par_J4_GolEqui1','Par_J4_GolEqui2','Par_J5_GolEqui1','Par_J5_GolEqui2','Par_J6_GolEqui1','Par_J6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoJ = $Apuesta[0];  

              $Apuesta = Apuestas::select('K1','K2','K3','K4','K5','K6','Par_K1_GolEqui1','Par_K1_GolEqui2','Par_K2_GolEqui1','Par_K2_GolEqui2','Par_K3_GolEqui1','Par_K3_GolEqui2','Par_K4_GolEqui1','Par_K4_GolEqui2','Par_K5_GolEqui1','Par_K5_GolEqui2','Par_K6_GolEqui1','Par_K6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoK = $Apuesta[0];                

              $Apuesta = Apuestas::select('L1','L2','L3','L4','L5','L6','Par_L1_GolEqui1','Par_L1_GolEqui2','Par_L2_GolEqui1','Par_L2_GolEqui2','Par_L3_GolEqui1','Par_L3_GolEqui2','Par_L4_GolEqui1','Par_L4_GolEqui2','Par_L5_GolEqui1','Par_L5_GolEqui2','Par_L6_GolEqui1','Par_L6_GolEqui2')
              ->where('Part_id',Auth::guard('participantes')->user()->id)
              ->get();
              $ApuGrupoL = $Apuesta[0];                


              $GrupoA = GrupoA::select('*')
              ->where('deleted_at',null)
              ->orderBy('A_Partido','ASC')
              ->get();
              $GrupoB = GrupoB::select('*')
              ->where('deleted_at',null)
              ->orderBy('B_Partido','ASC')
              ->get();
              $GrupoC = GrupoC::select('*')
              ->where('deleted_at',null)
              ->orderBy('C_Partido','ASC')
              ->get();      
              $GrupoD = GrupoD::select('*')
              ->where('deleted_at',null)
              ->orderBy('D_Partido','ASC')
              ->get();  
              $GrupoE = GrupoE::select('*')
              ->where('deleted_at',null)
              ->orderBy('E_Partido','ASC')
              ->get();  
              $GrupoF = GrupoF::select('*')
              ->where('deleted_at',null)
              ->orderBy('F_Partido','ASC')
              ->get();  
              $GrupoG = GrupoG::select('*')
              ->where('deleted_at',null)
              ->orderBy('G_Partido','ASC')
              ->get();  
              $GrupoH = GrupoH::select('*')
              ->where('deleted_at',null)
              ->orderBy('H_Partido','ASC')
              ->get();                          

              $GrupoI = GrupoI::select('*')
              ->where('deleted_at',null)
              ->orderBy('I_Partido','ASC')
              ->get();    

              $GrupoJ = GrupoJ::select('*')
              ->where('deleted_at',null)
              ->orderBy('J_Partido','ASC')
              ->get();    

              $GrupoK = GrupoK::select('*')
              ->where('deleted_at',null)
              ->orderBy('K_Partido','ASC')
              ->get();    

              $GrupoL = GrupoL::select('*')
              ->where('deleted_at',null)
              ->orderBy('L_Partido','ASC')
              ->get();                  

              $i=1;
              foreach ($GrupoA as $key => $value) {
                $Partido = $GrupoA[$key]->A_Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                $GrupoA[$key]['Apuesta'] = $ApuGrupoA->$Partido;
                $AuxGrupoAEquipo1 = "Par_A".$i."_GolEqui1";
                $AuxGrupoAEquipo2 = "Par_A".$i."_GolEqui2";
                
                $GrupoA[$key]['GolesEquipo1'] = $ApuGrupoA->$AuxGrupoAEquipo1;
                $GrupoA[$key]['GolesEquipo2'] = $ApuGrupoA->$AuxGrupoAEquipo2;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                $i++;
              }
              $i=1;
              foreach ($GrupoB as $key => $value) {
                $Partido = $GrupoB[$key]->B_Partido;
                $GrupoB[$key]['Apuesta'] = $ApuGrupoB->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                $AuxGrupoBEquipo1 = "Par_B".$i."_GolEqui1";
                $AuxGrupoBEquipo2 = "Par_B".$i."_GolEqui2";
                $GrupoB[$key]['GolesEquipo1'] = $ApuGrupoB->$AuxGrupoBEquipo1;
                $GrupoB[$key]['GolesEquipo2'] = $ApuGrupoB->$AuxGrupoBEquipo2;
                $i++;                
              }    
              $i=1;  
              foreach ($GrupoC as $key => $value) {
                $Partido = $GrupoC[$key]->C_Partido;
                $GrupoC[$key]['Apuesta'] = $ApuGrupoC->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                $AuxGrupoCEquipo1 = "Par_C".$i."_GolEqui1";
                $AuxGrupoCEquipo2 = "Par_C".$i."_GolEqui2";
                $GrupoC[$key]['GolesEquipo1'] = $ApuGrupoC->$AuxGrupoCEquipo1;
                $GrupoC[$key]['GolesEquipo2'] = $ApuGrupoC->$AuxGrupoCEquipo2;
                $i++;                    
              }     
              $i=1;
              foreach ($GrupoD as $key => $value) {
                $Partido = $GrupoD[$key]->D_Partido;
                $GrupoD[$key]['Apuesta'] = $ApuGrupoD->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                $AuxGrupoDEquipo1 = "Par_D".$i."_GolEqui1";
                $AuxGrupoDEquipo2 = "Par_D".$i."_GolEqui2";
                $GrupoD[$key]['GolesEquipo1'] = $ApuGrupoD->$AuxGrupoDEquipo1;
                $GrupoD[$key]['GolesEquipo2'] = $ApuGrupoD->$AuxGrupoDEquipo2;
                $i++;                   
                            
              }  
              $i=1;
              foreach ($GrupoE as $key => $value) {
                $Partido = $GrupoE[$key]->E_Partido;
                $GrupoE[$key]['Apuesta'] = $ApuGrupoE->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                $AuxGrupoEEquipo1 = "Par_E".$i."_GolEqui1";
                $AuxGrupoEEquipo2 = "Par_E".$i."_GolEqui2";
                $GrupoE[$key]['GolesEquipo1'] = $ApuGrupoE->$AuxGrupoEEquipo1;
                $GrupoE[$key]['GolesEquipo2'] = $ApuGrupoE->$AuxGrupoEEquipo2;
                $i++;                      
              }  
              $i=1;
              foreach ($GrupoF as $key => $value) {
                $Partido = $GrupoF[$key]->F_Partido;
                $GrupoF[$key]['Apuesta'] = $ApuGrupoF->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                $AuxGrupoFEquipo1 = "Par_F".$i."_GolEqui1";
                $AuxGrupoFEquipo2 = "Par_F".$i."_GolEqui2";
                $GrupoF[$key]['GolesEquipo1'] = $ApuGrupoF->$AuxGrupoFEquipo1;
                $GrupoF[$key]['GolesEquipo2'] = $ApuGrupoF->$AuxGrupoFEquipo2;
                $i++;                      
              }  
              $i=1;
              foreach ($GrupoG as $key => $value) {
                $Partido = $GrupoG[$key]->G_Partido;
                $GrupoG[$key]['Apuesta'] = $ApuGrupoG->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                $AuxGrupoGEquipo1 = "Par_G".$i."_GolEqui1";
                $AuxGrupoGEquipo2 = "Par_G".$i."_GolEqui2";
                $GrupoG[$key]['GolesEquipo1'] = $ApuGrupoG->$AuxGrupoGEquipo1;
                $GrupoG[$key]['GolesEquipo2'] = $ApuGrupoG->$AuxGrupoGEquipo2;
                $i++;                      
              }    
              $i=1;              
              foreach ($GrupoH as $key => $value) {
                $Partido = $GrupoH[$key]->H_Partido;
                $GrupoH[$key]['Apuesta'] = $ApuGrupoH->$Partido;
                //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                $AuxGrupoHEquipo1 = "Par_H".$i."_GolEqui1";
                $AuxGrupoHEquipo2 = "Par_H".$i."_GolEqui2";
                $GrupoH[$key]['GolesEquipo1'] = $ApuGrupoH->$AuxGrupoHEquipo1;
                $GrupoH[$key]['GolesEquipo2'] = $ApuGrupoH->$AuxGrupoHEquipo2;
                $i++;                      
              }  
// GRUPO I
$i=1;  // ← agregar
foreach ($GrupoI as $key => $value) {
    $Partido = $GrupoI[$key]->I_Partido;
    $GrupoI[$key]['Apuesta'] = $ApuGrupoI->$Partido;
    $AuxGrupoIEquipo1 = "Par_I".$i."_GolEqui1";
    $AuxGrupoIEquipo2 = "Par_I".$i."_GolEqui2";
    $GrupoI[$key]['GolesEquipo1'] = $ApuGrupoI->$AuxGrupoIEquipo1;
    $GrupoI[$key]['GolesEquipo2'] = $ApuGrupoI->$AuxGrupoIEquipo2;
    $i++;
}
// GRUPO J
$i=1;  // ← agregar
foreach ($GrupoJ as $key => $value) {
    $Partido = $GrupoJ[$key]->J_Partido;
    $GrupoJ[$key]['Apuesta'] = $ApuGrupoJ->$Partido;
    $AuxGrupoJEquipo1 = "Par_J".$i."_GolEqui1";
    $AuxGrupoJEquipo2 = "Par_J".$i."_GolEqui2";
    $GrupoJ[$key]['GolesEquipo1'] = $ApuGrupoJ->$AuxGrupoJEquipo1;
    $GrupoJ[$key]['GolesEquipo2'] = $ApuGrupoJ->$AuxGrupoJEquipo2;
    $i++;
}
// GRUPO K
$i=1;  // ← agregar
foreach ($GrupoK as $key => $value) {
    $Partido = $GrupoK[$key]->K_Partido;
    $GrupoK[$key]['Apuesta'] = $ApuGrupoK->$Partido;
    $AuxGrupoKEquipo1 = "Par_K".$i."_GolEqui1";  // ← K mayúscula
    $AuxGrupoKEquipo2 = "Par_K".$i."_GolEqui2";  // ← K mayúscula
    $GrupoK[$key]['GolesEquipo1'] = $ApuGrupoK->$AuxGrupoKEquipo1;
    $GrupoK[$key]['GolesEquipo2'] = $ApuGrupoK->$AuxGrupoKEquipo2;
    $i++;
}
// GRUPO L
$i=1;  // ← agregar
foreach ($GrupoL as $key => $value) {
    $Partido = $GrupoL[$key]->L_Partido;          // ← L mayúscula
    $GrupoL[$key]['Apuesta'] = $ApuGrupoL->$Partido;
    $AuxGrupoLEquipo1 = "Par_L".$i."_GolEqui1";  // ← L mayúscula
    $AuxGrupoLEquipo2 = "Par_L".$i."_GolEqui2";  // ← L mayúscula
    $GrupoL[$key]['GolesEquipo1'] = $ApuGrupoL->$AuxGrupoLEquipo1;
    $GrupoL[$key]['GolesEquipo2'] = $ApuGrupoL->$AuxGrupoLEquipo2;
    $i++;
}                    
              
        }
        else
        {
            $ExisteBoleta = NULL;
              $GrupoA = GrupoA::select('*')
              ->where('deleted_at',null)
              ->orderBy('A_Partido','ASC')
              ->get();
              $GrupoB = GrupoB::select('*')
              ->where('deleted_at',null)
              ->orderBy('B_Partido','ASC')
              ->get();
              $GrupoC = GrupoC::select('*')
              ->where('deleted_at',null)
              ->orderBy('C_Partido','ASC')
              ->get();      
              $GrupoD = GrupoD::select('*')
              ->where('deleted_at',null)
              ->orderBy('D_Partido','ASC')
              ->get();  
              $GrupoE = GrupoE::select('*')
              ->where('deleted_at',null)
              ->orderBy('E_Partido','ASC')
              ->get();  
              $GrupoF = GrupoF::select('*')
              ->where('deleted_at',null)
              ->orderBy('F_Partido','ASC')
              ->get();  
              $GrupoG = GrupoG::select('*')
              ->where('deleted_at',null)
              ->orderBy('G_Partido','ASC')
              ->get();  
              $GrupoH = GrupoH::select('*')
              ->where('deleted_at',null)
              ->orderBy('H_Partido','ASC')
              ->get();   
//grupo i    
              $GrupoI = GrupoI::select('*')
              ->where('deleted_at',null)
              ->orderBy('I_Partido','ASC')
              ->get();   
// GRUPO J
              $GrupoJ = GrupoJ::select('*')
              ->where('deleted_at',null)
              ->orderBy('J_Partido','ASC')
              ->get();   
//GRUPO K
              $GrupoK = GrupoK::select('*')
              ->where('deleted_at',null)
              ->orderBy('K_Partido','ASC')
              ->get();   
// GRUPO L
              $GrupoL = GrupoL::select('*')
              ->where('deleted_at',null)
              ->orderBy('L_Partido','ASC')
              ->get();                                                                        
        }
       //dd($ExisteBoleta);  
       // dd($GrupoE);  
        $participanteID = Auth::guard('participantes')->user()->id;  
        $AuxHabilitar = Flags::select('estado')
        ->where('bandera','HabilitarCarga')
        ->get();
        //dd($GrupoA);
        $participante = Participantes::find($participanteID);
        $Pago = $participante->par_Pago;
        //dd($AuxHabilitar[0]->estado);
        $HabilitarCarga = $AuxHabilitar[0]->estado;
       // dd('llegue al final');
       //dd($GrupoJ);
      //  dd($GrupoK);
$Borrador = BoletaParcial::where('Part_id', $participanteID)->first();
return view('front.boleta',compact('ExisteBoleta','GrupoA','GrupoB','GrupoC','GrupoD','GrupoE','GrupoF','GrupoG','GrupoH','GrupoI','GrupoJ','GrupoK','GrupoL','participanteID','HabilitarCarga','Pago','Borrador'));
       /*

        return view('front.boleta',compact('ExisteBoleta','GrupoA','GrupoB','GrupoC','GrupoD','GrupoE','GrupoF','GrupoG','GrupoH','GrupoI','GrupoJ','GrupoK','GrupoL','participanteID','HabilitarCarga','Pago'));
        */
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
    public function store(BoletaCreateRequest $request)
    //public function store(Request $request)
    {
    ////GRUPO A ////   
      
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="A".$x;
          $AuxPartido1 = "Par_A".$x."_GolEqui1";  
          $AuxPartido2 = "Par_A".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            //$request['A1'] = "L";
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }
    ////GRUPO B ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="B".$x;
          $AuxPartido1 = "Par_B".$x."_GolEqui1";  
          $AuxPartido2 = "Par_B".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            //$request['A1'] = "L";
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }
    ////GRUPO C ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="C".$x;
          $AuxPartido1 = "Par_C".$x."_GolEqui1";  
          $AuxPartido2 = "Par_C".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            //$request['A1'] = "L";
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }
    ////GRUPO D ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="D".$x;
          $AuxPartido1 = "Par_D".$x."_GolEqui1";  
          $AuxPartido2 = "Par_D".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }
    ////GRUPO E ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="E".$x;
          $AuxPartido1 = "Par_E".$x."_GolEqui1";  
          $AuxPartido2 = "Par_E".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }      
    ////GRUPO F ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="F".$x;
          $AuxPartido1 = "Par_F".$x."_GolEqui1";  
          $AuxPartido2 = "Par_F".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }            
    ////GRUPO G ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="G".$x;
          $AuxPartido1 = "Par_G".$x."_GolEqui1";  
          $AuxPartido2 = "Par_G".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
      }   
    ////GRUPO H ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="H".$x;
          $AuxPartido1 = "Par_H".$x."_GolEqui1";  
          $AuxPartido2 = "Par_H".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
          
      }                  
    ////GRUPO I ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="I".$x;
          $AuxPartido1 = "Par_I".$x."_GolEqui1";  
          $AuxPartido2 = "Par_I".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
          
      }        
    ////GRUPO J ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="J".$x;
          $AuxPartido1 = "Par_J".$x."_GolEqui1";  
          $AuxPartido2 = "Par_J".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
          
      }   
    ////GRUPO K ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="K".$x;
          $AuxPartido1 = "Par_K".$x."_GolEqui1";  
          $AuxPartido2 = "Par_K".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
          
      }        
    ////GRUPO L ////   
     
      for ( $x=1; $x<=6 ; $x++ )
      {   
          $partido ="L".$x;
          $AuxPartido1 = "Par_L".$x."_GolEqui1";  
          $AuxPartido2 = "Par_L".$x."_GolEqui2";  
          if ( $request->$AuxPartido1 > $request->$AuxPartido2 )
          {
            $request[$partido] = "L";
          }   
          else
          {
            if( $request->$AuxPartido1 < $request->$AuxPartido2 )
            {
              $request[$partido] = "V";
            }
            else
            {
              $request[$partido] = "E"; 
            }
          }        
          
      }                                                                                
    //dd($request->all());
     

      if ($request->Part_id != Auth::guard('participantes')->user()->id ) 
       {
          $request->Part_id = Auth::guard('participantes')->user()->id;
          $request->Part_id = save();
       }
      Apuestas::create($request->all());
      Session::flash('message','Boleta Cargada correctamente');
      return Redirect::to('/boleta');

    }
/*
// FUNCION PARA CARGAR BOLETA SIN GOLES SOLO E L V ////
    public function store(BoletaCreateRequest $request)
    {
     dd($request->all());
     

      if ($request->Part_id != Auth::guard('participantes')->user()->id ) 
       {
          $request->Part_id = Auth::guard('participantes')->user()->id;
          $request->Part_id = save();
       }
      Apuestas::create($request->all());
      Session::flash('message','Boleta Cargada correctamente');
      return Redirect::to('/boleta');

    }
    */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function ObtengoDatosApuesta($grupo,$partido)
    {
   /*
        $usuario = Session::get('Usuario');
        dd($usuario);
   */   
        //dd("auth ".Auth::guard('participantes')->user()->id);
        $apuesta = Apuestas::select('*')
        ->where('Part_id',Auth::guard('participantes')->user()->id)
        ->get();

        $AuxGolesEquipo1 = "Par_".$partido."_GolEqui1";
        $AuxGolesEquipo2 = "Par_".$partido."_GolEqui2";
        $resultado = $apuesta[0]->$partido;
        //echo $partido." -> ".$apuesta->$partido." Grupo ".$grupo."<br>" ;
        switch ($grupo) {
            case 'A':
                    $DatosPartido = GrupoA::select('*')
                    ->where('A_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->A_Equipo1;
                    $Equipo2 = $DatosPartido[0]->A_Equipo2;
                    $Bandera1 = $DatosPartido[0]->A_Bandera1;
                    $Bandera2 = $DatosPartido[0]->A_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;
                break;
            case 'B':
                    $DatosPartido = GrupoB::select('*')
                    ->where('B_Partido',$partido)
                    ->get();

                    $Equipo1 = $DatosPartido[0]->B_Equipo1;
                    $Equipo2 = $DatosPartido[0]->B_Equipo2;
                    $Bandera1 = $DatosPartido[0]->B_Bandera1;
                    $Bandera2 = $DatosPartido[0]->B_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;
            case 'C':
                    $DatosPartido = GrupoC::select('*')
                    ->where('C_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->C_Equipo1;
                    $Equipo2 = $DatosPartido[0]->C_Equipo2;
                    $Bandera1 = $DatosPartido[0]->C_Bandera1;
                    $Bandera2 = $DatosPartido[0]->C_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;
            case 'D':
                    $DatosPartido = GrupoD::select('*')
                    ->where('D_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->D_Equipo1;
                    $Equipo2 = $DatosPartido[0]->D_Equipo2;
                    $Bandera1 = $DatosPartido[0]->D_Bandera1;
                    $Bandera2 = $DatosPartido[0]->D_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;
            case 'E':
                    $DatosPartido = GrupoE::select('*')
                    ->where('E_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->E_Equipo1;
                    $Equipo2 = $DatosPartido[0]->E_Equipo2;
                    $Bandera1 = $DatosPartido[0]->E_Bandera1;
                    $Bandera2 = $DatosPartido[0]->E_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;       
            case 'F':
                    $DatosPartido = GrupoF::select('*')
                    ->where('F_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->F_Equipo1;
                    $Equipo2 = $DatosPartido[0]->F_Equipo2;
                    $Bandera1 = $DatosPartido[0]->F_Bandera1;
                    $Bandera2 = $DatosPartido[0]->F_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;    
            case 'G':
                    $DatosPartido = GrupoG::select('*')
                    ->where('G_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->G_Equipo1;
                    $Equipo2 = $DatosPartido[0]->G_Equipo2;
                    $Bandera1 = $DatosPartido[0]->G_Bandera1;
                    $Bandera2 = $DatosPartido[0]->G_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;    
            case 'H':
                    $DatosPartido = GrupoH::select('*')
                    ->where('H_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->H_Equipo1;
                    $Equipo2 = $DatosPartido[0]->H_Equipo2;
                    $Bandera1 = $DatosPartido[0]->H_Bandera1;
                    $Bandera2 = $DatosPartido[0]->H_Bandera2;
                    $GolesEquipo1 = $apuesta[0]->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta[0]->$AuxGolesEquipo2;                    
                break;    


        }
        
        return Response::json([$partido,$resultado,$Equipo1,$Equipo2,$Bandera1,$Bandera2,$GolesEquipo1,$GolesEquipo2]);

    }    

    public function confirmarActualizarApuesta(Request $request)
    {
      $GrupoApuesta = $request->GrupoApuesta;
      $resultado = $request->resultado;
      $PartidoApuesta = $request->PartidoApuesta;

      $AuxGolesEquipo1 = "Par_".$request->PartidoApuesta."_GolEqui1";
      $AuxGolesEquipo2 = "Par_".$request->PartidoApuesta."_GolEqui2";
      $Usuario = Auth::guard('participantes')->user()->id;

      $apuesta = Apuestas::select('*')
      ->where('Part_id',Auth::guard('participantes')->user()->id)
      ->get();

      $MiApuesta = $apuesta[0];
          if ( $request->GolesEquipo1 > $request->GolesEquipo2 )
          {
            $resultado = "L";
          }   
          else
          {
            if( $request->GolesEquipo1 < $request->GolesEquipo2 )
            {
              $resultado = "V";
            }
            else
            {
              $resultado = "E"; 
            }
          }    

      $MiApuesta->$PartidoApuesta = $resultado;
      $MiApuesta->$AuxGolesEquipo1 = $request->GolesEquipo1;
      $MiApuesta->$AuxGolesEquipo2 = $request->GolesEquipo2;

      $MiApuesta->save();
      if ($MiApuesta->save())
      {
        $mensaje = "exito";
      }
      else
      {
        $mensaje = "error";
      }
      return Response::json([$mensaje]);
    }
    
    public function VerBoletaParticipante($id)
    {
        $Apuesta = Apuestas::select('apuestas.*','aciertos.CantidadAciertos')
        ->join('aciertos','aciertos.APart_id','=','apuestas.Part_id')
        ->where('apuestas.Part_id',$id)
        ->get();

        $parti = Participantes::find($id);
        if(isset($parti))
        {
         // echo "exixte";
            $participante = $parti->par_apellido." ".$parti->par_name;
            if(isset($Apuesta[0]))
            {
                $CantidadAciertos = $Apuesta[0]->CantidadAciertos;
                $ExisteBoleta = $Apuesta[0]; 
                  $Apuesta = Apuestas::select('A1','A2','A3','A4','A5','A6','Par_A1_GolEqui1','Par_A1_GolEqui2','Par_A2_GolEqui1','Par_A2_GolEqui2','Par_A3_GolEqui1','Par_A3_GolEqui2','Par_A4_GolEqui1','Par_A4_GolEqui2','Par_A5_GolEqui1','Par_A5_GolEqui2','Par_A6_GolEqui1','Par_A6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoA = $Apuesta[0];
                  
                  $Apuesta = Apuestas::select('B1','B2','B3','B4','B5','B6','Par_B1_GolEqui1','Par_B1_GolEqui2','Par_B2_GolEqui1','Par_B2_GolEqui2','Par_B3_GolEqui1','Par_B3_GolEqui2','Par_B4_GolEqui1','Par_B4_GolEqui2','Par_B5_GolEqui1','Par_B5_GolEqui2','Par_B6_GolEqui1','Par_B6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoB = $Apuesta[0];      
                  
                  $Apuesta = Apuestas::select('C1','C2','C3','C4','C5','C6','Par_C1_GolEqui1','Par_C1_GolEqui2','Par_C2_GolEqui1','Par_C2_GolEqui2','Par_C3_GolEqui1','Par_C3_GolEqui2','Par_C4_GolEqui1','Par_C4_GolEqui2','Par_C5_GolEqui1','Par_C5_GolEqui2','Par_C6_GolEqui1','Par_C6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoC = $Apuesta[0];     
                  
                  $Apuesta = Apuestas::select('D1','D2','D3','D4','D5','D6','Par_D1_GolEqui1','Par_D1_GolEqui2','Par_D2_GolEqui1','Par_D2_GolEqui2','Par_D3_GolEqui1','Par_D3_GolEqui2','Par_D4_GolEqui1','Par_D4_GolEqui2','Par_D5_GolEqui1','Par_D5_GolEqui2','Par_D6_GolEqui1','Par_D6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoD = $Apuesta[0]; 
                  
                  $Apuesta = Apuestas::select('E1','E2','E3','E4','E5','E6','Par_E1_GolEqui1','Par_E1_GolEqui2','Par_E2_GolEqui1','Par_E2_GolEqui2','Par_E3_GolEqui1','Par_E3_GolEqui2','Par_E4_GolEqui1','Par_E4_GolEqui2','Par_E5_GolEqui1','Par_E5_GolEqui2','Par_E6_GolEqui1','Par_E6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoE = $Apuesta[0]; 
                  
                  $Apuesta = Apuestas::select('F1','F2','F3','F4','F5','F6','Par_F1_GolEqui1','Par_F1_GolEqui2','Par_F2_GolEqui1','Par_F2_GolEqui2','Par_F3_GolEqui1','Par_F3_GolEqui2','Par_F4_GolEqui1','Par_F4_GolEqui2','Par_F5_GolEqui1','Par_F5_GolEqui2','Par_F6_GolEqui1','Par_F6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoF = $Apuesta[0]; 

                  $Apuesta = Apuestas::select('G1','G2','G3','G4','G5','G6','Par_G1_GolEqui1','Par_G1_GolEqui2','Par_G2_GolEqui1','Par_G2_GolEqui2','Par_G3_GolEqui1','Par_G3_GolEqui2','Par_G4_GolEqui1','Par_G4_GolEqui2','Par_G5_GolEqui1','Par_G5_GolEqui2','Par_G6_GolEqui1','Par_G6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoG = $Apuesta[0];      

                  $Apuesta = Apuestas::select('H1','H2','H3','H4','H5','H6','Par_H1_GolEqui1','Par_H1_GolEqui2','Par_H2_GolEqui1','Par_H2_GolEqui2','Par_H3_GolEqui1','Par_H3_GolEqui2','Par_H4_GolEqui1','Par_H4_GolEqui2','Par_H5_GolEqui1','Par_H5_GolEqui2','Par_H6_GolEqui1','Par_H6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoH = $Apuesta[0];                                  
//grupo I
                  $Apuesta = Apuestas::select('I1','I2','I3','I4','I5','I6','Par_I1_GolEqui1','Par_I1_GolEqui2','Par_I2_GolEqui1','Par_I2_GolEqui2','Par_I3_GolEqui1','Par_I3_GolEqui2','Par_I4_GolEqui1','Par_I4_GolEqui2','Par_I5_GolEqui1','Par_I5_GolEqui2','Par_I6_GolEqui1','Par_I6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoI = $Apuesta[0];                         
//GRUPO j
                  $Apuesta = Apuestas::select('J1','J2','J3','J4','J5','J6','Par_J1_GolEqui1','Par_J1_GolEqui2','Par_J2_GolEqui1','Par_J2_GolEqui2','Par_J3_GolEqui1','Par_J3_GolEqui2','Par_J4_GolEqui1','Par_J4_GolEqui2','Par_J5_GolEqui1','Par_J5_GolEqui2','Par_J6_GolEqui1','Par_J6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoJ = $Apuesta[0];       
//GRUPO K
                  $Apuesta = Apuestas::select('K1','K2','K3','K4','K5','K6','Par_K1_GolEqui1','Par_K1_GolEqui2','Par_K2_GolEqui1','Par_K2_GolEqui2','Par_K3_GolEqui1','Par_K3_GolEqui2','Par_K4_GolEqui1','Par_K4_GolEqui2','Par_K5_GolEqui1','Par_K5_GolEqui2','Par_K6_GolEqui1','Par_K6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoK = $Apuesta[0];       
//GRUPO L
                  $Apuesta = Apuestas::select('L1','L2','L3','L4','L5','L6','Par_L1_GolEqui1','Par_L1_GolEqui2','Par_L2_GolEqui1','Par_L2_GolEqui2','Par_L3_GolEqui1','Par_L3_GolEqui2','Par_L4_GolEqui1','Par_L4_GolEqui2','Par_L5_GolEqui1','Par_L5_GolEqui2','Par_L6_GolEqui1','Par_L6_GolEqui2')
                  ->where('Part_id',$id)
                  ->get();
                  $ApuGrupoL = $Apuesta[0];                                                             
                  //dd($ApuGrupoA->A1);

                  $GrupoA = GrupoA::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('A_Partido','ASC')
                  ->get();
                  $GrupoB = GrupoB::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('B_Partido','ASC')
                  ->get();
                  $GrupoC = GrupoC::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('C_Partido','ASC')
                  ->get();      
                  $GrupoD = GrupoD::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('D_Partido','ASC')
                  ->get();  
                  $GrupoE = GrupoE::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('E_Partido','ASC')
                  ->get();  
                  $GrupoF = GrupoF::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('F_Partido','ASC')
                  ->get();  
                  $GrupoG = GrupoG::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('G_Partido','ASC')
                  ->get();  
                  $GrupoH = GrupoH::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('H_Partido','ASC')
                  ->get();             
//GRUPO I
                  $GrupoI = GrupoI::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('I_Partido','ASC')
                  ->get();   
// GRUPO J
                  $GrupoJ = GrupoJ::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('J_Partido','ASC')
                  ->get();   
// GRUPO K
                  $GrupoK = GrupoK::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('K_Partido','ASC')
                  ->get();   
// GRUPO L
                  $GrupoL = GrupoL::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('L_Partido','ASC')
                  ->get();   

                  $Master = Master::select('A1','A2','A3','A4','A5','A6','Mas_A1_GolEqui1','Mas_A1_GolEqui2','Mas_A2_GolEqui1','Mas_A2_GolEqui2','Mas_A3_GolEqui1','Mas_A3_GolEqui2','Mas_A4_GolEqui1','Mas_A4_GolEqui2','Mas_A5_GolEqui1','Mas_A5_GolEqui2','Mas_A6_GolEqui1','Mas_A6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoA = $Master[0];
                  
                  $Master = Master::select('B1','B2','B3','B4','B5','B6','Mas_B1_GolEqui1','Mas_B1_GolEqui2','Mas_B2_GolEqui1','Mas_B2_GolEqui2','Mas_B3_GolEqui1','Mas_B3_GolEqui2','Mas_B4_GolEqui1','Mas_B4_GolEqui2','Mas_B5_GolEqui1','Mas_B5_GolEqui2','Mas_B6_GolEqui1','Mas_B6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoB = $Master[0];      
                  
                  $Master = Master::select('C1','C2','C3','C4','C5','C6','Mas_C1_GolEqui1','Mas_C1_GolEqui2','Mas_C2_GolEqui1','Mas_C2_GolEqui2','Mas_C3_GolEqui1','Mas_C3_GolEqui2','Mas_C4_GolEqui1','Mas_C4_GolEqui2','Mas_C5_GolEqui1','Mas_C5_GolEqui2','Mas_C6_GolEqui1','Mas_C6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoC = $Master[0];     
                  
                  $Master = Master::select('D1','D2','D3','D4','D5','D6','Mas_D1_GolEqui1','Mas_D1_GolEqui2','Mas_D2_GolEqui1','Mas_D2_GolEqui2','Mas_D3_GolEqui1','Mas_D3_GolEqui2','Mas_D4_GolEqui1','Mas_D4_GolEqui2','Mas_D5_GolEqui1','Mas_D5_GolEqui2','Mas_D6_GolEqui1','Mas_D6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoD = $Master[0]; 
                  
                  $Master = Master::select('E1','E2','E3','E4','E5','E6','Mas_E1_GolEqui1','Mas_E1_GolEqui2','Mas_E2_GolEqui1','Mas_E2_GolEqui2','Mas_E3_GolEqui1','Mas_E3_GolEqui2','Mas_E4_GolEqui1','Mas_E4_GolEqui2','Mas_E5_GolEqui1','Mas_E5_GolEqui2','Mas_E6_GolEqui1','Mas_E6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoE = $Master[0]; 
                  
                  $Master = Master::select('F1','F2','F3','F4','F5','F6','Mas_F1_GolEqui1','Mas_F1_GolEqui2','Mas_F2_GolEqui1','Mas_F2_GolEqui2','Mas_F3_GolEqui1','Mas_F3_GolEqui2','Mas_F4_GolEqui1','Mas_F4_GolEqui2','Mas_F5_GolEqui1','Mas_F5_GolEqui2','Mas_F6_GolEqui1','Mas_F6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoF = $Master[0]; 

                  $Master = Master::select('G1','G2','G3','G4','G5','G6','Mas_G1_GolEqui1','Mas_G1_GolEqui2','Mas_G2_GolEqui1','Mas_G2_GolEqui2','Mas_G3_GolEqui1','Mas_G3_GolEqui2','Mas_G4_GolEqui1','Mas_G4_GolEqui2','Mas_G5_GolEqui1','Mas_G5_GolEqui2','Mas_G6_GolEqui1','Mas_G6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoG = $Master[0];      

                  $Master = Master::select('H1','H2','H3','H4','H5','H6','Mas_H1_GolEqui1','Mas_H1_GolEqui2','Mas_H2_GolEqui1','Mas_H2_GolEqui2','Mas_H3_GolEqui1','Mas_H3_GolEqui2','Mas_H4_GolEqui1','Mas_H4_GolEqui2','Mas_H5_GolEqui1','Mas_H5_GolEqui2','Mas_H6_GolEqui1','Mas_H6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoH = $Master[0];   
// GRUPO I
                  $Master = Master::select('I1','I2','I3','I4','I5','I6','Mas_I1_GolEqui1','Mas_I1_GolEqui2','Mas_I2_GolEqui1','Mas_I2_GolEqui2','Mas_I3_GolEqui1','Mas_I3_GolEqui2','Mas_I4_GolEqui1','Mas_I4_GolEqui2','Mas_I5_GolEqui1','Mas_I5_GolEqui2','Mas_I6_GolEqui1','Mas_I6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoI = $Master[0];   
// GRUPO J
                  $Master = Master::select('J1','J2','J3','J4','J5','J6','Mas_J1_GolEqui1','Mas_J1_GolEqui2','Mas_J2_GolEqui1','Mas_J2_GolEqui2','Mas_J3_GolEqui1','Mas_J3_GolEqui2','Mas_J4_GolEqui1','Mas_J4_GolEqui2','Mas_J5_GolEqui1','Mas_J5_GolEqui2','Mas_J6_GolEqui1','Mas_J6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoJ = $Master[0];   
//GRUPO K
                  $Master = Master::select('K1','K2','K3','K4','K5','K6','Mas_K1_GolEqui1','Mas_K1_GolEqui2','Mas_K2_GolEqui1','Mas_K2_GolEqui2','Mas_K3_GolEqui1','Mas_K3_GolEqui2','Mas_K4_GolEqui1','Mas_K4_GolEqui2','Mas_K5_GolEqui1','Mas_K5_GolEqui2','Mas_K6_GolEqui1','Mas_K6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoK = $Master[0];   
// GRUPO L
                  $Master = Master::select('L1','L2','L3','L4','L5','L6','Mas_L1_GolEqui1','Mas_L1_GolEqui2','Mas_L2_GolEqui1','Mas_L2_GolEqui2','Mas_L3_GolEqui1','Mas_L3_GolEqui2','Mas_L4_GolEqui1','Mas_L4_GolEqui2','Mas_L5_GolEqui1','Mas_L5_GolEqui2','Mas_L6_GolEqui1','Mas_L6_GolEqui2')
                  ->where('id',1)
                  ->get();
                  $ResuGrupoL = $Master[0];                                                                           


                  $i=1;
                  foreach ($GrupoA as $key => $value) {
                    $Partido = $GrupoA[$key]->A_Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                    $GrupoA[$key]['Apuesta'] = $ApuGrupoA->$Partido;
                    $AuxGrupoAEquipo1 = "Par_A".$i."_GolEqui1";
                    $AuxGrupoAEquipo2 = "Par_A".$i."_GolEqui2";
                    
                    $GrupoA[$key]['GolesEquipo1'] = $ApuGrupoA->$AuxGrupoAEquipo1;
                    $GrupoA[$key]['GolesEquipo2'] = $ApuGrupoA->$AuxGrupoAEquipo2;
                    
                    $AuxMasGrupoAEquipo1 = "Mas_A".$i."_GolEqui1";
                    $AuxMasGrupoAEquipo2 = "Mas_A".$i."_GolEqui2";
                    $GrupoA[$key]['MasterResultado'] = $ResuGrupoA->$Partido;
                    
                    
                    if ( (is_null($ResuGrupoA->$AuxMasGrupoAEquipo1) ) or (is_null($ResuGrupoA->$AuxMasGrupoAEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoA[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoA[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoA[$key]['MasterGolesEquipo1'] = $ResuGrupoA->$AuxMasGrupoAEquipo1;
                      $GrupoA[$key]['MasterGolesEquipo2'] = $ResuGrupoA->$AuxMasGrupoAEquipo2;                  
                    }

                      
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                    $i++;
                  }
              
                //dd($GrupoA);
                  $i=1;
                  foreach ($GrupoB as $key => $value) {
                    $Partido = $GrupoB[$key]->B_Partido;
                    $GrupoB[$key]['Apuesta'] = $ApuGrupoB->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoBEquipo1 = "Par_B".$i."_GolEqui1";
                    $AuxGrupoBEquipo2 = "Par_B".$i."_GolEqui2";
                    $GrupoB[$key]['GolesEquipo1'] = $ApuGrupoB->$AuxGrupoBEquipo1;
                    $GrupoB[$key]['GolesEquipo2'] = $ApuGrupoB->$AuxGrupoBEquipo2;

                    $AuxMasGrupoBEquipo1 = "Mas_B".$i."_GolEqui1";
                    $AuxMasGrupoBEquipo2 = "Mas_B".$i."_GolEqui2";
                    $GrupoB[$key]['MasterResultado'] = $ResuGrupoB->$Partido;

                    if ( (is_null($ResuGrupoB->$AuxMasGrupoBEquipo1) ) or (is_null($ResuGrupoB->$AuxMasGrupoBEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoB[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoB[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoB[$key]['MasterGolesEquipo1'] = $ResuGrupoB->$AuxMasGrupoBEquipo1;
                      $GrupoB[$key]['MasterGolesEquipo2'] = $ResuGrupoB->$AuxMasGrupoBEquipo2;                 
                    }                


                    $i++;                
                  }    
                  $i=1;  
                  foreach ($GrupoC as $key => $value) {
                    $Partido = $GrupoC[$key]->C_Partido;
                    $GrupoC[$key]['Apuesta'] = $ApuGrupoC->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                    $AuxGrupoCEquipo1 = "Par_C".$i."_GolEqui1";
                    $AuxGrupoCEquipo2 = "Par_C".$i."_GolEqui2";
                    $GrupoC[$key]['GolesEquipo1'] = $ApuGrupoC->$AuxGrupoCEquipo1;
                    $GrupoC[$key]['GolesEquipo2'] = $ApuGrupoC->$AuxGrupoCEquipo2;

                    $AuxMasGrupoCEquipo1 = "Mas_C".$i."_GolEqui1";
                    $AuxMasGrupoCEquipo2 = "Mas_C".$i."_GolEqui2";
                    $GrupoC[$key]['MasterResultado'] = $ResuGrupoC->$Partido;

                    if ( (is_null($ResuGrupoC->$AuxMasGrupoCEquipo1) ) or (is_null($ResuGrupoC->$AuxMasGrupoCEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoC[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoC[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoC[$key]['MasterGolesEquipo1'] = $ResuGrupoC->$AuxMasGrupoCEquipo1;
                      $GrupoC[$key]['MasterGolesEquipo2'] = $ResuGrupoC->$AuxMasGrupoCEquipo2;               
                    }                    



                    $i++;                    
                  }     
                  $i=1;
                  foreach ($GrupoD as $key => $value) {
                    $Partido = $GrupoD[$key]->D_Partido;
                    $GrupoD[$key]['Apuesta'] = $ApuGrupoD->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                    $AuxGrupoDEquipo1 = "Par_D".$i."_GolEqui1";
                    $AuxGrupoDEquipo2 = "Par_D".$i."_GolEqui2";
                    $GrupoD[$key]['GolesEquipo1'] = $ApuGrupoD->$AuxGrupoDEquipo1;
                    $GrupoD[$key]['GolesEquipo2'] = $ApuGrupoD->$AuxGrupoDEquipo2;

                    $AuxMasGrupoDEquipo1 = "Mas_D".$i."_GolEqui1";
                    $AuxMasGrupoDEquipo2 = "Mas_D".$i."_GolEqui2";
                    $GrupoD[$key]['MasterResultado'] = $ResuGrupoD->$Partido;

                    if ( (is_null($ResuGrupoD->$AuxMasGrupoDEquipo1) ) or (is_null($ResuGrupoD->$AuxMasGrupoDEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoD[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoD[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoD[$key]['MasterGolesEquipo1'] = $ResuGrupoD->$AuxMasGrupoDEquipo1;
                      $GrupoD[$key]['MasterGolesEquipo2'] = $ResuGrupoD->$AuxMasGrupoDEquipo2;              
                    }          


                    $i++;                   

                  }  
                  $i=1;
                  foreach ($GrupoE as $key => $value) {
                    $Partido = $GrupoE[$key]->E_Partido;
                    $GrupoE[$key]['Apuesta'] = $ApuGrupoE->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoEEquipo1 = "Par_E".$i."_GolEqui1";
                    $AuxGrupoEEquipo2 = "Par_E".$i."_GolEqui2";
                    $GrupoE[$key]['GolesEquipo1'] = $ApuGrupoE->$AuxGrupoEEquipo1;
                    $GrupoE[$key]['GolesEquipo2'] = $ApuGrupoE->$AuxGrupoEEquipo2;

                    $AuxMasGrupoEEquipo1 = "Mas_E".$i."_GolEqui1";
                    $AuxMasGrupoEEquipo2 = "Mas_E".$i."_GolEqui2";
                    $GrupoE[$key]['MasterResultado'] = $ResuGrupoE->$Partido;

                    if ( (is_null($ResuGrupoE->$AuxMasGrupoEEquipo1) ) or (is_null($ResuGrupoE->$AuxMasGrupoEEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoE[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoE[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoE[$key]['MasterGolesEquipo1'] = $ResuGrupoE->$AuxMasGrupoEEquipo1;
                      $GrupoE[$key]['MasterGolesEquipo2'] = $ResuGrupoE->$AuxMasGrupoEEquipo2;
                    }          
      

                    $i++;                      
                  }  
                  $i=1;
                  foreach ($GrupoF as $key => $value) {
                    $Partido = $GrupoF[$key]->F_Partido;
                    $GrupoF[$key]['Apuesta'] = $ApuGrupoF->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoFEquipo1 = "Par_F".$i."_GolEqui1";
                    $AuxGrupoFEquipo2 = "Par_F".$i."_GolEqui2";
                    $GrupoF[$key]['GolesEquipo1'] = $ApuGrupoF->$AuxGrupoFEquipo1;
                    $GrupoF[$key]['GolesEquipo2'] = $ApuGrupoF->$AuxGrupoFEquipo2;

                    $AuxMasGrupoFEquipo1 = "Mas_F".$i."_GolEqui1";
                    $AuxMasGrupoFEquipo2 = "Mas_F".$i."_GolEqui2";
                    $GrupoF[$key]['MasterResultado'] = $ResuGrupoF->$Partido;

                    if ( (is_null($ResuGrupoF->$AuxMasGrupoFEquipo1) ) or (is_null($ResuGrupoF->$AuxMasGrupoFEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoF[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoF[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoF[$key]['MasterGolesEquipo1'] = $ResuGrupoF->$AuxMasGrupoFEquipo1;
                      $GrupoF[$key]['MasterGolesEquipo2'] = $ResuGrupoF->$AuxMasGrupoFEquipo2;

                    }          

                    $i++;                      
                  }  
                  $i=1;
                  foreach ($GrupoG as $key => $value) {
                    $Partido = $GrupoG[$key]->G_Partido;
                    $GrupoG[$key]['Apuesta'] = $ApuGrupoG->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoGEquipo1 = "Par_G".$i."_GolEqui1";
                    $AuxGrupoGEquipo2 = "Par_G".$i."_GolEqui2";
                    $GrupoG[$key]['GolesEquipo1'] = $ApuGrupoG->$AuxGrupoGEquipo1;
                    $GrupoG[$key]['GolesEquipo2'] = $ApuGrupoG->$AuxGrupoGEquipo2;

                    $AuxMasGrupoGEquipo1 = "Mas_G".$i."_GolEqui1";
                    $AuxMasGrupoGEquipo2 = "Mas_G".$i."_GolEqui2";
                    $GrupoG[$key]['MasterResultado'] = $ResuGrupoG->$Partido;

                    if ( (is_null($ResuGrupoG->$AuxMasGrupoGEquipo1) ) or (is_null($ResuGrupoG->$AuxMasGrupoGEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoG[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoG[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoG[$key]['MasterGolesEquipo1'] = $ResuGrupoG->$AuxMasGrupoGEquipo1;
                      $GrupoG[$key]['MasterGolesEquipo2'] = $ResuGrupoG->$AuxMasGrupoGEquipo2;

                    }  



                    $i++;                      
                  }    
                  $i=1;              
                  foreach ($GrupoH as $key => $value) {
                    $Partido = $GrupoH[$key]->H_Partido;
                    $GrupoH[$key]['Apuesta'] = $ApuGrupoH->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoHEquipo1 = "Par_H".$i."_GolEqui1";
                    $AuxGrupoHEquipo2 = "Par_H".$i."_GolEqui2";
                    $GrupoH[$key]['GolesEquipo1'] = $ApuGrupoH->$AuxGrupoHEquipo1;
                    $GrupoH[$key]['GolesEquipo2'] = $ApuGrupoH->$AuxGrupoHEquipo2;

                    $AuxMasGrupoHEquipo1 = "Mas_H".$i."_GolEqui1";
                    $AuxMasGrupoHEquipo2 = "Mas_H".$i."_GolEqui2";
                    $GrupoH[$key]['MasterResultado'] = $ResuGrupoH->$Partido;

                    if ( (is_null($ResuGrupoH->$AuxMasGrupoHEquipo1) ) or (is_null($ResuGrupoH->$AuxMasGrupoHEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoH[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoH[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoH[$key]['MasterGolesEquipo1'] = $ResuGrupoH->$AuxMasGrupoHEquipo1;
                      $GrupoH[$key]['MasterGolesEquipo2'] = $ResuGrupoH->$AuxMasGrupoHEquipo2;  

                    }  
                                    
                  
                    $i++;                      
                  } 
// GRUPO I
                  $i=1;              
                  foreach ($GrupoI as $key => $value) {
                    $Partido = $GrupoI[$key]->I_Partido;
                    $GrupoI[$key]['Apuesta'] = $ApuGrupoI->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoIEquipo1 = "Par_I".$i."_GolEqui1";
                    $AuxGrupoIEquipo2 = "Par_I".$i."_GolEqui2";
                    $GrupoI[$key]['GolesEquipo1'] = $ApuGrupoI->$AuxGrupoIEquipo1;
                    $GrupoI[$key]['GolesEquipo2'] = $ApuGrupoI->$AuxGrupoIEquipo2;

                    $AuxMasGrupoIEquipo1 = "Mas_I".$i."_GolEqui1";
                    $AuxMasGrupoIEquipo2 = "Mas_I".$i."_GolEqui2";
                    $GrupoI[$key]['MasterResultado'] = $ResuGrupoI->$Partido;

                    if ( (is_null($ResuGrupoI->$AuxMasGrupoIEquipo1) ) or (is_null($ResuGrupoI->$AuxMasGrupoIEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoI[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoI[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoI[$key]['MasterGolesEquipo1'] = $ResuGrupoI->$AuxMasGrupoIEquipo1;
                      $GrupoI[$key]['MasterGolesEquipo2'] = $ResuGrupoI->$AuxMasGrupoIEquipo2;  

                    }  
                                    
                  
                    $i++;                      
                  }    
// GRUPO J
                  $i=1;              
                  foreach ($GrupoJ as $key => $value) {
                    $Partido = $GrupoJ[$key]->J_Partido;
                    $GrupoJ[$key]['Apuesta'] = $ApuGrupoJ->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoJEquipo1 = "Par_J".$i."_GolEqui1";
                    $AuxGrupoJEquipo2 = "Par_J".$i."_GolEqui2";
                    $GrupoJ[$key]['GolesEquipo1'] = $ApuGrupoJ->$AuxGrupoJEquipo1;
                    $GrupoJ[$key]['GolesEquipo2'] = $ApuGrupoJ->$AuxGrupoJEquipo2;

                    $AuxMasGrupoJEquipo1 = "Mas_J".$i."_GolEqui1";
                    $AuxMasGrupoJEquipo2 = "Mas_J".$i."_GolEqui2";
                    $GrupoJ[$key]['MasterResultado'] = $ResuGrupoJ->$Partido;

                    if ( (is_null($ResuGrupoJ->$AuxMasGrupoJEquipo1) ) or (is_null($ResuGrupoJ->$AuxMasGrupoJEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoJ[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoJ[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoJ[$key]['MasterGolesEquipo1'] = $ResuGrupoJ->$AuxMasGrupoJEquipo1;
                      $GrupoJ[$key]['MasterGolesEquipo2'] = $ResuGrupoJ->$AuxMasGrupoJEquipo2;  

                    }  
                                    
                  
                    $i++;                      
                  }          
// GRUPO K
                  $i=1;              
                  foreach ($GrupoK as $key => $value) {
                    $Partido = $GrupoK[$key]->K_Partido;
                    $GrupoK[$key]['Apuesta'] = $ApuGrupoK->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoKEquipo1 = "Par_K".$i."_GolEqui1";
                    $AuxGrupoKEquipo2 = "Par_K".$i."_GolEqui2";
                    $GrupoK[$key]['GolesEquipo1'] = $ApuGrupoK->$AuxGrupoKEquipo1;
                    $GrupoK[$key]['GolesEquipo2'] = $ApuGrupoK->$AuxGrupoKEquipo2;

                    $AuxMasGrupoKEquipo1 = "Mas_K".$i."_GolEqui1";
                    $AuxMasGrupoKEquipo2 = "Mas_K".$i."_GolEqui2";
                    $GrupoK[$key]['MasterResultado'] = $ResuGrupoK->$Partido;

                    if ( (is_null($ResuGrupoK->$AuxMasGrupoKEquipo1) ) or (is_null($ResuGrupoK->$AuxMasGrupoKEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoK[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoK[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoK[$key]['MasterGolesEquipo1'] = $ResuGrupoK->$AuxMasGrupoKEquipo1;
                      $GrupoK[$key]['MasterGolesEquipo2'] = $ResuGrupoK->$AuxMasGrupoKEquipo2;  

                    }  
                                    
                  
                    $i++;                      
                  }      
// GRUPO L
                  $i=1;              
                  foreach ($GrupoL as $key => $value) {
                    $Partido = $GrupoL[$key]->L_Partido;
                    $GrupoL[$key]['Apuesta'] = $ApuGrupoL->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";

                    $AuxGrupoLEquipo1 = "Par_L".$i."_GolEqui1";
                    $AuxGrupoLEquipo2 = "Par_L".$i."_GolEqui2";
                    $GrupoL[$key]['GolesEquipo1'] = $ApuGrupoL->$AuxGrupoLEquipo1;
                    $GrupoL[$key]['GolesEquipo2'] = $ApuGrupoL->$AuxGrupoLEquipo2;

                    $AuxMasGrupoLEquipo1 = "Mas_L".$i."_GolEqui1";
                    $AuxMasGrupoLEquipo2 = "Mas_L".$i."_GolEqui2";
                    $GrupoL[$key]['MasterResultado'] = $ResuGrupoL->$Partido;

                    if ( (is_null($ResuGrupoL->$AuxMasGrupoLEquipo1) ) or (is_null($ResuGrupoL->$AuxMasGrupoLEquipo2)) )
                    {
                     // echo "vacio goles ".$i." partido ".$GrupoA[$key]->A_Partido."<br>";
                      $GrupoL[$key]['MasterGolesEquipo1'] = "vacio";
                      $GrupoL[$key]['MasterGolesEquipo2'] = "vacio";
                    }
                    else
                    {
                      $GrupoL[$key]['MasterGolesEquipo1'] = $ResuGrupoL->$AuxMasGrupoLEquipo1;
                      $GrupoL[$key]['MasterGolesEquipo2'] = $ResuGrupoL->$AuxMasGrupoLEquipo2;  

                    }  
                                    
                  
                    $i++;                      
                  }                       
                 // dd($GrupoH);                
    /*              
                  foreach ($GrupoA as $key => $value) {
                    $Partido = $GrupoA[$key]->A_Partido;
                    $GrupoA[$key]['Apuesta'] = $ApuGrupoA->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }
                  foreach ($GrupoB as $key => $value) {
                    $Partido = $GrupoB[$key]->B_Partido;
                    $GrupoB[$key]['Apuesta'] = $ApuGrupoB->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }      
                  foreach ($GrupoC as $key => $value) {
                    $Partido = $GrupoC[$key]->C_Partido;
                    $GrupoC[$key]['Apuesta'] = $ApuGrupoC->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }     
                  foreach ($GrupoD as $key => $value) {
                    $Partido = $GrupoD[$key]->D_Partido;
                    $GrupoD[$key]['Apuesta'] = $ApuGrupoD->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }  
                  foreach ($GrupoE as $key => $value) {
                    $Partido = $GrupoE[$key]->E_Partido;
                    $GrupoE[$key]['Apuesta'] = $ApuGrupoE->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }  
                  foreach ($GrupoF as $key => $value) {
                    $Partido = $GrupoF[$key]->F_Partido;
                    $GrupoF[$key]['Apuesta'] = $ApuGrupoF->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }  
                  foreach ($GrupoG as $key => $value) {
                    $Partido = $GrupoG[$key]->G_Partido;
                    $GrupoG[$key]['Apuesta'] = $ApuGrupoG->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }    
                  foreach ($GrupoH as $key => $value) {
                    $Partido = $GrupoH[$key]->H_Partido;
                    $GrupoH[$key]['Apuesta'] = $ApuGrupoH->$Partido;
                    //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
                  }   
    */                                
            }
            else
            {
                $ExisteBoleta = NULL;
                $CantidadAciertos = NULL ;
                  $GrupoA = GrupoA::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('A_Partido','ASC')
                  ->get();
                  $GrupoB = GrupoB::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('B_Partido','ASC')
                  ->get();
                  $GrupoC = GrupoC::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('C_Partido','ASC')
                  ->get();      
                  $GrupoD = GrupoD::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('D_Partido','ASC')
                  ->get();  
                  $GrupoE = GrupoE::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('E_Partido','ASC')
                  ->get();  
                  $GrupoF = GrupoF::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('F_Partido','ASC')
                  ->get();  
                  $GrupoG = GrupoG::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('G_Partido','ASC')
                  ->get();  
                  $GrupoH = GrupoH::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('H_Partido','ASC')
                  ->get();    
                  $GrupoI = GrupoI::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('I_Partido','ASC')
                  ->get();    
                  $GrupoJ = GrupoJ::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('J_Partido','ASC')
                  ->get();    
                  $GrupoK = GrupoK::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('K_Partido','ASC')
                  ->get();    
                  $GrupoL = GrupoL::select('*')
                  ->where('deleted_at',null)
                  ->orderBy('L_Partido','ASC')
                  ->get();                     

            }      
          //  dd($GrupoA);
          return view('front.boleta.BoletaParti.VerBoletaParti',compact('ExisteBoleta','GrupoA','GrupoB','GrupoC','GrupoD','GrupoE','GrupoF','GrupoG','GrupoH','GrupoI','GrupoJ','GrupoK','GrupoL','participante','CantidadAciertos'));        
        }// cierro if si existe parti
        else
        {
          abort(404);

        }// cierro else si no existe parti


    }
public function guardarParcial(Request $request)
{
    if (!Auth::guard('participantes')->check()) {
        return response()->json(['error' => 'No autorizado'], 401);
    }

    $partId = Auth::guard('participantes')->user()->id;
    $datos = $request->except(['_token']);

    // Calcular resultado (L/E/V) para cada partido
    foreach (['A','B','C','D','E','F','G','H','I','J','K','L'] as $grupo) {
        for ($x = 1; $x <= 6; $x++) {
            $partido = $grupo . $x;
            $gol1 = "Par_{$grupo}{$x}_GolEqui1";
            $gol2 = "Par_{$grupo}{$x}_GolEqui2";
            if (isset($datos[$gol1]) && isset($datos[$gol2]) && $datos[$gol1] !== '' && $datos[$gol2] !== '') {
                if ($datos[$gol1] > $datos[$gol2]) {
                    $datos[$partido] = 'L';
                } elseif ($datos[$gol1] < $datos[$gol2]) {
                    $datos[$partido] = 'V';
                } else {
                    $datos[$partido] = 'E';
                }
            }
        }
    }

    $datos['Part_id'] = $partId;

    $boleta = BoletaParcial::where('Part_id', $partId)->first();
    if ($boleta) {
        $boleta->update($datos);
    } else {
        BoletaParcial::create($datos);
    }

    return response()->json(['success' => 'Borrador guardado correctamente']);
}
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
