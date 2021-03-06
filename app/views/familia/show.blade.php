@extends('layout.master')

@section('content')


<div class="main">
	<div class="main-inner">
		<div class="container">

			<div class="row">
				<div class="span12">
					<ol class="breadcrumb">
						<li>
							<a href=" {{ URL("/") }} "><i class="icon-dashboard"></i> Home</a>
						</li>
						<li>
							/ <a href=" {{ action('FamilysController@index') }} ">
							<i class="icon-group"></i> Família</a>
						</li>
						<li>
							/ <i class="icon-eye-open"></i> Informações
						</li>
					</ol>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="span12">
					<div class="widget ">
						<div class="widget-header">
							<i class="icon-eye-open"></i>
							<h3>Informações</h3>
						</div>
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#morefamily" data-toggle="tab">Dados sobre familia</a>
									</li>
									<li class="">
										<a href="#morelocalization" data-toggle="tab">Dados sobre endereço</a>
									</li>
									<li class="">
										<a href="#convivencia" data-toggle="tab">Dados sobre convivencia</a>
									</li>
									<li class="">
										<a href="#habitacional" data-toggle="tab">Condição habitacional</a>
									</li>

								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="morefamily">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">Código:</label>
													<div class="controls">
														{{{ $familia->peoplereference->id }}}
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="email">
														Pessoa referenciada:
													</label>
													<div class="controls">
														{{{ $familia->peoplereference->nome }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Apelido:</label>
													<div class="controls">
														{{{ $familia->peoplereference->apelido }}}
													</div>
												</div>

												<hr>

												<div class="widget widget-plain">
													<div class="widget-content">
														<a href="" class="btn btn-large btn-success btn-support-ask">
															Cadastrar membro
														</a>
													</div>
												</div>

												<div class="widget widget-table action-table">
													<div class="widget-header">
														<i class="icon-group"></i>
														<h3> Membros familiares cadastrados</h3>
													</div>
													<div class="widget-content">
														<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th>Id</th>
																	<th>Nome</th>
																	<th>Parentesco</th>
																	<th>Ações</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td> Ana Caroline Carneiro de Sousa</td>
																	<td> Esposa </td>
																	<td>
																		<a href=" http://suac.com.br/users/show/1 ">
																			<button class="btn btn-info">
																				Visualizar
																			</button>
																		</a>
																		<a href=" http://suac.com.br/users/edit/1 ">
																			<button class="btn btn-warning">
																				Editar
																			</button>
																		</a>
																		<a href=" http://suac.com.br/users/delete/1 ">
																			<button class="btn btn-danger">
																				Excluir
																			</button>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td> Álvaro Carneiro Rocha </td>
																	<td> Filho </td>
																	<td>
																		<a href=" http://suac.com.br/users/show/2 ">
																			<button class="btn btn-info">
																				Visualizar
																			</button>
																		</a>
																		<a href=" http://suac.com.br/users/edit/2 ">
																			<button class="btn btn-warning">
																				Editar
																			</button>
																		</a>
																		<a href=" http://suac.com.br/users/delete/2 ">
																			<button class="btn btn-danger">
																				Excluir
																			</button>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>

											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="morelocalization">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">CEP:</label>
													<div class="controls">
														{{{ $familia->peoplereference->cep }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Estado:</label>
													<div class="controls">
														{{{ $familia->peoplereference->uf }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Municipio:</label>
													<div class="controls">
														{{{ $familia->peoplereference->municipio }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Rua:</label>
													<div class="controls">
														{{{ $familia->peoplereference->rua }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Bairro:</label>
													<div class="controls">
														{{{ $familia->peoplereference->bairro }}}
													</div>
												</div>



												<div class="control-group">
													<label class="control-label" for="email">Complemento:</label>
													<div class="controls">
														{{{ $familia->peoplereference->complemento }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">
														Ponto de referência:
													</label>
													<div class="controls">
														{{{ $familia->peoplereference->pointreference }}}
													</div>
												</div>

											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="convivencia">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													<label class="control-label" for="email">Renda total:</label>
													<div class="controls">
														R$ {{{ $familia->rendatotal }}}
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Anos que mora no estado:</label>
													<div class="controls">
														{{{ $familia->anosmoraestado }}} ano(s)
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Anos que mora no municipio:</label>
													<div class="controls">
														{{{ $familia->anosmoramunicipio }}} ano(s)
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="email">Anos que mora no bairro:</label>
													<div class="controls">
														{{{ $familia->anosmorabairro }}} ano(s)
													</div>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="tab-pane" id="habitacional">
										<form id="edit-profile" class="form-horizontal">
											<fieldset>

												<div class="control-group">
													{{ Form::label('tiporesidencia', 'Tipo de residencia:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{{ $familia->habitacional->tiporesidencia }}}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('materialparedes', 'Material das paredes:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{{ $familia->habitacional->materialparedes }}}
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('energia', 'A residencia tem energia:',array('class' => 'control-label') ) }}
													<div class="controls">
														@if($familia->habitacional->energia)
															Sim
														@else
															Não
														@endif
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('agua', 'A residencia tem agua:',array('class' => 'control-label') ) }}
													<div class="controls">
														@if($familia->habitacional->agua)
															Sim
														@else
															Não
														@endif	
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('esgoto', 'A residencia tem escoamento sanitário:',array('class' => 'control-label') ) }}
													<div class="controls">
														@if($familia->habitacional->esgoto)
															Sim
														@else
															Não
														@endif
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'A rua tem coleta de lixo:',array('class' => 'control-label') ) }}
													<div class="controls">
														Não		
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('dormitorios', 'Quantidade de comodos do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														5		
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('dormitorios', 'Quantidade de dormitórios do imóvel:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{{ $familia->habitacional->qtddormitorios }}}	
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Localizado em área de desabamento:',array('class' => 'control-label') ) }}
													<div class="controls">
														Sim	
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Localizado em área de dificil acesso:',array('class' => 'control-label') ) }}
													<div class="controls">
														Sim		
													</div>
												</div>

												<div class="control-group">
													{{ Form::label('is_admin', 'Observação:',array('class' => 'control-label') ) }}
													<div class="controls">
														{{{ $familia->habitacional->observacao }}}
													</div>
												</div>

											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>

						<br>

						{{ HTML::link('/peoplesref','Voltar', array('class' => 'btn')) }}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop