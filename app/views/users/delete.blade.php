@section('content')

{{ Form::open(array('action' => 'UsersController@handleDelete', 'class' => 'form-horizontal')) }}

{{ Form::hidden('id', $users->id) }}


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
								/ <a href=" {{ action('PeoplesreferencesController@index') }} "> <i class="icon-user"></i> Pessoas referênciadas</a>
							</li>
							<li>
								/ <i class="icon-remove-sign"></i> Excluir pessoa referenciada
							</li>
						</ol>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="span12">
						<div class="widget ">
							<div class="widget-header">
								<i class="icon-remove-sign"></i>
								<h3>Excluir {{{ $users->nome }}}</h3>
							</div>
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#formcontrols" data-toggle="tab">Dados Pessoais</a>
										</li>
										<li class="">
											<a href="#jscontrols" data-toggle="tab">Dados sobre endereço</a>
										</li>
									</ul>

									<br>

									<div class="tab-content">
										<div class="tab-pane active" id="formcontrols">
												<fieldset>

													<div class="control-group">
														<label class="control-label" for="email">Código:</label>
														<div class="controls">
															{{{ $users->id }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Pessoa referenciada:</label>
														<div class="controls">
															{{{ $users->nome }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Apelido:</label>
														<div class="controls">
															{{{ $users->apelido }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Data de nascimento:</label>
														<div class="controls">
															{{{ $users->nascimento }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Nome da mãe:</label>
														<div class="controls">
															{{{ $users->nomemae }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Nome do pai:</label>
														<div class="controls">
															{{{ $users->nomepai }}}
														</div>	
													</div>

													<div class="control-group">
														<label class="control-label" for="email">NIS da pessoa de referência:</label>
														<div class="controls">
															{{{ $users->nis }}}
														</div>	
													</div>

													<div class="control-group">
														<label class="control-label" for="email">CPF:</label>
														<div class="controls">
															{{{ $users->cpf }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">RG:</label>
														<div class="controls">
															{{{ $users->rg }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Orgão expedidor:</label>
														<div class="controls">
															{{{ $users->orgaorg }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">UF do Registro de Identidade:</label>
														<div class="controls">
															{{{ $users->ufrg }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Data de emissão:</label>
														<div class="controls">
															{{{ $users->emitedrg }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Número do prontuário:</label>
														<div class="controls">
															{{{ $users->numeroprontuario }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label">Tipo de unidade</label>

														<div class="controls">
															{{{ $users->tipounidade }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Nome da Unidade:</label>
														<div class="controls">
															{{{ $users->nomeunidade }}}
														</div>
													</div>

												</fieldset>
										</div>

										<div class="tab-pane" id="jscontrols">
												<fieldset>
													
													<div class="control-group">
														<label class="control-label" for="email">CEP:</label>
														<div class="controls">
															{{{ $users->cep }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Municipio:</label>
														<div class="controls">
															{{{ $users->municipio }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Rua:</label>
														<div class="controls">
															{{{ $users->rua }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Bairro:</label>
														<div class="controls">
															{{{ $users->bairro }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Complemento:</label>
														<div class="controls">
															{{{ $users->complemento }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Ponto de referência:</label>
														<div class="controls">
															{{{ $users->pointreference }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Telefone para contato 1:</label>
														<div class="controls">
															{{{ $users->telefone1 }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label" for="email">Telefone para contato 2:</label>
														<div class="controls">
															{{{ $users->telefone2 }}}
														</div>
													</div>

													<div class="control-group">
														<label class="control-label">Localização do domicilio</label>

														<div class="controls">
															{{{ $users->localization }}}																
														</div>
													</div>
												</fieldset>
										</div>
									</div>
								</div>
							</div>
						</div>

						{{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}

						{{ HTML::link('/peoplesref','Cancelar', array('class' => 'btn')) }}


						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

@stop