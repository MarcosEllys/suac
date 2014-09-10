<tr>
	<td> {{{ $people->id }}} </td>
	<td>{{{ $people->name }}}</td>
	<td>{{{ $people->apelido }}}</td>
	<td class="td-actions">

		<a href=' {{ action('PeoplesreferencesController@show', array('id' => $people->id) ) }} '>
			<button class="btn btn-info">
				Visualizar
			</button>
		</a>
		
		<a href=' {{ action('PeoplesreferencesController@edit', array('id' => $people->id) ) }} '>
			<button class="btn btn-warning">
				Editar
			</button>
		</a>


		<a href="#">
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>

	</td>
</tr>


      