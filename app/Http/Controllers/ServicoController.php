<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\UtilizadoresServico;
use Auth;
class ServicoController extends Controller
{
    //


public function index(){}

public function create(){
   $servicos= Servico::all();

    return view('painel.Servico-add',compact('servicos'));
}
public function show(){

}
public function update(){

}

public function store(Request $request){

    if($request->idservico){

        $servico=Servico::find($request->idservico);

        $servico->situacao=$request->situacao;
        $servico->equipamento=$request->equipamento;
        $servico->problema=$request->problema;
        $servico->descricao=$request->descricao;
        $servico->tecnico=$request->tecnico;
        $servico->data=date('Y-m-d H:i:s');
        $servico->valor=$request->valor;
        $servico->save();

    return redirect()->action('ServicoController@create');

    }else{
        $servico= new Servico();//instaciando obejcto servico
       $servico->situacao=$request->situacao;
       $servico->equipamento=$request->equipamento;
       $servico->problema=$request->problema;
       $servico->descricao=$request->descricao;
       $servico->tecnico=$request->tecnico;
        $servico->data=date('Y-m-d H:i:s');
        $servico->valor=$request->valor;
        $servico->save();

        $us=new UtilizadoresServico;
        $us->utilizadores_pfk = Auth::user()->idutilizador;
		$us->servico_pfk =Servico::orderBy('idservico','desc')->first()->idservico;
        $us->save();

   return redirect()->action('ServicoController@create');
    }
}

public function edit($idservico){

    $servico= Servico::find($idservico);

   $servicos=Servico::all();//trazer todas os clientes para preencher tabela

   
    
   if($servico)
    return view ('painel.Servico-add',compact('servico','servicos'));

   else
   return redirect()->action('ServicoController@create');

}
public function destroy($idservico){

    $servico= Servico::find($idservico); //procurar pelo id de cliente
    
    $servico->save();
   
    $servico->delete();
    return redirect()->action('ServicoController@create');
   

}


}
