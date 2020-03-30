@extends('painel.tamplate')
@section('title', 'Inicio')

@section('content')

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Lista de Serviços</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/Servico/add">Cadastrar Serviços</a></li>
          </ul>
      </div>

      
                <div class="col-md-12">
                
          <div class="tile"><br></br>
            
          
          <div class="tile">
            <div class="tile-body">
            <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="dataTables_length" id="sampleTable_length">
                    <label>Show 
                      <select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm">
                        <option value="10">10</option
                        option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option></select> entries</label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="sampleTable_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sampleTable"></label>
                      </div></div>
                    </div><div class="row"><div class="col-sm-12"><table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
           <!--   <thead>
               <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 95px;">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 95px;">Situação</th>
                    <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 95px;">Equipamento</th>
                    <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 43px;">Problema</th>
                    <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 95px;">Descrição</th>
                    <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Tecnico</th>
                 
                  </tr>
                  </thead>
                  <tbody> -->  
                    
                    
                    
                    
      

    <!-- <form action ="{{route ('lista.search')}}" method="POST" class="form form-inline">-->
        {!!csrf_field()!!}
     <!-- <input type="text" name="idutilizador" class="form-control" placeholder="ID">-->
      
     <!-- <input type="text" name="situacao" class="form-control" placeholder="Situação">-->
    <!--  <input type="text" name="equipamento" class="form-control" placeholder="Equipamento">-->
     <!-- <input type="text" name="tecnico" class="form-control" placeholder="Tecnico">-->
     <!-- <input type="date" name="data" class="form-control"> -->
     <!-- <button type="submit" class="btn btn-primary">Pesquisar</button>-->
    <!--  <button class="app-search__button"><i class="fa fa-search"></i></button>-->
         
       <!--  <div  class="card-body"  >

            <div class="table-responsive">
           <table class="table table-hover table-bordered" id="sampleTable">-->
           
            
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
                 </form>
                 
                  </td>



                 </tr>

                  @endforeach
                </tbody>
                </table>
                
                {!! $servicos->links() !!}

               <!--   <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">
                  
                    </div>
                    </div>
                     <div class="col-sm-12 col-md-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="sampleTable_previous">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a>
                          </li>
                          <li class="paginate_button page-item active">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                          </li><li class="paginate_button page-item ">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                          </li><li class="paginate_button page-item "><a href="#" aria-controls="sampleTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                          <li class="paginate_button page-item ">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                          </li>
                          <li class="paginate_button page-item ">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                        </li>
                          <li class="paginate_button page-item ">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                          </li>
                          <li class="paginate_button page-item next" id="sampleTable_next">
                            <a href="#" aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Proximo</a>
                          </li></ul></div>
                        </div>
                      </div>
                      
                <div class="col-lg-6">
      
        
        </div>
    </div>

      </div>-->
      @endsection
      
      <!--  @section('scripts')
<script >
   $(document).ready( function () {
    $('#datatable').DataTable();
    });

</script>

     @endsection -->