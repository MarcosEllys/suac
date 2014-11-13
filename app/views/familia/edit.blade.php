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

			@include('layout._errors')

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
										<a href="#morefamily" data-toggle="tab">Dados sobre convivencia</a>
									</li>
									<li class="">
										<a href="#morelocalization" data-toggle="tab">Condição habitacional</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="morefamily">
										{{ Form::open(array('action' => 'FamilysController@handleEdit', 'class' => 'form-horizontal')) }}
										<fieldset>

											<div class="control-group">
												<label class="control-label" for="email">Código:</label>
												<div class="controls">
													{{{ $familia->peoplereferences->id }}}
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="email">
													Pessoa referenciada:
												</label>
												<div class="controls">
													{{{ $familia->peoplereferences->nome }}}
												</div>
											</div>

											<hr>

											{{ Form::hidden('id', $familia->id) }}

											<div class="control-group">
												<label class="control-label" for="email">Renda total:</label>
												<div class="controls">
													{{ Form::number('rendatotal',$familia->rendatotal,array('class' => 'span6', 'required', 'placeholder' => 'Em reais') ) }}
												</div>
											</div>

											<div class="control-group">
												<label class="control-label" for="email">Anos que mora no estado:</label>
												<div class="controls">
													{{ Form::number('anosmoraestado',$familia->anosmoraestado,array('class' => 'span6', 'required') ) }}
												</div>
											</div>

											<div class="control-group">
												<label class="control-label" for="email">Anos que mora no municipio:</label>
												<div class="controls">
													{{ Form::number('anosmoramunicipio',$familia->anosmoramunicipio,array('class' => 'span6', 'required') ) }}
												</div>
											</div>

											<div class="control-group">
												<label class="control-label" for="email">Anos que mora no bairro:</label>
												<div class="controls">
													{{ Form::number('anosmorabairro',$familia->anosmorabairro,array('class' => 'span6', 'required') ) }}
												</div>
											</div>


											<div class="form-actions">

												{{ Form::submit('Salvar convivência', array('class' => 'btn btn-primary')) }}

												{{ HTML::link('/users','Cancelar', array('class' => 'btn')) }}

											</div>


										</fieldset>
										{{ Form::close() }}
									</div>

									<div class="tab-pane" id="morelocalization">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													{{ Form::label('is_admin', 'Tipo de residencia:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::text('nome',Input::old('nome'),array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '15', 'required') ) }}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Material das paredes:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::text('nome',Input::old('nome'),array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '15', 'required') ) }}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'A residencia tem energia:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'A residencia tem agua:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'A residencia tem escoamento sanitário:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'A rua tem coleta de lixo:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Quantidade de comodos do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Quantidade de dormitórios do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Localizado em área de desabamento:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Localizado em área de dificil acesso:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('name', TRUE) }} Sim {{ Form::radio('name', FALSE, true) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Observação:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::textarea('nome',Input::old('nome'),array('class' => 'span10') ) }}
													</div>
												</div>

												<div class="form-actions">

													{{ Form::submit('Salvar habitacional', array('class' => 'btn btn-primary')) }}

													{{ HTML::link('/users','Cancelar', array('class' => 'btn')) }}

												</div>

											</fieldset>
										</form>
									</div>

									
								</div>
							</div>
						</div>

						<br>

						{{ HTML::link('/peoplesref','Voltar', array('class' => 'btn')) }}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop