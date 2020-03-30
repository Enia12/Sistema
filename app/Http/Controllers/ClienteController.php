<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbcliente;

class ClienteController extends Controller
{
  public function index(){}


  public function show(){}


  public function create(){
      $clientes= Tbcliente::all();
  return view('painel.Cliente-add',compact('clientes'));

  }

  public function store(Request $request){
 
 
   if($request->idClientes){
      
    //$cliente =new Tbcliente;//criar obejto cliente
     $cliente=Tbcliente::find($request->idClientes);
     $cliente->Nomecli=$request->nome;
     $cliente->EnderecoCli=$request->endereco;
     $cliente->TelefoneCli=$request->telefone;
     $cliente->EmailCli=$request->email;
     $cliente->morada=$request->morada;
     $cliente->save();
     
     return redirect()->action('ClienteController@create');
    
 }else{

   $cliente =new Tbcliente;//criar obejto cliente
  // $cliente=tbcliente::find($request->idClientes);
   $cliente->Nomecli=$request->nome;
   $cliente->EnderecoCli=$request->endereco;
   $cliente->TelefoneCli=$request->telefone;
   $cliente->EmailCli=$request->email;
   $cliente->morada=$request->morada;
   $cliente->save();
   
   return redirect()->action('ClienteController@create');
 }

  }

  public function edit($idClientes){
  
    $cliente=Tbcliente::find($idClientes);//procurar utilizador por id

   $clientes=Tbcliente::all();//trazer todas os clientes para preencher tabela

   
    
   if($cliente)
    return view ('painel.Cliente-add',compact('clientes','cliente'));

   else
   return redirect()->action('ClienteController@create');

  }


  public function update(){}


  public function destroy($idClientes){

    $cliente= Tbcliente::find($idClientes); //procurar pelo id de cliente
    
    $cliente->save();
   
    $cliente->delete();
    return redirect()->action('ClienteController@create');
   
       
   }

  
  








    //
}
