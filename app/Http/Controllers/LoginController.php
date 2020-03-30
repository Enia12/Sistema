<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//responsavel por receber parametros dos formularios

use Auth;
use Hash;
use App\User;
class LoginController extends Controller
{
    //

    public function form(){//retorna formulario
     

      if(Auth::user())
      return view ('painel.index');

        else
        return view ('login');
      }


      public function login(Request $request){

      //  dd(bcrypt($request->password)); //debug interno e saber senha degitado
     
        $request ->validate([
        'login' => 'required',//obrigar a fornecer dados
        'Senha' =>'required'
    
        ]);
    
        //
       
    
        $Manter = empty($request->Manter) ? false :$request ->Manter;//
    
       
        $utilizador= User::where ('email',$request->login)->first();//retorn do primeira na base de dados
    

        if($utilizador && Hash::check($request->Senha,$utilizador->password)){
       //dd($utilizador);
      Auth::loginUsingId($utilizador->idutilizador,$Manter);//colocar na auth o id do utilizador
        }
       return redirect()->action('LoginController@form');
       
        }
    
    
      

}
