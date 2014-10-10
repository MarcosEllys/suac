@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-user-md"></i> Usuários</li>
					</ol>


				</div>
			</div>

			<br>

			<div class="row">

				<div class="span7">
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="{{ action('UsersController@create') }}" class="btn btn-large btn-success btn-support-ask"> Cadastrar usuário</a>
						</div>
					</div>					
				</div>


			</div>

			@if(Session::has('MessageSuccess'))
				<div class="alert alert-success">
					{{Session::get('message')}}
				</div>
			@endif

			@if(Session::has('MessageInfo'))
				<div class="alert alert-info">
					{{Session::get('message')}}
				</div>
			@endif

			<div class="row">
				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-home"></i>
							<h3>Usuários cadastradas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Tipo</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($users as $user)

										@include('users._user_tile')

									@endforeach

								</tbody>
							</table>
						</div>
					</div>

					{{ $users->links(); }}


				</div>
			</div>
		</div>
	</div>
</div>


@stop