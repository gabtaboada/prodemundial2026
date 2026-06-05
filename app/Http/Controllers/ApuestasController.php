<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Http\Requests\ApuCreateRequest;
use App\Models\Http\Requests\ApuUpdateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use App\Models\Participantes;
use App\Models\Apuestas;

class ApuestasController extends Controller
{
    public function __construct (){

        $this->middleware('auth');
 
        if( Auth::administrador()->get())
        {
            //return('admin');
            //$this->middleware('admin'); 
        }
        

        if( Auth::participantes()->get())
        {
          $this->middleware('participantes'); 
            //return Redirect::to('/');       
        }        
 
       // $this->beforeFilter('@find',['only' =>['edit', 'update','destroy'] ]);


    }   
    public function find(Route $route){

            $this->admin =Master::find($route->getParameter('admin/participantes'));
            $this->notFound($this->admin);///por si alguien quiere editar algo desde la url//

    } 
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('admin.apuestas.create');
    }
    public function cargarBoleta($id)
    {
       $participante_id =$id; 
       $participante = Participantes::find($id);
       $participante_nombre = $participante->par_apellido." ".$participante->par_name;
       return view('admin.apuestas.create',compact('participante_id','participante_nombre'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApuCreateRequest $request)
    {
        //dd($request->all());
        Apuestas::create($request->all());
        Session::flash('message','Boleta Cargada correctamente');
        return Redirect::to('/admin/participantes');       
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
