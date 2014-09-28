	<tr>
	<td>{{{$unidade->id}}}</td>
	<td>{{{$unidade->nome }}}</td>
	<td>{{{$unidade->tipo}}}</td>
	<td>

		<a href=' {{ action('UnidadesController@show', $unidade->id ) }} '>
			<button class="btn btn-info">
				Visualizar
			</button>
		</a>
		
		<a href=' {{ action('UnidadesController@edit',$unidade->id ) }} '>
			<button class="btn btn-warning">
				Editar
			</button>
		</a>

		<a href=' {{ action('UnidadesController@delete',$unidade->id ) }} '>
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>

	</td>
</tr>


      