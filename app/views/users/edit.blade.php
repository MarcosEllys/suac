@section('content')

{{ Form::open(array('action' => 'UsersController@handleEdit', 'class' => 'form-horizontal')) }}

{{ Form::hidden('id',$users->id) }}

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
							/ <i class="icon-pencil"></i> Editar usuário
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">
					<div class="widget ">
						
						<div class="widget-header">
							<i class="icon-pencil"></i>
							<h3>Editar usuário</h3>
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
													{{ Form::text('nome',$users->nome,array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '60', 'autofocus', 'required') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('sexo', 'Sexo:',array('class' => 'control-label') ) }}
												<div class="controls">
													<label class="radio inline">
														{{ Form::radio('sexo', 'M', true) }} Masculino
													</label>
													<label class="radio inline">
														{{ Form::radio('sexo', 'F') }} Femimino

													</label>		
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nascimento',$users->nascimento,array('class' => 'span2','placeholder' => 'AAAAMMDD') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('cpf',$users->cpf,array('class' => 'span6', 'placeholder' => 'Somente os números') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do Rg:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('rg',$users->rg,array('class' => 'span6', 'placeholder' => 'Somente os números') ) }}
												</div>
											</div>

											<div class="control-group">

												{{ Form::label('orgaorg', 'Orgão expedidor:',array('class' => 'control-label')) }}
												<div class="controls">

													{{ Form::select('orgaorg', array(
													'SSP' => 'SSP',
													'IFP' => 'IFP',
													'IPF' => 'IPF',
													'MA' => 'MA',
													'MM' => 'MM',
													'MT' => 'MT',
													'OAB' => 'OAB',
													'CREA' => 'CREA',
													'CRM' => 'CRM',
													'CRA' => 'CRA',
													'ME' => 'ME',
													'CBM' => 'CBM',
													'CRO' => 'CRO',
													'CRF' => 'CRF',
													), $users->orgaorg) 
												}}

											</div>
										</div>

										<div class="control-group">
											{{ Form::label('ufrg', 'UF do RG:',array('class' => 'control-label')) }}
											<div class="controls">

												{{ Form::select('ufrg', array(
												'CE' => 'CE',
												'PB' => 'PB',
												'PE' => 'PE',
												'DF' => 'DF',
												'BA' => 'BA',
												'AL' => 'AL',
												'RS' => 'RS',
												'SC' => 'SC',
												'PR' => 'PR',
												'SP' => 'SP',
												'RJ' => 'RJ',
												'MG' => 'MG',
												'ES' => 'ES',
												'MT' => 'MT',
												'MS' => 'MS',
												'GO' => 'GO',
												'RN' => 'RN',
												'AP' => 'AP',
												'TO' => 'TO',
												'AC' => 'AC',
												'RO' => 'RO',
												'RR' => 'RR',
												'AM' => 'AM',
												'PA' => 'PA',
												'MA' => 'MA',
												'PI' => 'PI',
												'SE' => 'SE'
												), $users->ufrg) 
											}}


										</div>
									</div>

									<div class="control-group">
										{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('emitedrg',$users->emitedrg,array('class' => 'span2','placeholder' => 'AAAAMMDD') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('telefone','Telefone:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('telefone',$users->telefone,array('class' => 'span6') ) }}
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
													{{ Form::text('username',$users->username,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('password','Senha:',array('class' => 'control-label','required') ) }}
												<div class="controls">
													{{ Form::text('password',null,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('password_confirmation','Repita a senha:',array('class' => 'control-label','required') ) }}
												<div class="controls">
													{{ Form::text('password_confirmation',null,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('email','Email:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('email',$users->email,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('is_admin', 'Tipo de usuário:',array('class' => 'control-label') ) }}
												<div class="controls">
													<label class="radio inline">
														{{ Form::radio('is_admin', '1', true) }} Administrador
													</label>
													<label class="radio inline">
														{{ Form::radio('is_admin', '0') }} Usuário comum

													</label>		
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
											{{ Form::text('cep',$users->cep,array('class' => 'span6','placeholder' => 'Somente números') ) }}
										</div>
									</div>


									<div class="control-group">
										{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('rua',$users->rua,array('class' => 'span6','placeholder' => 'Rua ou avenida') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('bairro',$users->bairro,array('class' => 'span6') ) }}
										</div>
									</div>
									<div class="control-group">
										{{ Form::label('numero','Numero:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('numero',$users->numero,array('class' => 'span6', 'placeholder' => 'Somente os números') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('complemento',$users->complemento,array('class' => 'span6','placeholder' => 'Casa / Apartamento / Condominio') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('pointreferencia','Ponto de referência:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('pointreferencia',$users->pointreferencia,array('class' => 'span6','placeholder' => 'Escola / Hospital / Empresa') ) }}
										</div>
									</div>

									<div class="form-actions">

										{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

										{{ HTML::link('/users','Cancelar', array('class' => 'btn')) }}

									</div>

									{{ Form::close() }}


									<!-- /Até aqui -->

								</fieldset>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<ul class="nav nav-tabs">
		<li class="">
			<a class="btn" href="#formcontrols" data-toggle="tab"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> Dados pessoais</a>
		</li>
		<li class="">
			<a class="btn" href="#jscontrols" data-toggle="tab">Dados sobre endereço <i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></a>
		</li>
	</ul>

</div>

</div>

</div>


@stop