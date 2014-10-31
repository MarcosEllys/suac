@extends('layout.master')

@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-group"></i> Famílias</li>
					</ol>


				</div>
			</div>

			
			@include('layout._deletes')
			
			@include('layout._success')
			
			@include('layout._infos')

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-home"></i>
							<h3>Famílias cadastradas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Pessoa referenciada</th>
										<th>estado</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Maria chiquinha josefina</td>
										<td>
											<span class="label label-success">Concluído</span>
										</td>
										<td>

											<a href=" http://suac.com.br/unidades/show/1 ">
												<button class="btn btn-info">
													Visualizar
												</button>
											</a>

											<a href=" http://suac.com.br/unidades/edit/1 ">
												<button class="btn btn-warning">
													Editar
												</button>
											</a>

										</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Joana chiquinha josefina</td>
										<td>
											<span class="label label-warning">Incompleto</span>
										</td>
										<td>

											<a href=" http://suac.com.br/unidades/show/1 ">
												<button class="btn btn-info">
													Visualizar
												</button>
											</a>

											<a href=" http://suac.com.br/unidades/edit/1 ">
												<button class="btn btn-warning">
													Editar
												</button>
											</a>

										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<!-- Paginador aqui -->

				</div>
			</div>
		</div>
	</div>
</div>


@stop