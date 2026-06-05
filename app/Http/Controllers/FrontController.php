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
use App\Models\GrupoI;
use App\Models\GrupoJ;
use App\Models\GrupoK;
use App\Models\GrupoL;

class FrontController extends Controller
{
    public function __construct()
    {
        //
    } 
    public function find(Route $route){

            $this->user = Master::find($route->getParameter(''));
            $this->notFound($this->user);///por si alguien quiere editar algo desde la url//

    } 
    public function index()
    {
        //dd(Auth::user()->id);
        function detect()
          {
              $browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
              $os=array("WIN","MAC","LINUX");
           
              # definimos unos valores por defecto para el navegador y el sistema operativo
              $info['browser'] = "OTHER";
              $info['os'] = "OTHER";
           
              # buscamos el navegador con su sistema operativo
              foreach($browser as $parent)
              {
                  $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
                  $f = $s + strlen($parent);
                  $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
                  $version = preg_replace('/[^0-9,.]/','',$version);
                  if ($s)
                  {
                      $info['browser'] = $parent;
                      $info['version'] = $version;
                  }
              }
           
              # obtenemos el sistema operativo
              foreach($os as $val)
              {
                  if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
                      $info['os'] = $val;
              }
           
              # devolvemos el array de valores
              return $info;
          }
      
          $info = detect();
          $navegador = $info["browser"];
          Session(['navegador' => $navegador]);
          function getUserLanguage() 
          {  
            $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
            return $idioma;  
          } 
          //Almacenamos dicho idioma en una variable 
          $user_language=getUserLanguage();    
        
        $UltimosResultados = UltimosResultados::select('*')
        ->where('deleted_at',null)
        ->orderBy('id','DESC')
        ->take(3)// solo los últimos 3
        ->get();
        //dd($UltimosResultados);
        if (!isset($UltimosResultados[0]))
        {
          $UltimosResultados = null;
        }
        else
        {

          foreach ($UltimosResultados as $key => $value) 
          {
                $Equipo1 = '';
                $Equipo2 = '';
                $Bandera1 = '';
                $Bandera2 = ''; 
                $partido = $UltimosResultados[$key]->Ur_partido;
                switch ($UltimosResultados[$key]->Ur_grupo) 
                {

                      case 'A':
                              $DatosPartido = GrupoA::select('*')
                              ->where('A_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->A_Equipo1;
                              $Equipo2 = $DatosPartido[0]->A_Equipo2;
                              $Bandera1 = $DatosPartido[0]->A_Bandera1;
                              $Bandera2 = $DatosPartido[0]->A_Bandera2;
                          break;
                      case 'B':

                              $DatosPartido = GrupoB::select('*')
                              ->where('B_Partido',$partido)
                              ->get();

                              $Equipo1 = $DatosPartido[0]->B_Equipo1;
                              $Equipo2 = $DatosPartido[0]->B_Equipo2;
                              $Bandera1 = $DatosPartido[0]->B_Bandera1;
                              $Bandera2 = $DatosPartido[0]->B_Bandera2;
                              
                          break;
                      case 'C':
                              $DatosPartido = GrupoC::select('*')
                              ->where('C_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->C_Equipo1;
                              $Equipo2 = $DatosPartido[0]->C_Equipo2;
                              $Bandera1 = $DatosPartido[0]->C_Bandera1;
                              $Bandera2 = $DatosPartido[0]->C_Bandera2;
                          break;
                      case 'D':
                              $DatosPartido = GrupoD::select('*')
                              ->where('D_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->D_Equipo1;
                              $Equipo2 = $DatosPartido[0]->D_Equipo2;
                              $Bandera1 = $DatosPartido[0]->D_Bandera1;
                              $Bandera2 = $DatosPartido[0]->D_Bandera2;
                          break;
                      case 'E':
                              $DatosPartido = GrupoE::select('*')
                              ->where('E_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->E_Equipo1;
                              $Equipo2 = $DatosPartido[0]->E_Equipo2;
                              $Bandera1 = $DatosPartido[0]->E_Bandera1;
                              $Bandera2 = $DatosPartido[0]->E_Bandera2;
                          break;       
                      case 'F':
                              $DatosPartido = GrupoF::select('*')
                              ->where('F_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->F_Equipo1;
                              $Equipo2 = $DatosPartido[0]->F_Equipo2;
                              $Bandera1 = $DatosPartido[0]->F_Bandera1;
                              $Bandera2 = $DatosPartido[0]->F_Bandera2;
                          break;    
                      case 'G':
                              $DatosPartido = GrupoG::select('*')
                              ->where('G_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->G_Equipo1;
                              $Equipo2 = $DatosPartido[0]->G_Equipo2;
                              $Bandera1 = $DatosPartido[0]->G_Bandera1;
                              $Bandera2 = $DatosPartido[0]->G_Bandera2;
                          break;    
                      case 'H':
                              $DatosPartido = GrupoH::select('*')
                              ->where('H_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->H_Equipo1;
                              $Equipo2 = $DatosPartido[0]->H_Equipo2;
                              $Bandera1 = $DatosPartido[0]->H_Bandera1;
                              $Bandera2 = $DatosPartido[0]->H_Bandera2;
                          break;   
                      case 'I':
                              $DatosPartido = GrupoI::select('*')
                              ->where('I_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->I_Equipo1;
                              $Equipo2 = $DatosPartido[0]->I_Equipo2;
                              $Bandera1 = $DatosPartido[0]->I_Bandera1;
                              $Bandera2 = $DatosPartido[0]->I_Bandera2;
                          break;  
                      case 'J':
                              $DatosPartido = GrupoJ::select('*')
                              ->where('J_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->J_Equipo1;
                              $Equipo2 = $DatosPartido[0]->J_Equipo2;
                              $Bandera1 = $DatosPartido[0]->J_Bandera1;
                              $Bandera2 = $DatosPartido[0]->J_Bandera2;
                          break;         
                      case 'K':
                              $DatosPartido = GrupoK::select('*')
                              ->where('K_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->K_Equipo1;
                              $Equipo2 = $DatosPartido[0]->K_Equipo2;
                              $Bandera1 = $DatosPartido[0]->K_Bandera1;
                              $Bandera2 = $DatosPartido[0]->K_Bandera2;
                          break;                    
                      case 'L':
                              $DatosPartido = GrupoL::select('*')
                              ->where('L_Partido',$partido)
                              ->get();
                              $Equipo1 = $DatosPartido[0]->L_Equipo1;
                              $Equipo2 = $DatosPartido[0]->L_Equipo2;
                              $Bandera1 = $DatosPartido[0]->L_Bandera1;
                              $Bandera2 = $DatosPartido[0]->L_Bandera2;
                          break;                                                                                        

                }    //cierro switch
                $UltimosResultados[$key]['Equipo1'] = $Equipo1;
                $UltimosResultados[$key]['Equipo2'] = $Equipo2;
                $UltimosResultados[$key]['Bandera1'] = $Bandera1;
                $UltimosResultados[$key]['Bandera2'] = $Bandera2;
                
                $ResultadoLetras = '';
                switch ($UltimosResultados[$key]->Ur_resultado) {
                  case 'L':
                          $ResultadoLetras ="Local";
                    break;
                  case 'E':
                          $ResultadoLetras ="Empate";
                          $UltimosResultados[$key]['ganador'] = NULL;
                    break;
                  case 'V':
                          $ResultadoLetras ="Visitante";
                    break;                    
                }
                $UltimosResultados[$key]['resultado'] = $UltimosResultados[$key]->Ur_resultado;
                $UltimosResultados[$key]['resultadoLetras'] = $ResultadoLetras;

             
                    //  echo "resultado letras ".$ResultadoLetras. "<br>";
          }//cierro foreach
        }//cierro else
  //dd($UltimosResultados);      

        //$contador = count($UltimosResultados);//claude
        /* // este bloque no va porquelimito con take(3)
        $contador = $UltimosResultados ? count($UltimosResultados) : 0;
        if($contador < 3)
        {
          for($i=0;$i<3;$i++)
          {
            if(!isset($UltimosResultados[$i]))
            {
              $UltimosResultados[$i] = null;   
            }  
          }
          
        }
      */
        //dd($UltimosResultados[0]);
        // agregá esto después
if ($UltimosResultados) {
    $UltimosResultados = $UltimosResultados->filter(function($item) {
        return $item !== null && $item->Equipo1 != '';
    })->values();
} else {
    $UltimosResultados = collect(); // colección vacía
}
        return view('front.index',compact('navegador','UltimosResultados'));
    }
    public function inicio()
    {
        $UltimosResultados = UltimosResultados::select('*')
        ->where('deleted_at',null)
        ->orderBy('id')
        ->get();
        
        //dd($UltimosResultados);
      return view('front.index');
    }    
    public function resultados()
    {
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
              //GRUPO I//
              $Master = Master::select('I1','I2','I3','I4','I5','I6','Mas_I1_GolEqui1','Mas_I1_GolEqui2','Mas_I2_GolEqui1','Mas_I2_GolEqui2','Mas_I3_GolEqui1','Mas_I3_GolEqui2','Mas_I4_GolEqui1','Mas_I4_GolEqui2','Mas_I5_GolEqui1','Mas_I5_GolEqui2','Mas_I6_GolEqui1','Mas_I6_GolEqui2')
              ->where('id',1)
              ->get();
              $ResuGrupoI = $Master[0];    
              // GRUPO J//
              $Master = Master::select('J1','J2','J3','J4','J5','J6','Mas_J1_GolEqui1','Mas_J1_GolEqui2','Mas_J2_GolEqui1','Mas_J2_GolEqui2','Mas_J3_GolEqui1','Mas_J3_GolEqui2','Mas_J4_GolEqui1','Mas_J4_GolEqui2','Mas_J5_GolEqui1','Mas_J5_GolEqui2','Mas_J6_GolEqui1','Mas_J6_GolEqui2')
              ->where('id',1)
              ->get();
              $ResuGrupoJ = $Master[0];   
              // GRUPO K//
              $Master = Master::select('K1','K2','K3','K4','K5','K6','Mas_K1_GolEqui1','Mas_K1_GolEqui2','Mas_K2_GolEqui1','Mas_K2_GolEqui2','Mas_K3_GolEqui1','Mas_K3_GolEqui2','Mas_K4_GolEqui1','Mas_K4_GolEqui2','Mas_K5_GolEqui1','Mas_K5_GolEqui2','Mas_K6_GolEqui1','Mas_K6_GolEqui2')
              ->where('id',1)
              ->get();
              $ResuGrupoK = $Master[0];                 
              // GRUPO L//
              $Master = Master::select('L1','L2','L3','L4','L5','L6','Mas_L1_GolEqui1','Mas_L1_GolEqui2','Mas_L2_GolEqui1','Mas_L2_GolEqui2','Mas_L3_GolEqui1','Mas_L3_GolEqui2','Mas_L4_GolEqui1','Mas_L4_GolEqui2','Mas_L5_GolEqui1','Mas_L5_GolEqui2','Mas_L6_GolEqui1','Mas_L6_GolEqui2')
              ->where('id',1)
              ->get();              
              $ResuGrupoL = $Master[0];   
      //dd($ResuGrupoA->A1);

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
        $GrupoA[$key]['Resultado'] = $ResuGrupoA->$Partido;

        $AuxGrupoAEquipo1 = "Mas_A".$i."_GolEqui1";
        $AuxGrupoAEquipo2 = "Mas_A".$i."_GolEqui2";
        $GrupoA[$key]['GolesEquipo1'] = $ResuGrupoA->$AuxGrupoAEquipo1;
        $GrupoA[$key]['GolesEquipo2'] = $ResuGrupoA->$AuxGrupoAEquipo2;
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;
      }
      $i=1;
      foreach ($GrupoB as $key => $value) {
        $Partido = $GrupoB[$key]->B_Partido;
        $GrupoB[$key]['Resultado'] = $ResuGrupoB->$Partido;

        $AuxGrupoBEquipo1 = "Mas_B".$i."_GolEqui1";
        $AuxGrupoBEquipo2 = "Mas_B".$i."_GolEqui2";
        $GrupoB[$key]['GolesEquipo1'] = $ResuGrupoB->$AuxGrupoBEquipo1;
        $GrupoB[$key]['GolesEquipo2'] = $ResuGrupoB->$AuxGrupoBEquipo2;

        $i++;
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
      }      
      $i=1;
      foreach ($GrupoC as $key => $value) {
        $Partido = $GrupoC[$key]->C_Partido;
        $GrupoC[$key]['Resultado'] = $ResuGrupoC->$Partido;

        $AuxGrupoCEquipo1 = "Mas_C".$i."_GolEqui1";
        $AuxGrupoCEquipo2 = "Mas_C".$i."_GolEqui2";
        $GrupoC[$key]['GolesEquipo1'] = $ResuGrupoC->$AuxGrupoCEquipo1;
        $GrupoC[$key]['GolesEquipo2'] = $ResuGrupoC->$AuxGrupoCEquipo2;

        $i++;
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
      }     
      $i=1;
      foreach ($GrupoD as $key => $value) {
        $Partido = $GrupoD[$key]->D_Partido;
        $GrupoD[$key]['Resultado'] = $ResuGrupoD->$Partido;

        $AuxGrupoDEquipo1 = "Mas_D".$i."_GolEqui1";
        $AuxGrupoDEquipo2 = "Mas_D".$i."_GolEqui2";
        $GrupoD[$key]['GolesEquipo1'] = $ResuGrupoD->$AuxGrupoDEquipo1;
        $GrupoD[$key]['GolesEquipo2'] = $ResuGrupoD->$AuxGrupoDEquipo2;

        $i++;
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
      }  
      $i=1;
      foreach ($GrupoE as $key => $value) {
        $Partido = $GrupoE[$key]->E_Partido;
        $GrupoE[$key]['Resultado'] = $ResuGrupoE->$Partido;

        $AuxGrupoEEquipo1 = "Mas_E".$i."_GolEqui1";
        $AuxGrupoEEquipo2 = "Mas_E".$i."_GolEqui2";
        $GrupoE[$key]['GolesEquipo1'] = $ResuGrupoE->$AuxGrupoEEquipo1;
        $GrupoE[$key]['GolesEquipo2'] = $ResuGrupoE->$AuxGrupoEEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }  
      $i=1;
      foreach ($GrupoF as $key => $value) {
        $Partido = $GrupoF[$key]->F_Partido;
        $GrupoF[$key]['Resultado'] = $ResuGrupoF->$Partido;

        $AuxGrupoFEquipo1 = "Mas_F".$i."_GolEqui1";
        $AuxGrupoFEquipo2 = "Mas_F".$i."_GolEqui2";
        $GrupoF[$key]['GolesEquipo1'] = $ResuGrupoF->$AuxGrupoFEquipo1;
        $GrupoF[$key]['GolesEquipo2'] = $ResuGrupoF->$AuxGrupoFEquipo2;

        $i++;
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
      }  
      $i=1;
      foreach ($GrupoG as $key => $value) {
        $Partido = $GrupoG[$key]->G_Partido;
        $GrupoG[$key]['Resultado'] = $ResuGrupoG->$Partido;

        $AuxGrupoGEquipo1 = "Mas_G".$i."_GolEqui1";
        $AuxGrupoGEquipo2 = "Mas_G".$i."_GolEqui2";
        $GrupoG[$key]['GolesEquipo1'] = $ResuGrupoG->$AuxGrupoGEquipo1;
        $GrupoG[$key]['GolesEquipo2'] = $ResuGrupoG->$AuxGrupoGEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }    
      $i=1;
      foreach ($GrupoH as $key => $value) {
        $Partido = $GrupoH[$key]->H_Partido;
        $GrupoH[$key]['Resultado'] = $ResuGrupoH->$Partido;

        $AuxGrupoHEquipo1 = "Mas_H".$i."_GolEqui1";
        $AuxGrupoHEquipo2 = "Mas_H".$i."_GolEqui2";
        $GrupoH[$key]['GolesEquipo1'] = $ResuGrupoH->$AuxGrupoHEquipo1;
        $GrupoH[$key]['GolesEquipo2'] = $ResuGrupoH->$AuxGrupoHEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }                        
//GRUPO I
      foreach ($GrupoI as $key => $value) {
        $Partido = $GrupoI[$key]->I_Partido;
        $GrupoI[$key]['Resultado'] = $ResuGrupoI->$Partido;

        $AuxGrupoIEquipo1 = "Mas_I".$i."_GolEqui1";
        $AuxGrupoIEquipo2 = "Mas_I".$i."_GolEqui2";
        $GrupoI[$key]['GolesEquipo1'] = $ResuGrupoI->$AuxGrupoIEquipo1;
        $GrupoI[$key]['GolesEquipo2'] = $ResuGrupoI->$AuxGrupoIEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }     
// GRUPO J
      foreach ($GrupoJ as $key => $value) {
        $Partido = $GrupoJ[$key]->J_Partido;
        $GrupoJ[$key]['Resultado'] = $ResuGrupoJ->$Partido;

        $AuxGrupoJEquipo1 = "Mas_J".$i."_GolEqui1";
        $AuxGrupoJEquipo2 = "Mas_J".$i."_GolEqui2";
        $GrupoJ[$key]['GolesEquipo1'] = $ResuGrupoJ->$AuxGrupoJEquipo1;
        $GrupoJ[$key]['GolesEquipo2'] = $ResuGrupoJ->$AuxGrupoJEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }       
// GRUPO K        
      foreach ($GrupoK as $key => $value) {
        $Partido = $GrupoK[$key]->K_Partido;
        $GrupoK[$key]['Resultado'] = $ResuGrupoK->$Partido;

        $AuxGrupoKEquipo1 = "Mas_K".$i."_GolEqui1";
        $AuxGrupoKEquipo2 = "Mas_K".$i."_GolEqui2";
        $GrupoK[$key]['GolesEquipo1'] = $ResuGrupoK->$AuxGrupoKEquipo1;
        $GrupoK[$key]['GolesEquipo2'] = $ResuGrupoK->$AuxGrupoKEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }          
// GRUPO L
      foreach ($GrupoL as $key => $value) {
        $Partido = $GrupoL[$key]->L_Partido;
        $GrupoL[$key]['Resultado'] = $ResuGrupoL->$Partido;

        $AuxGrupoLEquipo1 = "Mas_L".$i."_GolEqui1";
        $AuxGrupoLEquipo2 = "Mas_L".$i."_GolEqui2";
        $GrupoL[$key]['GolesEquipo1'] = $ResuGrupoL->$AuxGrupoLEquipo1;
        $GrupoL[$key]['GolesEquipo2'] = $ResuGrupoL->$AuxGrupoLEquipo2;        
        //echo " key ".$key. " value ".$GrupoA[$key]->A_Partido."<br>";
        $i++;        
      }                
     // dd($GrupoA);
      $flagCarga = \App\Models\Flags::where("bandera", "HabilitarCarga")->first();
      $cargaDeshabilitada = ($flagCarga && $flagCarga->estado == 0);

      return view("front.resultados",compact("ResuGrupoA","ResuGrupoB","ResuGrupoC","GrupoA","GrupoB","GrupoC","GrupoD","GrupoE","GrupoF","GrupoG","GrupoH","GrupoI","GrupoJ","GrupoK","GrupoL","cargaDeshabilitada"));
      //return view('front.resultados',compact('Resultados','ResuGrupoA','ResuGrupoB','ResuGrupoC','GrupoA','GrupoB','GrupoC','GrupoD','GrupoE','GrupoF','GrupoG','GrupoH'));
    }    

   

    public function posiciones()
    {
        $Posiciones = Aciertos::select('aciertos.CantidadAciertos','participantes.*')
        ->join('participantes','participantes.id','=','aciertos.APart_id')
        ->where('aciertos.deleted_at',null)
        ->where('aciertos.CantidadAciertos','>',0)
        ->orderBy('aciertos.CantidadAciertos','ASC')
        ->paginate(25);
      //  dd($Posiciones);
        return view('front.posiciones');
    }    
    public function pronosticos()
    {
        return view('front.pronosticos');
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
