@extends('painel.tamplate')
@section('title', 'Clientes')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="app-menu__icon fa fa-edit"></i> Cadastrar Clientes</h1>
         
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
            <h3 class="tile-title">Formulário de @if(empty($cliente->idClientes)) Cadastro  @endif @if(!empty($cliente->idClientes)) Alteração @endif</h3><br></br>
            
           
                          
            
            <div class="tile-body">
              <form class="row" method="post" action ="{{action('ClienteController@store')}}">
              @csrf
            
              <input type="hidden" name="idClientes" value="{{$cliente->idClientes ?? ''}}" />
              <div class="col-md-6">
        
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">Nome</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text"  name="nome" value="{{$cliente->NomeCli ?? ''}}" placeholder="Inserir nome" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Endereço</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="endereco"value="{{$cliente->EnderecoCli ?? ''}}" placeholder="Inserir endereço" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Telefone</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="telefone" value="{{$cliente->TelefoneCli ?? ''}}" placeholder="Inserir telefone">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-9">
                    <input class="form-control " type="email" name="email" value="{{$cliente->EmailCli ?? ''}}" placeholder="Inserir email"  required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Morada</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="morada" value="{{$cliente->morada ?? ''}}" placeholder="Inserir email">
                  </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>@if(empty($cliente->idClientes)) Registar @endif @if(!empty($cliente->idClientes)) Alterar @endif </button>
            </div>
                </form>
                    </div>
                  </div>
                
                
                <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Listagem de clientes</h3>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Morada</th>
                    <th>Ação</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                 <tr>
                
                  <td>{{$cliente->idClientes}}</td>
                  <td>{{$cliente->NomeCli}}</td>
                  <td> {{$cliente->EnderecoCli}}</td>
                  <td>{{$cliente->TelefoneCli}}</td>
                  <td> {{$cliente->EmailCli}}</td>
                  <td> {{$cliente->morada}}</td>
                  <td>
                    <a href="/Cliente/edit/{{$cliente->idClientes}}">Alterar</a>| 
                    <a href='/Cliente/del/{{$cliente->idClientes}}'onclick="return confirm('Deseja eliminar utilizador')">Remover</a> 
                  </td>



                 </tr>

                  @endforeach
                </tbody>
               
            </div>
          </div>
        </div>


      </div>
     @endsection