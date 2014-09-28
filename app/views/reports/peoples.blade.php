@extends('reports.master')

@section('content')

	<br>
	<br>
	<br>

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
										<th>Id</th>
										<th>Nome</th>
										<th>Apelido</th>
										<th class="td-actions">Ações</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($peoplesreference as $people)

									@include('peoplesreference._people_tile')

									@endforeach

								</tbody>
							</table>
						</div>
					</div>

					{{ $peoplesreference->links(); }}


				</div>
			</div>
		</div>
@stop