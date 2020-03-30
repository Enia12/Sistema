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
            <div class="col-md-12">
           
                  
                 
                  <div class="col-md-12">
                <div class="tile">
                  <div class="tile-body">
                    
                          
                          
          
            <div class="tile-body">
            <div class="span8">
      <div id="dados_servico" >
        <header class="verde">
          <!-- <span style="font-weight: 100;">Atendente: </span>
          <p id="p_nomeAtendente"></p> -->
         
        <div class="caixa">
          <div class="span7">
            <label for="pessoa">Cliente</label>
            <input type="text" name="pessoa" id="pessoa" class="readonly">
            <input type="hidden" name="id_pessoa" id="id_pessoa" />
          </div>
          <div class="span7">
            <label for="pessoa">Id</label>
            <input type="text" name="pessoa" id="pessoa" class="readonly">
            <input type="hidden" name="id_pessoa" id="id_pessoa" />
          </div>
         
          <table class="table info_cliente">
            <tr>
              
              <td>
                <span>Telefone/Celular</span>
                <p id="p_telefone"></p>
              </td>
              <td>
                <span>E-mail</span>
                <p id="p_email"></p>
              </td>
            </tr>
            <tr>
             
              <td colspan="3">
                <span>Endereço</span>
                <p id="p_endereco"></p>
              </td>
            </tr>
          </table>
         </div>
        </div>
      </div>
      
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
                
              

     @endsection