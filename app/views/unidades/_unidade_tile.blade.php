	<tr>
	<td>{{{$unidade->id}}}</td>
	<td>{{{$unidade->nome }}}</td>
	<td>{{{$unidade->tipo}}}</td>
	<td class="td-actions">

		<a href=' {{ action('PeoplesreferencesController@show', $unidade->id ) }} '>
			<button class="btn btn-info">
				Visualizar
			</button>
		</a>
		
		<a href=' {{ action('PeoplesreferencesController@edit',$unidade->id ) }} '>
			<button class="btn btn-warning">
				Editar
			</button>
		</a>

		<a href=' {{ action('PeoplesreferencesController@delete',$unidade->id ) }} '>
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>

	</td>
</tr>


      