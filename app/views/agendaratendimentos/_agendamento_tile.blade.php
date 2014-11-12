	<tr>
		<td>{{{ $agendamento->peoplesreference }}}</td>
		<td>
			@if( $agendamento->tipoatendimento == 1 )
			Socioassistencial individualizado
			@elseif( $agendamento->tipoatendimento == 2 )
			Atividade coletiva de caráter continuado
			@elseif( $agendamento->tipoatendimento == 3 )
			Participação em atividade coletiva de caráter não continuado
			@elseif( $agendamento->tipoatendimento == 4 )
			Cadastramento/Atualização Cadastra
			@elseif( $agendamento->tipoatendimento == 5 )
			Acompanhamento de MSE
			@elseif( $agendamento->tipoatendimento == 6 )
			Solicitação/Concessão de Benefício Eventual
			@elseif( $agendamento->tipoatendimento == 7 )
			Visita Domiciliar
			@elseif( $agendamento->tipoatendimento == 8 )
			Outros
			@endif
		</td>
		<td> {{{ $agendamento->atendimento }}} </td>
		<td>

			@if(isset($cancelados))

				{{ Form::open(array('action' => 'AgendaratendimentosController@realizado', 'class' => '')) }}
				{{ Form::hidden('id', $agendamento->id) }}
					<button type="submit" class="btn btn-small btn-success">
						<i class="btn-icon-only icon-ok"> </i>
					</button>
				{{ Form::close() }}
				

				{{ Form::open(array('action' => 'AgendaratendimentosController@cancelado', 'class' => '')) }}
				{{ Form::hidden('id', $agendamento->id) }}
					<button type="submit" class="btn btn-danger btn-small">
						<i class="btn-icon-only icon-ok"> </i>
					</button>
				{{ Form::close() }}

			@endif

			
		</td>
	</tr>


