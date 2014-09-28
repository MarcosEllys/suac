@extends('reports.master')

@section('content')

<br>

<div class="main">

	<div class="main-inner">
		<div class="container">


			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-user"></i>
							<h3>Pessoas referenciadas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Código</th>
										<th>Nome</th>
										<th>Apelido</th>
										<th>Data de nascimento</th>
										<th>NIS</th>
										<th>CPF</th>
										<th>Unidade de Atendimento</th>
									</tr>
								</thead>
								<tbody>

									@foreach($peoples as $people)

									@include('reports.peoples._people_tile')

									@endforeach

								</tbody>
							</table>
						</div>
					</div>


					<div class="form-actions">

						<a class="btn btn-large disabled" href="#">
							<i class="icon-user"></i> Usuários cadastrados: {{ $peoples->count(); }}
						</a>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

@stop