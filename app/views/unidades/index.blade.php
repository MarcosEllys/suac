@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-home"></i> Unidades</li>
					</ol>


				</div>
			</div>

			<br>

			<div class="row">

				<div class="span7">
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('UnidadesController@create') }}" class="btn btn-large btn-success btn-support-ask"> Cadastrar unidade</a>
						</div>
					</div>					
				</div>


			</div>

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-home"></i>
							<h3>Unidades cadastradas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Tipo</th>
										<th class="td-actions">Ações</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($unidades as $unidade)

										@include('unidades._unidade_tile')

									@endforeach

								</tbody>
							</table>
						</div>
					</div>

					{{ $unidades->links(); }}


				</div>
			</div>
		</div>
	</div>
</div>


@stop