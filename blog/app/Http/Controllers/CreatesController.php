<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article ;
use App\Usuario ;
use Illuminate\Support\Facades\DB;
class CreatesController extends Controller
{
    //
     
     function getUserJSON(){
        $users = DB::select(" SELECT nombres,apellido FROM `usuarios` WHERE 1 ;");
      echo json_encode($users);
  }


     public function addPost(Request $request){
        


        $user = new Usuario;
        $user->nombres = $request->nombres;
        $user->apellido = $request->apellido;
        $user->contrasena = $request->contrasena;
        $user->usuario = $request->usuario;
        $user->telefono = $request->telefono;
        $user->correo = $request->email;
        $user->tipo = $request->tipo;
        $user->codigo = $request->codTrabajador;
        $user->zona = $request->zona;
        $user->agencia = $request->agencia; 
              
        //console.log($request->tipo);

        $user->save();
        //return redirect('/users');
        return response()->json($user);


     }

    public function home(){
    	$articles = Article::all();
    	//print_r($article);
    	return view('tabla',['articles'=>$articles]);
    }

     public function home2(){
        $users = Usuario::all();
        //print_r($article);
        return view('tabla2',['users'=>$users]);
    }

   public function update($id){

        $user = Usuario::find($id);
        //print_r($article);
      /*
            echo '<pre>';
            print_r($user);
            echo '</pre>';
            //exit();     
            */
        return view('update',['user'=>$user]);


   }

    public function edit(Request $request)
  {
    $this->validate($request, [
        'body' => 'required'
    ]);
    $user = Usuario::find($request['id']);
    /*$user= User::find($post->user_id);
    if (Auth::user() != $user) {
        return redirect()->back();f
    }*/
    $post->body = $request['body'];
    $post->save();
    return $request;
  }


   public function edit2(Request $request , $id){

       $this->validate(
         $request,[
            'nombres'=>'required',
            'usuario'=>'required',
            'tipo'=>'required',
            'codigo'=>'required',
            'zona'=>'required',
            'agencia'=>'required'    

         ]);

       $data = array(
            'nombres' => $request ->input('nombres'),
             'usuario'=> $request ->input('usuario'),
             'tipo' => $request ->input('tipo'),
             'codigo' => $request ->input('codigo'),
             'zona' => $request ->input('zona'),
            'agencia' => $request ->input('agencia')
        );

       Usuario::where('id',$id)
        -> update($data);  

       return redirect('/users');


   }

    

    public function add(Request $request){
    	//$articles = Article::all();
    	$this->validate($request,[

    		'title'=> 'required',
    		'description'=>	'required'

    		]);

    	$articles = new Article;
    	$articles-> title = $request->input('title');
    	$articles-> description = $request->input('description');
    	$articles->save();

    	return redirect('/').with('info','Article Saved Sucefully');
    	 
    	//return view('tabla',['articles'=>$articles]);
    }

    public function delete($id){
          Usuario::where('id',$id)->delete();
        return redirect('/users');
         
    }
}
