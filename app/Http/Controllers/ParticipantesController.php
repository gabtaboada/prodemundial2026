<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreParticipanteRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Models\Http\Requests\ParticiCreateRequest;
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
class ParticipantesController extends Controller
{
public function __construct()
{
    //
}
    public function find(Route $route){

            $this->participante =Participantes::find($route->getParameter('admin/participantes'));
            $this->notFound($this->participante);///por si alguien quiere editar algo desde la url//

    }     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {

       if ( (trim($Request->get('ParticipanteBusqueda')) != null) or ( ( ($Request->get('pago')) != "Seleccione" ) and ( $Request->get('pago') != NULL )) )
        {  
//          echo "busca ".$Request->pago;
            $participantes = Participantes::Participante($Request->get('ParticipanteBusqueda'),$Request->get('pago'))
            ->join('aciertos','aciertos.APart_id','=','participantes.id')
          //  ->join('grupo_amigos','grupo_amigos.id','=','participantes.grupo_amigos_id')
            //->select('participantes.*','aciertos.APart_id','grupo_amigos.Grupo_amigos')
            ->select('participantes.*','aciertos.APart_id','aciertos.CantidadAciertos')
            ->orderBy('par_apellido','ASC')
            ->paginate(25);
        }  
        else
        {
//           echo "no busca";
            $participantes = Participantes::ParticipantesIndex();
        }        


        //dd($participantes);

        //Hago este foreach para ver si cada participante tiene cargada su apueta
        // y tambien averiguo si tiene grupo asignado//
        foreach ($participantes as $key => $value) {

            $apuestaParti = Apuestas::BuscarBoletas($participantes[$key]->id);
           // echo " BUSCO -> ".$participantes[$key]->id." ";
           // dd($apuestaParti);
            if($apuestaParti)
            {
             //   echo $participantes[$key]->par_apellido." tiene apuesta cargada <br>";
                $participantes[$key]->Apuesta = "Tiene";
            }
            else
            {
            //    echo $participantes[$key]->par_apellido." no tiene apuesta cargada <br> ";
                $participantes[$key]->Apuesta = NULL ;
            }
            if($participantes[$key]->grupo_amigos_id != "0")
            {
               // echo " id par ".$participantes[$key]->id."<br>";
                $Grupos = $participantes[$key]->grupo_amigos_id;
                $separadando = explode ("*", $Grupos);
                $CantidadArray = count ($separadando);
                    
                $j=0;
                $grupo=null;
                    for ($i=0;$i<$CantidadArray;$i++)
                        {

                            if ( $separadando[$i] != "0")
                            {

$VecGrupoAmigos = GrupoAmigos::find($separadando[$i]);
if($VecGrupoAmigos) {
    $grupo = $grupo." / ".$VecGrupoAmigos->Grupo_amigos;
}                     
                                 
                            }
                        }
                $participantes[$key]->GrupoAmigos = $grupo;
/*              
               $VecGrupoAmigos = GrupoAmigos::find($participantes[$key]->grupo_amigos_id); 
               $participantes[$key]->GrupoAmigos = $VecGrupoAmigos->Grupo_amigos;
               */
            }
        }
        //dd($participantes);
        $pago["Seleccione"] = "Realizo el pago";
        $pago["SI"] = "SI";
        $pago["NO"] = "NO";

        $pagaron = 0;

        $Pagaron = Participantes::select('*')
        ->where('deleted_at',NULL)
        ->where('par_Pago','SI')
        ->get();

        $TotalPagaron  = count($Pagaron);

/*
        foreach ($participantes as $key => $value) {

            if( $participantes[$key]->par_Pago == "SI")
            {
                $pagaron++; 
                
            }
        }
        */

        return view('admin.participantes.index',compact('participantes','pago','TotalPagaron'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $VecGrupoAmigos = GrupoAmigos::select('*')
        ->where('deleted_at',null)
        ->orderBy('Grupo_amigos','ASC')
        ->get();
        if(isset($VecGrupoAmigos[0]))
        {   
           // $GrupoAmigos[0] = "Seleccione el grupo de amigos";
            $i=1;
            foreach ($VecGrupoAmigos as $key => $value) {
               // $GrupoAmigos[$VecGrupoAmigos[$key]->id] = $VecGrupoAmigos[$key]->Grupo_amigos;
                $GrupoAmigos[$VecGrupoAmigos[$key]->id]['id'] = $VecGrupoAmigos[$key]->id;
                $GrupoAmigos[$VecGrupoAmigos[$key]->id]['GrupoAmigos'] = $VecGrupoAmigos[$key]->Grupo_amigos;
            }
        }
        else
        {
            $GrupoAmigos = null;
        }   
      //     dd($GrupoAmigos) ;
/*
          $materiasTOTALES = Materias::select ('id', 'materia')
            ->where('carrera_id','=',$carreraSel_id[0]->carrera_id)
            ->where('cuatrimestre','=',$HabilitarMaterias[0]->MateriasCuatrimestre)
            ->where('deleted_at','=',null)
            //->where('InscripcionAuto','=','1')/////////Esta linea solo te permite inscribir a las materias del primer cuatri (las primeras 6)
            ->lists('materia', 'id' );  
        foreach ($materiasTOTALES as $key =>$value ) {
           
           // echo " key ".$key." value ".$value."<br>";
            $materiaIND = Materias::find($key);  
            $materias[$key]['id'] = $key;
            $materias[$key]['materia'] = $materiasTOTALES[$key];
            $materias[$key]['mat_cond_especial'] = $materiaIND->mat_cond_especial;
        }
*/

        return view('admin.participantes.create',compact('GrupoAmigos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(ParticiCreateRequest $request)
    public function store(StoreParticipanteRequest $request)
    {
        //dd($request->input('CheckGrupoAmigo'));
if(!empty($request->input('CheckGrupoAmigo')))
{
    $AuxGrupo = $request->input('CheckGrupoAmigo')[0];
}
else
{
    $AuxGrupo = null;
}
        //dd($AuxGrupo);
        //Participantes::create($request->all());
        Participantes::create([
                            'par_name' => $request->par_name,
                            'par_apellido' => $request->par_apellido,
                            'par_tel' => $request->par_tel,
                            'email' =>  $request->email,
                            'password' =>  $request->password,
                            'grupo_amigos_id' => $AuxGrupo,
                            'par_Pago' => $request->par_Pago,

                       ]);
        $ParticipanteId = DB::table('participantes')->max('id');
        Aciertos::create([
                        'APart_id' =>  $ParticipanteId,
                        'CantidadAciertos' => NULL,
                         ]); 

        Session::flash('message','Usuario dado de alta correctamente');
        return Redirect::to('/admin/participantes');  
    }
    public function VerBoleta($id)
    {
        $VarApuesta = Apuestas::BuscarBoletas($id);
        $Apuesta = $VarApuesta[0];
        $Participante = Participantes::find($Apuesta->Part_id);
        //dd($Apuesta->A2);
        if($Participante->par_Pago == "SI")
        {
            //Session::forget('message-error');
            Session::flash('message','Esta boleta se encuentra paga');
        }
        else
        {
           // Session::forget('message');
            Session::flash('message-error','Aun no se realizo el pago de esta boleta');               
        }
        return view('admin.participantes.VerBoleta',compact('Apuesta','Participante'));  
    }    
    public function CargarBoleta($id)
    {
        $participante_id = $id;
        return view('admin.apuestas.CargarBoleta',compact('participante_id'));  
    }  
    public function DatosApuesta($id,$grupo,$numero,$partido)
    {
        $apuesta = Apuestas::find($id);

        $AuxGolesEquipo1 = "Par_".$partido."_GolEqui1";
        $AuxGolesEquipo2 = "Par_".$partido."_GolEqui2"; 

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

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;

                break;
            case 'B':
                    $DatosPartido = GrupoB::select('*')
                    ->where('B_Partido',$partido)
                    ->get();

                    $Equipo1 = $DatosPartido[0]->B_Equipo1;
                    $Equipo2 = $DatosPartido[0]->B_Equipo2;
                    $Bandera1 = $DatosPartido[0]->B_Bandera1;
                    $Bandera2 = $DatosPartido[0]->B_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;

                break;
            case 'C':
                    $DatosPartido = GrupoC::select('*')
                    ->where('C_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->C_Equipo1;
                    $Equipo2 = $DatosPartido[0]->C_Equipo2;
                    $Bandera1 = $DatosPartido[0]->C_Bandera1;
                    $Bandera2 = $DatosPartido[0]->C_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;

                break;
            case 'D':
                    $DatosPartido = GrupoD::select('*')
                    ->where('D_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->D_Equipo1;
                    $Equipo2 = $DatosPartido[0]->D_Equipo2;
                    $Bandera1 = $DatosPartido[0]->D_Bandera1;
                    $Bandera2 = $DatosPartido[0]->D_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;

                break;
            case 'E':
                    $DatosPartido = GrupoE::select('*')
                    ->where('E_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->E_Equipo1;
                    $Equipo2 = $DatosPartido[0]->E_Equipo2;
                    $Bandera1 = $DatosPartido[0]->E_Bandera1;
                    $Bandera2 = $DatosPartido[0]->E_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;

                break;       
            case 'F':
                    $DatosPartido = GrupoF::select('*')
                    ->where('F_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->F_Equipo1;
                    $Equipo2 = $DatosPartido[0]->F_Equipo2;
                    $Bandera1 = $DatosPartido[0]->F_Bandera1;
                    $Bandera2 = $DatosPartido[0]->F_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;                    
                break;    
            case 'G':
                    $DatosPartido = GrupoG::select('*')
                    ->where('G_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->G_Equipo1;
                    $Equipo2 = $DatosPartido[0]->G_Equipo2;
                    $Bandera1 = $DatosPartido[0]->G_Bandera1;
                    $Bandera2 = $DatosPartido[0]->G_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;                    
                break;    
            case 'H':
                    $DatosPartido = GrupoH::select('*')
                    ->where('H_Partido',$partido)
                    ->get();
                    $Equipo1 = $DatosPartido[0]->H_Equipo1;
                    $Equipo2 = $DatosPartido[0]->H_Equipo2;
                    $Bandera1 = $DatosPartido[0]->H_Bandera1;
                    $Bandera2 = $DatosPartido[0]->H_Bandera2;

                    $GolesEquipo1 = $apuesta->$AuxGolesEquipo1;
                    $GolesEquipo2 = $apuesta->$AuxGolesEquipo2;                    
                break;    


        }
        return Response::json([$partido,$apuesta->$partido,$Equipo1,$Equipo2,$Bandera1,$Bandera2,$GolesEquipo1,$GolesEquipo2]);

    }  
    public function ConfirmarEditarApuesta(request $request)
    {
        //echo " ID apuesta ".$request->id."partido ".$request->GrupoPartido." resultado ".$request->resultadoEdit." Grupo ".$request->grupo;
        $Apuesta = Apuestas::find($request->id);

        $GrupoPartido = $request->GrupoPartido;

        $AuxGolesEquipo1 = "Par_".$GrupoPartido."_GolEqui1";
        $AuxGolesEquipo2 = "Par_".$GrupoPartido."_GolEqui2"; 

        //echo " ".$Apuesta->$GrupoPartido;
        $Apuesta->$GrupoPartido = $request->resultadoEdit;
        $Apuesta->$AuxGolesEquipo1 = $request->GolesEquipo1;
        $Apuesta->$AuxGolesEquipo2 = $request->GolesEquipo2;
        $Apuesta->save();
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


        }    
          if($Apuesta->save())
          {
            $mensaje = "exito";
            Session::flash('message','Actualización correcta. Partido : '.$request->GrupoPartido." ::: ".$Equipo1." Vs ".$Equipo2);   
          }
          else
          {
            $mensaje = "error";
          }
          return response ()->json([$mensaje,$Apuesta->Part_id]);  

    }
    public function ObtengoPago($id)
    {
      $participante = Participantes::find($id);
      return response ()->json([$participante->par_Pago]);  
    }
    public function confirmarActualizarPago(request $request)
    {
      //echo "Pago ".$request->par_Pago." id participante ".$request->id;
      $participante = Participantes::find($request->id);
      switch ($request->par_Pago) {
        case 'NO':
            //echo "request no";
            $participante->par_Pago = "NO";
            $participante->save();
            $participante = Participantes::find($request->id);
            //echo "request no<br>";
            //echo "fecha ".$participante->updated_at."updated <br>";     
            $fecha = Carbon::createFromFormat('Y-m-d H:i:s', $participante->updated_at)->format('Y-m-d');
            //echo " fecha formato ".$fecha;    
            $participante->par_FechaPago = null;
            $participante->save();
          break;
        case 'SI':
            $participante->par_Pago = "SI";

            $participante->save();
            $participante = Participantes::find($request->id);
            //echo "request si<br>";
            //echo "fecha ".$participante->updated_at."updated <br>"; 
            $fecha = Carbon::createFromFormat('Y-m-d H:i:s', $participante->updated_at)->format('Y-m-d');   
            //echo " fecha formato ".$fecha;    
            $participante->par_FechaPago = $fecha;
            $participante->save();
          break;
      }
          if($participante->save())
          {
            $mensaje = "exito";
            Session::flash('message','Actualización correcta');   
          }
          else
          {
            $mensaje = "error";
          }
       return response ()->json([$mensaje]);  
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
        $participante = Participantes::find($id);
        $VecGrupoAmigos = GrupoAmigos::select('*')
        ->where('deleted_at',null)
        ->orderBy('Grupo_amigos','ASC')
        ->get();
        if(isset($VecGrupoAmigos[0]))
        {   
           // $GrupoAmigos[0] = "Seleccione el grupo de amigos";
            $i=1;
            foreach ($VecGrupoAmigos as $key => $value) {
               // $GrupoAmigos[$VecGrupoAmigos[$key]->id] = $VecGrupoAmigos[$key]->Grupo_amigos;
                $GrupoAmigos[$VecGrupoAmigos[$key]->id]['id'] = $VecGrupoAmigos[$key]->id;
                $GrupoAmigos[$VecGrupoAmigos[$key]->id]['GrupoAmigos'] = $VecGrupoAmigos[$key]->Grupo_amigos;
            }
        }
        else
        {
            $GrupoAmigos = null;
        }   
       // dd($GrupoAmigos);
        return view('admin.participantes.edit',compact('participante','GrupoAmigos'));
    }
    public function ObtengoGrupos($id)
    {
        $participante = Participantes::find($id);

        
        $AuxGrupos = $participante->grupo_amigos_id;
        $separado_por_comas = explode ("*", $AuxGrupos);
        $CantidadArray = count ($separado_por_comas);
        // dd($separado_por_comas);
        if($AuxGrupos!="0")//Si es distinto de 0, separo los valores
        {
            $j=0;
            if ( $CantidadArray > 1 )
            {
                for ($i=1;$i<$CantidadArray;$i++)
                    {
                        $AuxGrupoSeleccionado = GrupoAmigos::find($separado_por_comas[$i]);
                        $VectorGruposSeleccionados[$AuxGrupoSeleccionado->id] = $AuxGrupoSeleccionado->Grupo_amigos;
                      // $j++;
                    }                
            }
            else
            {
                $VectorGruposSeleccionados ="";
            }

        }
        else
        {//Si es 0 es xq no tiene Grupos
            $VectorGruposSeleccionados ="";
        }  
        $cantidadSeleccionados = count($VectorGruposSeleccionados);   
        $GrupoTotales = GrupoAmigos::select("id","Grupo_amigos")
        ->where('deleted_at',null)
        ->get();
        $flag = 0 ;
        foreach ($GrupoTotales as $key => $value) {
            $flag = 0;
           // echo " key ".$key."<br>";
            if( $VectorGruposSeleccionados != "")
            {

                 foreach ($VectorGruposSeleccionados as $keySel => $keySel) {
                    if( $GrupoTotales[$key]->id == $keySel)
                    {
                        $flag =1;
                    }
                }               
            }

            if( $flag == 1)
            {
                $GrupoTotales[$key]['seleccionado'] = 1 ;
            }
            else
            {
                $GrupoTotales[$key]['seleccionado'] = 0 ;
            }
        }
      //  dd($GrupoTotales);
        //dd($VectorGruposSeleccionados);
        return Response::json([$GrupoTotales]);
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

      

        if(!empty($request->input('CheckGrupoAmigo'))  )
        {
            $AuxGrupo = "0" ;
            foreach ($request->input('CheckGrupoAmigo') as $Grupo)
            {
                 $AuxGrupo  = $AuxGrupo."*".$Grupo;
            }
        }
        else
        {
            $AuxGrupo = "0";
        }
        //dd($AuxGrupo);
        //Participantes::create($request->all());

       // $request['grupo_amigos_id'] = $AuxGrupo;

        $VectorUpdate['par_name'] = $request->par_name;
        $VectorUpdate['par_apellido'] = $request->par_apellido;
        $VectorUpdate['grupo_amigos_id'] = $AuxGrupo;
        $VectorUpdate['par_tel'] = $request->par_tel;
        $VectorUpdate['email'] = $request->email;
        $VectorUpdate['password'] = $request->password;

        //dd($VectorUpdate);
        $participante =Participantes::find($id);
        $participante->fill($VectorUpdate);
        $participante->save();
        
        Session::flash('message','Participante actualizado');
        return Redirect::to('/admin/participantes');        
            
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
