<tr>
	<td>{{{$people->id}}}</td>
	<td>{{{$people->nome }}}</td>
	<td>{{{$people->apelido}}}</td>
	<td>

		<a href=' {{ action('PeoplesreferencesController@show', $people->id ) }} '>
			<button class="btn btn-info">
				Visualizar
			</button>
		</a>

		@if(!$people->desligado)
			<a href=' {{ action('PeoplesreferencesController@edit',$people->id ) }} '>
				<button class="btn btn-warning">
					Editar
				</button>
			</a>
		@endif

		@if($people->desligado)
		<a href=' {{ action('PeoplesreferencesController@delete',$people->id ) }} '>
			<button class="btn btn-success">
				Religar
			</button>
		</a>
		@else
		<a href=' {{ action('PeoplesreferencesController@delete',$people->id ) }} '>
			<button class="btn btn-danger">
				Desligar
			</button>
		</a>
		@endif

	</td>
</tr>