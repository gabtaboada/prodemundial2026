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
use Redirect;

class AdminController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
{
    //
}
    public function find(Route $route){

            $this->admin =Master::find($route->getParameter('admin/inicio'));
            $this->notFound($this->admin);///por si alguien quiere editar algo desde la url//

    }    
    public function index()
    {
        return view('index');
    }
    public function admin()
    {

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
        return view('admin.login',compact('navegador'));
    }
    public function inicio()
    {
        return view('admin.index');
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
