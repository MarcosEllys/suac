@extends('layout.master')

@section('content')

<div class="main">
  <div class="main-inner">
    <div class="container">

     <div class="row">
      <div class="span12">
       <ol class="breadcrumb">
        <li><i class="icon-dashboard"></i> Home</li>
      </ol>
    </div>
  </div>

  <div class="row">

    <div class="span5">
      <div class="widget widget-nopad">
        <div class="widget-header"> <i class="icon-bar-chart"></i>
          <h3> Status do sistema</h3>
        </div>
        <div class="widget-content">
          <div class="widget big-stats-container">
            <div class="widget-content">
              <h6 class="bigstats">Dados importantes sobre o sistema.</h6>
              <div id="big_stats" class="cf">
                
                <div class="stat"> 
                 <i class="icon-user-md"></i> <span class="value"> {{ $users->getTotal(); }} </span>
                 <br>
                 Usuários cadastrados 
               </div>
               <div class="stat">
                 <i class="icon-group"></i>
                 <span class="value"> {{ $peopletotal->getTotal(); }} </span>
                 <br>
                 Famílias cadastradas
               </div>
               <div class="stat"> 
                 <i class="icon-home"></i> <span class="value">{{ $unidades->getTotal(); }}</span>
                 <br>
                 Unidades cadastradas 
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="span7">
    <div class="widget widget-table action-table">
      <div class="widget-header"> <i class="icon-tasks"></i>
        <h3>Atendimentos agendados</h3>
      </div>
      <div class="widget-content">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th> Pessoa referenciada </th>
              <th> Tipo de atendimento</th>
              <th> Data</th>
              <th class="td-actions"> </th>
            </tr>
          </thead>
          <tbody>

            @foreach($agendamentos as $agendamento)
              @include('agendaratendimentos._agendamento_tile')
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>



@stop