@section('content')

{{ Form::open(array('action' => 'UnidadesController@handleEdit', 'class' => 'form-horizontal')) }}

{{ Form::hidden('id',$unidade->id) }}

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
							/ <i class="icon-pencil"></i> Editar unidade
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">

					<div class="widget">
						<div class="widget-header">
							<i class="icon-pencil"></i>
							<h3>Editar unidade</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">



							<div class="control-group">
								{{ Form::label('id','Código:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->id }}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('nome','Nome da unidade:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('nome',$unidade->nome,array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '40') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('rua',$unidade->rua,array('class' => 'span6', 'placeholder' => 'Rua ou avenida', 'maxlength' => '35') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('bairro',$unidade->bairro,array('class' => 'span6', 'maxlength' => '30') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('numero','Nº:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('numero',$unidade->numero,array('class' => 'span3','maxlength' => '4') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('complemento',$unidade->complemento,array('class' => 'span6', 'placeholder' => 'Casa | Apartamento | Condominio', 'maxlength' => '20') ) }}
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