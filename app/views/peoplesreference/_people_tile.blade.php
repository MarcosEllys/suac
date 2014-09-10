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
		<a href="#">
			<button class="btn btn-warning">
				Alterar
			</button>
		</a>
		<a href=' {{ action('PeoplesreferencesController@destroy', array('id' => $people->id) ) }} '>
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>
	</td>
</tr>