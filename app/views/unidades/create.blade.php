@section('content')

{{ Form::open(array('action' => 'UnidadesController@store', 'class' => 'form-horizontal')) }}

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
							/ <a href="{{ action('UnidadesController@index') }}"> <i class="icon-home "></i> Unidades</a>
						</li>
						<li>
							/ <i class="icon-plus-sign"></i> Cadastrar unidade
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
								{{ Form::label('nome','Nome da unidade:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('nome',Input::old('nome'),array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '40') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('rua',Input::old('rua'),array('class' => 'span6', 'placeholder' => 'Rua ou avenida', 'maxlength' => '35') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('bairro',Input::old('bairro'),array('class' => 'span6', 'maxlength' => '30') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('numero','Nº:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('numero',Input::old('numero'),array('class' => 'span3','maxlength' => '4') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('complemento',Input::old('complemento'),array('class' => 'span6', 'placeholder' => 'Casa | Apartamento | Condominio', 'maxlength' => '20') ) }}
								</div>
							</div>

							<div class="control-group">
										{{ Form::label('tipo', 'Tipo de unidade:',array('class' => 'control-label') ) }}
										<div class="controls">
											<label class="radio inline">
												{{ Form::radio('tipo', 'CRAS', true) }} CRAS
											</label>
											<label class="radio inline">
												{{ Form::radio('tipo', 'CREAS') }} CREAS
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

		@stop