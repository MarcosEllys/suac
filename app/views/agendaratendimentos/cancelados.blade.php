@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li>
							/ <a href=" {{ action('AgendaratendimentosController@index') }} ">
							<i class="icon-calendar"></i>  Agendar atendimento</a>
						</li>
						<li class="active">  /  <i class="icon-remove-sign"></i> Atendimentos cancelados</li>
					</ol>


				</div>
			</div>

			<br>

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-calendar"></i>
							<h3>Atendimentos agendados</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Tipo</th>
										<th>Data</th>
										<th>Ações</th>
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

					{{ $agendamentos->links(); }}


				</div>
			</div>
		</div>
	</div>
</div>


@stop	