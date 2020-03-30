<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilizadore;

class UtilizadorController extends Controller
{

   
    public function index(){

    }
   



public function show(){

    
}
 public function create(){
     
    $utilizadores =Utilizadore::where('activo',1)->get();////trazer do banco utilizador com ativo 1
  
    
    return view ('painel.Utilizador-add',compact('utilizadores'));//trazer formulario de cadastro


}
 public function store(Request $request){

//dd($request);
     if($request->idutilizador){
      $u=Utilizadore::find($request->idutilizador);
      $u->nome = $request->nome;
      $u->telefone = $request->telefone;
      $u->email = $request->email;//recebe request email
     $request->password ? $u->password = bcrypt( $request->password) : null; //recebe request criptografado
      $u->Activo='1';
      $u->save();//salvar no baco de dados

      } else{
        $u = new Utilizadore;// criar objecto utilizador
        $u->nome = $request->nome;
        $u->telefone = $request->telefone;
        $u->email = $request->email;//recebe request email
        $u->password = bcrypt( $request->password);//recebe request criptografado
        $u->Activo='1';
        $u->save();//salvar no baco de dados

   }
   

    return redirect()->action('UtilizadorController@create');
    
}
 
 public function edit($idutilizador){


      $utilizador=Utilizadore::find($idutilizador);//procurar utilizador por id
      $utilizadores =Utilizadore::where('activo',1)->get();//trazer do banco utilizador com ativo 1
     if($utilizador)
     return view ('painel.Utilizador-add',compact('utilizadores','utilizador'));
      else
      return redirect()->action('UtilizadorController@create');
    
}
    

 public function update(){

    
}
 public function destroy($idutilizador){

 $utilizador= Utilizadore::find($idutilizador);//procurar pelo id de utilizador
 $utilizador->Activo='0';
 $utilizador->save();

 $utilizador->delete();
 return redirect()->action('UtilizadorController@create');

    
}


public function profile ()
{
   return view ('painel.profile');
}
    
}
