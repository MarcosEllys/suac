	<tr>
	<td>{{{$user->id}}}</td>
	<td>{{{$user->nome }}}</td>
	<td>
		@if($user->is_admin = true)
			Administrador
		@else
			Usuário comum
		@endif
	</td>
	<td>

		<a href=' {{ action('UsersController@show', $user->id ) }} '>
			<button class="btn btn-info">
				Visualizar
			</button>
		</a>
		
		<a href=' {{ action('UsersController@edit',$user->id ) }} '>
			<button class="btn btn-warning">
				Editar
			</button>
		</a>

		<a href=' {{ action('UsersController@delete',$user->id ) }} '>
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>

	</td>
</tr>


      