@section('content')

{{ Form::open(array('class' => 'form-horizontal')) }}

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
							/ <a href="{{ action('UsersController@index') }}"> <i class="icon-user-md "></i> Usuários</a>
						</li>
						<li>
							/ <i class="icon-eye-open"></i> Ver usuário
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">
					<div class="widget ">
						
						<div class="widget-header">
							<i class="icon-eye-open"></i>
							<h3>Ver usuário</h3>
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
												{{ Form::label('nome','Nome completo:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->nome }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('sexo', 'Sexo:',array('class' => 'control-label') ) }}
												<div class="controls">
													@if($users->sexo = 'M')
														Masculino
													@else
														Feminino
													@endif
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ $users->nascimento }}

													
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->cpf }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do Rg:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->rg }}}
												</div>
											</div>

											<div class="control-group">

												{{ Form::label('orgaorg', 'Orgão expedidor:',array('class' => 'control-label')) }}
												<div class="controls">
													{{{ $users->orgaorg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('ufrg', 'UF do RG:',array('class' => 'control-label')) }}
												<div class="controls">
													{{{ $users->ufrg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->emitedrg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('telefone','Telefone:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->telefone }}}
												</div>
											</div>


											<div class="widget">
												<div class="widget-header"> <i class="icon-star"></i>
													<h3>Dados do sistema</h3>
												</div>
												<div class="widget-content">


													<div class="control-group">
														{{ Form::label('username','Login:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{{ $users->username }}}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('email','Email:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{{ $users->email }}}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('is_admin', 'Tipo de usuário:',array('class' => 'control-label') ) }}
														<div class="controls">
															@if($users->is_admin)
															Administrador
															@else
															Usuário comum
															@endif		
														</div>
													</div>





												</div>
											</div>


											<!-- /Até aqui -->

										</fieldset>
									</div>

									<div class="tab-pane" id="jscontrols">
										<fieldset>


											<div class="control-group">
												{{ Form::label('cep','CEP:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->cep }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('uf','Estado:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->uf }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cidade','Cidade:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->cidade }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->rua }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->bairro }}}
												</div>
											</div>
											<div class="control-group">
												{{ Form::label('numero','Numero:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->numero }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->complemento }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('pointreferencia','Ponto de referência:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $users->pointreferencia }}}
												</div>
											</div>


											<!-- /Até aqui -->

										</fieldset>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			{{ HTML::link('/users','Voltar', array('class' => 'btn')) }}

			{{ Form::close() }}

		</div>

	</div>

</div>

@stop