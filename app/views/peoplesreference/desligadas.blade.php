@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li>  /  <a href=" {{ URL("peoplesref") }} "><i class="icon-user"></i> Pessoas referênciadas </a></li>
						<li class="active">  /  <i class="icon-off"></i> Pessoas referenciadas desligadas</li>
					</ol>


				</div>
			</div>

			<br>

			<div class="row">

				<div class="span7">
			
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="#" class="btn btn-large btn-info btn-support-ask disabled">
								Pessoas referênciadas desligadas
								<span class="badge">
									{{ $peoplesreference->count(); }}
								</span>
							</a>
						</div>
					</div>

				</div>

				@include('layout._deletes')
				
				@include('layout._success')
				
				@include('layout._infos')


			</div>

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-off"></i>
							<h3>Pessoas referenciadas desligadas</h3>
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