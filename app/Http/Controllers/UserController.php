<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Http\Requests\UserCreateRequest;
use App\Models\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
use Auth;
use App\Models\User;

class UserController extends Controller
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
            //$this->middleware('admin'); 
        }
        

        if( Auth::participantes()->get())
        {
          $this->middleware('participantes'); 
            //return Redirect::to('/');       
        }        
 
        //$this->beforeFilter('@find',['only' =>['edit', 'update','destroy'] ]);


    }   
    public function find(Route $route){

            $this->admin =Master::find($route->getParameter('admin/usuarios'));
            $this->notFound($this->admin);///por si alguien quiere editar algo desde la url//

    } 


    public function index()
    {
        $users = User::paginate(25);
        return view('admin.usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());

        Session::flash('message','Usuario dado de alta correctamente');
        return Redirect::to('/admin/usuarios');     
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
 
        $user = User::find($id);
        /*
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
        }    */
       // dd($GrupoAmigos);
       // echo "hola";
      // return view('admin.usuarios.edit',compact('participante','GrupoAmigos'));
       
         return view('admin.usuarios.edit',compact('user'));
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
        //echo "update";
       /* echo "request ".$request->name;
        echo "request ".$request->apellido;
        echo "request ".$request->email;
*/
        
        $VectorUpdate['name'] = $request->name;
        $VectorUpdate['apellido'] = $request->apellido;
        $VectorUpdate['email'] = $request->email;
        $VectorUpdate['password'] = $request->password;

        //dd($VectorUpdate);
        $user =User::find($id);
        //dd($user);
        $user->fill($VectorUpdate);
        $user->save();
        
        Session::flash('message','Usuario actualizado');
        return Redirect::to('/admin/usuarios'); 
          
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
