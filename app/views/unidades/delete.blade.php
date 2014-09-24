@section('content')

{{ Form::open(array('action' => 'UnidadesController@handleDelete', 'class' => 'form-horizontal')) }}

{{ Form::hidden('id', $unidade->id) }}

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
							/ <i class="icon-remove-sign"></i> Excluir unidade
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">

					<div class="widget">
						<div class="widget-header">
							<i class="icon-remove-sign"></i>
							<h3>Excluir da unidade </h3>
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
									{{{ $unidade->nome }}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->rua }}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->bairro }}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('numero','Nº:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->numero }}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->complemento }}}}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{{ $unidade->tipo }}}
								</div>
							</div>


						</div>

						<br>

						{{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}

						{{ HTML::link('/unidades','Cancelar', array('class' => 'btn')) }}

						{{ Form::close(); }}


					</div>


				</div>

			</div>

		</div>

		@stop