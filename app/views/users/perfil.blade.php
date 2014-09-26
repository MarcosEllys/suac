@section('content')

{{ Form::open(array('action' => 'UsersController@store', 'class' => 'form-horizontal')) }}

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
							/ <i class="icon-user-md"></i> Perfil
						</li>
					</ol>
				</div>
			</div>

			<div class="row">
				<div class="span12">
					<div class="widget ">
						
						<div class="widget-header">
							<i class="icon-plus-sign"></i>
							<h3>Cadastrar usuário</h3>
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
													{{{ Auth::User()->nome }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('sexo','Sexo:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->sexo }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->nascimento }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->cpf }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do RG:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->rg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('orgaorg','Orgão expedidor:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->orgaorg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('ufrg','UF do RG:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->ufrg }}}
												</div>
											</div>


											<div class="control-group">
												{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->emitedrg }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('telefone','Telefone:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->telefone }}}
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
															{{{ Auth::User()->username }}}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('email','Email:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{{ Auth::User()->email }}}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('is_admin','Tipo de usuário:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{{ Auth::User()->is_admin }}}
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
													{{{ Auth::User()->cep }}}
												</div>
											</div>


											<div class="control-group">
												{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->rua }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->bairro }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('numero','Número:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->numero }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->complemento }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('pointreferencia','Ponto de referência:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ Auth::User()->pointreferencia }}}
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

			<div class="form-actions">

				{{ HTML::link('/users','Cancelar', array('class' => 'btn')) }}

			</div>

			{{ Form::close() }}

		</div>

	</div>

</div>

@stop