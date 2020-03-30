@extends('painel.tamplate')
@section('title', 'Clientes')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Cadastrar Clientes</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Cadastrar Clientes</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Formulário de @if(empty($utilizador->idutilizador)) Cadastro  @endif @if(!empty($utilizador->idutilizador)) Alteração @endif </h3>
            <div class="tile-body">
              <form class="row" method="post" action ="{{action('UtilizadorController@store')}}">
              
              @csrf
              <input type="hidden" name="idutilizador" value="{{$utilizador->idutilizador ?? ''}}" />
                <div class="form-group col-md-3">
                  <label class="control-label">E-mail</label>
                  <input class="form-control" type="email" name="email" value="{{$utilizador->Email ?? ''}}" placeholder="Insira seu E-mail" autofocus required>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Password</label>
                  <input class="form-control" type="password" name="password"  placeholder="Insira seu password"@if(empty($utilizador->idutilizador)) required @endif>
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>@if(empty($utilizador->idutilizador)) Cadastrar  @endif @if(!empty($utilizador->idutilizador)) Alterar @endif</button>
                </div>
              </form>
            </div>
        </div>
        <hr/>
        <div class="tile">
            <h3 class="tile-title">Responsive Table</h3>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($utilizadores as $utilizador)<!--percorrer table  -->
                  <tr>
                    <td>{{$utilizador->idutilizador}}</td>
                    <td>{{$utilizador->Email}}</td>
                    <td>
                    
       <a href="/Utilizador/edit/{{$utilizador->idutilizador}}">Alterar </a>|
       <a href='/Utilizador/del/{{$utilizador->idutilizador}}'onclick="return confirm('Deseja eliminar utilizador')">Remover</a> 
                    
                    </td>
                  
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>


      </div>
     @endsection