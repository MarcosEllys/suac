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

					<div id="target-1" class="widget">

						<div class="widget-header">
							<i class="icon-tasks"></i>
							<h3>Agendar atendimento</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label">Pessoa referênciada:</label>
											<div class="controls">

												<select class="span7">
													<option>Raimundo Ananias</option>
													<option>Francisca Maria Gomes</option>
													<option>José Silva Marciel</option>
													<option>Francisca Gonçalves</option>
												</select>
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-2" class="widget">

						<div class="widget-header">
							<i class="icon-tasks"></i>
							<h3>Agendar atendimento</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="date">Data do atendimento:</label>
											<div class="controls">
												<input type="date">
											</div>
										</div>

									</fieldset>
								</form>
							</div>

						</div>

					</div>

					<div id="target-3" class="widget">

						<div class="widget-header">
							<i class="icon-tasks"></i>
							<h3>Agendar atendimento</h3>
						</div>

						<div class="widget-content">

							<br>

							<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">
											<label class="control-label">Tipo</label>

											<div class="controls">
												<label class="radio inline">
													<input name="radiobtns" type="radio">
													Atualização de cadastro </label>

													<label class="radio inline">
														<input name="radiobtns" type="radio">
														Adesão a beneficio </label>
													</div>
												</div>

											</fieldset>
										</form>
									</div>

								</div>

							</div>

							<div id="target-4" class="widget">

								<div class="widget-header">
									<i class="icon-tasks"></i>
									<h3>Agendar atendimento</h3>
								</div>

								<div class="widget-content">

									<br>

									<div class="tab-pane active" id="formcontrols">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="form-actions">
													<button type="submit" class="btn btn-primary">
														Agendar
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
				title : 'Selecione uma pessoa referenciada',
				text : 'Você terá uma lista contendo o nome de todas as pessoas referenciadas, selecione a pessoa que está agendando o atendimento.'
			});

			guidely.add({
				attachTo : '#target-2',
				anchor : 'top-right',
				title : 'Informe a data do atendimento',
				text : 'Informe a data em que o atendimento irá ser realizado.'
			});

			guidely.add({
				attachTo : '#target-3',
				anchor : 'middle-middle',
				title : 'Selecione o tipo de atendimento',
				text : 'Selecione o assunto sobre o atendimento.'
			});

			guidely.add({
				attachTo : '#target-4',
				anchor : 'middle-middle',
				title : 'Clique em agendar',
				text : 'Por último clique em "Agendar" para confirmar.'
			});

			guidely.init({
				welcome : true,
				startTrigger : false
			});

		});

		</script>
@stop
