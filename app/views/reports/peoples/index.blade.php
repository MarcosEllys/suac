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
										<th><a href="{{ URL::to('reports/peoples?sort=id') }} "><i class="icon-large icon-sort"></i> Código</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=nome') }} "><i class="icon-large icon-sort"></i> Nome</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=apelido') }} "><i class="icon-large icon-sort"></i> Apelido</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=nascimento') }} "><i class="icon-large icon-sort"></i> Data de nascimento</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=nis') }} "><i class="icon-large icon-sort"></i> NIS</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=cpf') }} "><i class="icon-large icon-sort"></i> CPF</a></th>
										<th><a href="{{ URL::to('reports/peoples?sort=nomeunidade') }} "><i class="icon-large icon-sort"></i> Unidade de Atendimento</a></th>
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
							<i class="icon-user"></i> Usuários cadastrados: {{{ $peoples->count() }}}
						</a>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

@stop