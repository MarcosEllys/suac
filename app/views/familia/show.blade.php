@extends('layout.master')

@section('content')


<div class="main">
	<div class="main-inner">
		<div class="container">

			<div class="row">
				<div class="span12">
					<ol class="breadcrumb">
						<li>
							<a href=" {{ URL("/") }} "><i class="icon-dashboard"></i> Home</a>
						</li>
						<li>
							/ <a href=" {{ action('FamilysController@index') }} ">
							<i class="icon-group"></i> Família</a>
						</li>
						<li>
							/ <i class="icon-eye-open"></i> Informações
						</li>
					</ol>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="span12">
					<div class="widget ">
						<div class="widget-header">
							<i class="icon-eye-open"></i>
							<h3>Informações</h3>
						</div>
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#morefamily" data-toggle="tab">Dados sobre familia</a>
									</li>
									<li class="">
										<a href="#morelocalization" data-toggle="tab">Dados sobre endereço</a>
									</li>
									<li class="">
										<a href="#convivencia" data-toggle="tab">Dados sobre convivencia</a>
									</li>
									<li class="">
										<a href="#habitacional" data-toggle="tab">Condição habitacional</a>
									</li>

								</ul>

								<br>

								<div class="tab-content">
									<div class="tab-pane active" id="morefamily">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">Código:</label>
													<div class="controls">
														1
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="email">Pessoa referenciada:</label>
													<div class="controls">
														Marcos
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Apelido:</label>
													<div class="controls">
														Franquim
													</div>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="morelocalization">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">CEP:</label>
													<div class="controls">
														63430-000
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Estado:</label>
													<div class="controls">
														CE
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Municipio:</label>
													<div class="controls">
														Icó
													</div>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="convivencia">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">Casa:</label>
													<div class="controls">
														Alugada
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Bairro:</label>
													<div class="controls">
														Favela
													</div>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="habitacional">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">Casa própria:</label>
													<div class="controls">
														Sim
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Casa pintada:</label>
													<div class="controls">
														Sim
													</div>
												</div>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>

						{{ HTML::link('/peoplesref','Voltar', array('class' => 'btn')) }}

					</div>
				</div>
			</div>
		</div>
	</div>

	@stop