@if(!$familia->peoplereference->desligado)
	<tr>
		<td> {{{ $familia->id }}} </td>
		<td> {{{ $familia->peoplereference->nome }}} </td>
		<td>
			@if($familia->completo)
			<span class="label label-success">Concluído</span>
			@else
			<span class="label label-warning">Incompleto</span>
			@endif
		</td>
		<td>

			<a href=' {{ action('FamilysController@show', $familia->id ) }} '>
				<button class="btn btn-info">
					Visualizar
				</button>
			</a>
			<a href=' {{ action('FamilysController@edit',$familia->id ) }} '>
			<button class="btn btn-warning">
				Editar
			</button>
		</a>
		
		</td>
	</tr>
	@endif