@section('content')


{{ Form::open(array('action' => 'AgendaratendimentosController@store', 'class' => 'form-horizontal')) }}

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
							/ <a href="{{ action('AgendaratendimentosController@index') }}"> <i class="icon-calendar "></i> Atendimentos agendados</a>
						</li>
						<li>
							/ <i class="icon-plus-sign"></i> Agendar atendimentos
						</li>
					</ol>
				</div>
			</div>


			@include('layout._errors')				


			<div class="row">
				<div class="span12">

					<div class="widget">
						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar unidade</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">



							<div class="control-group">
								{{ Form::label('peoplesreference_id', 'Pessoa referênciada:',array('class' => 'control-label')) }}
								<div class="controls">

									<select id="peoplesreference_id" name="peoplesreference_id">

										<option value=" 1 " selected="selected"> PF </option>

									</select>


								</div>
							</div>

							<div class="control-group">
								{{ Form::label('atendimento','Data atendimento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('atendimento',Input::old('rua'),array('class' => 'span6', 'placeholder' => 'AAAA/MM/DD', 'maxlength' => '10', 'required') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('tipoatendimento', 'Tipo de atendimento:',array('class' => 'control-label') ) }}
								<div class="controls">
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '1', true) }} Socioassistencial individualizado
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '2') }} Atividade coletiva de caráter continuado
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '3') }} Participação em atividade coletiva de caráter não continuado
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '4') }} Cadastramento/Atualização Cadastra
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '5') }} Acompanhamento de MSE
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '6') }} Solicitação/Concessão de Benefício Eventual
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '7') }} Visita Domiciliar
									</label>
									<label class="radio inline">
										{{ Form::radio('tipoatendimento', '8') }} Outros
									</label>
								</div>
							</div>

						</div>
					</div>

					<div class="form-actions">

						{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

						{{ HTML::link('/unidades','Cancelar', array('class' => 'btn')) }}

					</div>

					{{ Form::close() }}

				</div>

			</div>

		</div>
	</div>
</div>

@stop