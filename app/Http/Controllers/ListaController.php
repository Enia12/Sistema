<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtilizadoresServico;
use App\Models\Servico;

class ListaController extends Controller
{
    //
    public function index(){
      $servicos= Servico::paginate();
      
    }
    public function create(){
        $servicos= Servico::lastest()->paginte();
    
        return view('painel.Lista-add',compact('servicos'));
    }

    public function searchLista(Request $request,Servico $servico)
    {
       
    $dataForm = $request->all();//requisitar todos os dados da tabela
  $servicos=  $servico->search($dataForm);//parar arry dos items a ser fitltrado

 // dd($servicos);
    
  return view('painel.Lista-add',compact('servicos'));
}

}