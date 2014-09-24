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
							/ <i class="icon-eye-open"></i> Informações unidade
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">

					<div class="widget">
						<div class="widget-header">
							<i class="icon-eye-open"></i>
							<h3>Informações da unidade </h3>
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

						{{ HTML::link('/unidades','Voltar', array('class' => 'btn')) }}


					</div>


				</div>

			</div>

		</div>

		@stop