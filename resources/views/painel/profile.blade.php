@extends('painel.tamplate')
@section('title', 'Inicio')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-user fa-lg"></i> Perfil de utilizador</h1>
       
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
          
      <div class="col-md-12">
                <div class="tile">
                  <div class="tile-body">
                    
                          
            
            <div class="tile-body">
              <form class="row" method="post" action ="{{action('UtilizadorController@store')}}">
              @csrf
            
              <input type="hidden" name="idutilizador" value="{{$utilizador->idutilizador ?? ''}}" />
               
              <div class="col-md-6">
        
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">Nome</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text"  name="nome" value="{{auth()->User()->name}}" placeholder="Inserir nome" required>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label class="control-label col-md-3">Telefone</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="telefone" value="{{$Utilizador->telefone ?? ''}}" placeholder="Inserir telefone">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Imagem</label>
                  <div class="col-md-9">
                    <input class="form-control " type="file" name="imagem" value="{{$utilizador->imagem ?? ''}}" placeholder="Inserir telefone">
                  </div>
                </div>
                
           
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Atualizar perfil </button>
            </div>
                </form>
                    </div>
                  </div>
                







     @endsection