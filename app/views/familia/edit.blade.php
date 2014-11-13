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
										<fieldset>

											{{ Form::open(array('action' => 'FamilysController@handleEdit', 'class' => 'form-horizontal')) }}

											{{ Form::hidden('id', $familia->id) }}

											<div class="control-group">
												<label class="control-label" for="email">Código:</label>
												<div class="controls">
													{{{ $familia->peoplereference->id }}}
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="email">
													Pessoa referenciada:
												</label>
												<div class="controls">
													{{{ $familia->peoplereference->nome }}}
												</div>
											</div>

											<hr>

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

												{{ Form::close() }}
											</div>


										</fieldset>
									</div>

									<div class="tab-pane" id="morelocalization">
											<fieldset>

												{{ Form::open(array('action' => 'HabitacionalsController@handleEdit', 'class' => 'form-horizontal')) }}

												{{ Form::hidden('id', $familia->id) }}

												<div class="control-group">
													{{ Form::label('tiporesidencia', 'Tipo de residencia:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::text('tiporesidencia',$habitacional->tiporesidencia,array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '15', 'required') ) }}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('materialparedes', 'Material das paredes:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::text('materialparedes',$habitacional->materialparedes,array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '15', 'required') ) }}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('energia', 'A residencia tem energia:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('energia', TRUE) }} Sim {{ Form::radio('energia', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('agua', 'A residencia tem agua:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('agua', TRUE) }} Sim {{ Form::radio('agua', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('esgoto', 'A residencia tem escoamento sanitário:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('esgoto', TRUE) }} Sim {{ Form::radio('esgoto', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('coletalixo', 'A rua tem coleta de lixo:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('coletalixo', TRUE) }} Sim {{ Form::radio('coletalixo', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('qtdcomodos', 'Quantidade de comodos do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('qtdcomodos', 1) }} 1 {{ Form::radio('qtdcomodos', 2 ) }} 2 {{ Form::radio('qtdcomodos', 3 ) }} 3 {{ Form::radio('qtdcomodos', 4 ) }} 4 {{ Form::radio('qtdcomodos', 5 ) }} 5
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('qtddormitorios', 'Quantidade de dormitórios do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('qtddormitorios', 1) }} 1 {{ Form::radio('qtddormitorios', 2 ) }} 2 {{ Form::radio('qtddormitorios', 3 ) }} 3 {{ Form::radio('qtddormitorios', 4 ) }} 4
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('localizadoareadesabamento', 'Localizado em área de desabamento:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('localizadoareadesabamento', TRUE) }} Sim {{ Form::radio('localizadoareadesabamento', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('localizadoareadificilacesso', 'Localizado em área de dificil acesso:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::radio('localizadoareadificilacesso', TRUE) }} Sim {{ Form::radio('localizadoareadificilacesso', FALSE) }} Não
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('observacao', 'Observação:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{ Form::textarea('observacao',$habitacional->observacao,array('class' => 'span10') ) }}
													</div>
												</div>

												<div class="form-actions">

													{{ Form::submit('Salvar habitacional', array('class' => 'btn btn-primary')) }}

													{{ HTML::link('/users','Cancelar', array('class' => 'btn')) }}

													{{ Form::close() }}

												</div>

											</fieldset>
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