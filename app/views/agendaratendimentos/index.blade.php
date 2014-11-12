@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-calendar"></i> Agendar atendimento</li>
					</ol>


				</div>
			</div>

			<br>

			@include('layout._deletes')
				
			@include('layout._success')
				
			@include('layout._infos')

			<div class="row">
				<div class="span10">
					
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('AgendaratendimentosController@create') }}" class="btn btn-large btn-success">
								Agendar atendimento 
							</a>
						</div>
					</div>

					@if( $realizados->count())
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('AgendaratendimentosController@realizados') }}" class="btn btn-large btn-info">
								Atendimentos realizados
								<span class="badge">
									{{ $realizados->count(); }}
								</span>
							</a>
						</div>
					</div>
					@endif

					@if( $cancelados->count())
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('AgendaratendimentosController@cancelados') }}" class="btn btn-large btn-danger">
								Atendimentos cancelados
								<span class="badge">
									{{ $cancelados->count(); }}
								</span>
							</a>
						</div>
					</div>
					@endif

				</div>
			</div>

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
										<th>Pessoa referenciada</th>
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