@extends('painel.tamplate')
@section('title', 'Utilizador')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="app-menu__icon fa fa-edit"></i> Cadastrar Utilizador</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Cadastrar Utilizador</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Formulário de @if(empty($utilizador->idutilizador)) Cadastro  @endif @if(!empty($utilizador->idutilizador)) Alteração @endif </h3>
            <div class="tile-body">
              <form method="post" action ="{{action('UtilizadorController@store')}}">
              
              @csrf
              <input type="hidden" name="idutilizador" value="{{$utilizador->idutilizador ?? ''}}" />
               
                <div class="form-group ">
                  <label class="control-label">Nome</label>
                  <div class="col-md-9">
                  <input class="form-control" type="text" name="nome" value="{{$utilizador->nome ?? ''}}" placeholder="Insira seu nome" autofocus required>
                </div>
                <div class="form-group ">
                  <label class="control-label ">Telefone</label>
                  <div class="col-md-9">
                  <input class="form-control" type="text" name="telefone" value="{{$utilizador->telefone ?? ''}}" placeholder="Insira seu telefone" >
                </div>
                <div class="form-group ">
                  <label class="control-label">E-mail</label>
                  <div class="col-md-9">
                  <input class="form-control" type="email" name="email" value="{{$utilizador->Email ?? ''}}" placeholder="Insira seu E-mail" autofocus required>
                </div>
                <div class="form-group ">
                  <label class="control-label">Password</label>
                  <div class="col-md-9">
                  <input class="form-control" type="password" name="password"  placeholder="Insira seu password"@if(empty($utilizador->idutilizador)) required @endif><br></br>
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>@if(empty($utilizador->idutilizador)) Cadastrar  @endif @if(!empty($utilizador->idutilizador)) Alterar @endif</button>
                </div>
              </form>
            </div>
        </div>
     
        <div class="tile">
            <h3 class="tile-title">Responsive Table</h3>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($utilizadores as $utilizador)<!--percorrer table  -->
                  <tr>
                    <td>{{$utilizador->idutilizador}}</td>
                    <td>{{$utilizador->nome}}</td>
                    <td>{{$utilizador->telefone}}</td>

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