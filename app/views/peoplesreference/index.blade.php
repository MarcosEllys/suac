@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-user"></i> Pessoas referênciadas</li>
					</ol>


				</div>
			</div>

			<br>

			<div class="row">

				<div class="span7">
					
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('PeoplesreferencesController@create') }}" class="btn btn-large btn-success btn-support-ask">
								Cadastrar pessoa referênciada 
							</a>
						</div>
					</div>

					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('PeoplesreferencesController@create') }}" class="btn btn-large btn-info btn-support-ask">
								Pessoas referênciadas desligadas
							</a>
						</div>
					</div>

				</div>

				@include('layout._deletes')
				
				@include('layout._success')
				
				@include('layout._infos')


				<div class="span5">

					{{ Form::open(array('action' => 'PeoplesreferencesController@search') ) }}

					{{ Form::text('nome',null,array('class' => 'span4 m-wrap', 'placeholder' => 'Nome da pessoa referenciada') ) }}

					{{ Form::submit('Buscar', array('class' => 'btn') ) }}					

					{{ Form::close() }}			

				</div>

			</div>

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-user"></i>
							<h3>Pessoas referenciadas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Apelido</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($peoplesreference as $people)

									@include('peoplesreference._people_tile')

									@endforeach

								</tbody>
							</table>
						</div>
					</div>

					{{ $peoplesreference->links(); }}


				</div>
			</div>
		</div>
	</div>
</div>


@stop