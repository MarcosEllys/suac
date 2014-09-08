<tr>
	<td> {{{ $people->id }}} </td>
	<td>{{{ $people->name }}}</td>
	<td>{{{ $people->apelido }}}</td>
	<td class="td-actions">

		{{ HTML::link('/show{$id}', 'Ver', array('id' => $people->id, 'class' => 'btn btn-info')) }}

		<a href="alterar.php">
			<button class="btn btn-warning">
				Alterar
			</button>
		</a>
		<a href="#">
			<button class="btn btn-danger">
				Excluir
			</button>
		</a>
	</td>
</tr>