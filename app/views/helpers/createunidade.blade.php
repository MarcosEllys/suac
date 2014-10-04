@extends('layout.master')

@section('header')

@parent

	{{ HTML::style( asset('js/guidely/guidely.css') ) }}

	{{ HTML::script( asset('js/guidely/guidely.min.js') ) }}

@stop

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
							/ <a href="{{ URL("ajuda") }}"> <i class="icon-facetime-video "></i> Ajuda</a>
						</li>
						<li>
							/ <i class="icon-plus-sign"></i> Cadastrar unidade
						</li>
					</ol>
				</div>
			</div>


			<div class="row">

				<div class="span12">

					<div id="target-1" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label">Nome da unidade:</label>
											<div class="controls">

													<input type="text" class="span8">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-2" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="date">Rua:</label>
											<div class="controls">
												<input type="text" class="span8">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-3" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="date">Bairro:</label>
											<div class="controls">
												<input type="text" class="span8">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-4" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="date">Nº:</label>
											<div class="controls">
												<input type="text" class="span8">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-5" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="date">Complemento:</label>
											<div class="controls">
												<input type="text" class="span8">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>



					<div id="target-6" class="widget">

						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label">Tipo de unidade</label>

											<div class="controls">
												<label class="radio inline">
													<input name="radiobtns" type="radio">
													CRAS </label>

													<label class="radio inline">
														<input name="radiobtns" type="radio">
														CREAS </label>
													</div>
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

							<div id="target-7" class="widget">

								<div class="widget-header">
									<i class="icon-plus-sign"></i>
									<h3>Cadastrar unidade</h3>
								</div>

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="form-actions">
													<button type="submit" class="btn btn-primary">
														Salvar
													</button>
													<button class="btn">
														Cancelar
													</button>
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>


		<!-- Placed at the end of the document so the pages load faster	-->


		<script>
		$(function() {

			guidely.add({
				attachTo : '#target-1',
				anchor : 'top-right',
				title : 'Informe o nome completo do usuário',
				text : 'Preencha o campo com o nome completo do usuário a ser incluida no sistema.'
			});

			guidely.add({
				attachTo : '#target-2',
				anchor : 'top-right',
				title : 'Informe a data do atendimento',
				text : 'Preencha o campo com o nome da rua/travessa/bairro da unidade.'
			});

			guidely.add({
				attachTo : '#target-3',
				anchor : 'top-right',
				title : 'Selecione o tipo de atendimento',
				text : 'Selecione o assunto sobre o atendimento.'
			});

			guidely.add({
				attachTo : '#target-4',
				anchor : 'top-right',
				title : 'Clique em agendar',
				text : 'Por último clique em "Agendar" para confirmar.'
			});

			guidely.add({
				attachTo : '#target-5',
				anchor : 'top-right',
				title : 'Clique em agendar',
				text : 'Por último clique em "Agendar" para confirmar.'
			});

			guidely.add({
				attachTo : '#target-6',
				anchor : 'middle-middle',
				title : 'Clique em agendar',
				text : 'Por último clique em "Agendar" para confirmar.'
			});

			guidely.add({
				attachTo : '#target-7',
				anchor : 'middle-middle',
				title : 'Clique em salvar',
				text : 'Por último clique em "salvar" para confirmar.'
			});

			guidely.init({
				welcome : true,
				startTrigger : false
			});

		});

		</script>
@stop
