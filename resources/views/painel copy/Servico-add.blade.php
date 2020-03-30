@extends('painel.tamplate')
@section('title', 'Serviços')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="app-menu__icon fa fa-edit"></i> Cadastrar Serviços</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/Servico/add">Cadastrar Serviços</a></li>
          </ul>
      </div>
      <div class="row">
        
        <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Formulário de @if(empty($servico->idservico)) Cadastro  @endif @if(!empty($servico->idservico)) Alteração @endif</h3><br></br>
            <div class="tile-body">
            <form method="post" action ="{{action('ServicoController@store')}}">
            
              @csrf
            
              <input type="hidden" name="idservico" value="{{$servico->idservico ?? ''}}" />
              
                <div class="form-group row">
                  <label class="control-label col-md-2">Situação</label>
                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="situacao" value="Pendente"@if(empty($servico)) checked @endif @if(!empty($servico) && $servico->situacao == 'Pendente') checked @endif> Pendente
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                       
                        <input class="form-check-input" type="radio" name="situacao" value="Resolvido"  @if(!empty($servico) && $servico->situacao == 'Resolvido') checked @endif>  Resolvido
                      </label>
                    </div>
                  </div>
                </div>
                
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-2">Equipamento</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text"  name="equipamento" value="{{$servico->equipamento ?? ''}}" placeholder="Inserir equipamento"required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2">Problema</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="problema" value="{{$servico->problema ?? ''}}" placeholder="Inserir problema"required >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2">Descrição</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="descricao"value="{{$servico->descricao ?? ''}}"  placeholder="Inserir descrição"required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2">Tecnico</label>
                  <div class="col-md-9">
                    <input class="form-control " type="text" name="tecnico"value="{{$servico->tecnico ?? ''}}"  placeholder="Inserir o tecnico resposanvel"required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2">Valor Total</label>
                  <div class="col-md-9">
                    <input class="form-control " type="decimal" name="valor"value="{{$servico->valor ?? ''}}"  placeholder="Inserir o valor"required>
                  </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>  @if(empty($servico->idservico)) Cadastrar  @endif @if(!empty($servico->idservico)) Alterar @endif </button>
            </div>




                </form>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Listagem de serviço</h3><br></br>
            <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
            
            <div class="table-responsive">
            
            <table class="table table-striped">
            
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Situação</th>
                    <th>Equipamento</th>
                    <th>Problema</th>
                    <th>Descrição</th>
                    <th>Tecnico</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Ação</th>

                    
                  </tr>
                </thead>
                <tbody>
                @foreach($servicos as $servico)
                 <tr>
                
                  <td>{{$servico->idservico}}</td>
                  <td>{{$servico->situacao}}</td>
                  <td> {{$servico->equipamento}}</td>
                  <td>{{$servico->problema}}</td>
                  <td> {{$servico->descricao}}</td>
                  <td> {{$servico->tecnico}}</td>
                  <td> {{$servico->valor}}</td>
                  <td> {{$servico->data}}</td>


                  <td>
                    <a href="/Servico/edit/{{$servico->idservico}}">Alterar</a>| 
                    <a href='/Servico/del/{{$servico->idservico}}'onclick="return confirm('Deseja eliminar serviço')">Remover</a> 
                  </td>



                 </tr>

                  @endforeach
                </tbody>
               
            </div>
          </div>
        </div>


      </div>

     @endsection