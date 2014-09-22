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
							/ <a href="{{ action('UsersController@index') }}"> <i class="icon-user-md "></i> Usuários</a>
						</li>
						<li>
							/ <i class="icon-plus-sign"></i> Cadastrar usuário
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


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
													{{ Form::text('nome',Input::old('nome'),array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '60') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('localization', 'Sexo:',array('class' => 'control-label') ) }}
												<div class="controls">
													<label class="radio inline">
														{{ Form::radio('localization', 'm', true) }} Masculino
													</label>
													<label class="radio inline">
														{{ Form::radio('localization', 'f') }} Femimino

													</label>		
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nascimento',Input::old('nascimento'),array('class' => 'span2','placeholder' => 'AAAAMMDD') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('cpf',Input::old('cpf'),array('class' => 'span6','placeholder' => 'Somente os números') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do RG:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('rg',Input::old('rg'),array('class' => 'span6','placeholder' => 'Somente os números') ) }}
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
													), 'SSP') 
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
												), 'CE') 
											}}


										</div>
									</div>


									<div class="control-group">
										{{ Form::label('nomemae','Nome da mãe:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('nomemae',Input::old('nomemae'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('nomepai','Nome do pai:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('nomepai',Input::old('nomepai'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('nis','Nº do NIS:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('nis',null,array('class' => 'span6','placeholder' => 'Número do NIS da pessoa referenciada') ) }}
										</div>
									</div>


									<div class="control-group">
										{{ Form::label('rg','Nº do RG:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('rg',Input::old('rg'),array('class' => 'span6','placeholder' => 'Somente os números') ) }}
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
											), 'SSP') 
										}}

									</div>
								</div>

								<div class="control-group">
									{{ Form::label('ufrg', 'UF do Registro de Identidade:',array('class' => 'control-label')) }}
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
										), 'CE') 
									}}


								</div>
							</div>

							<div class="control-group">
								{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('emitedrg',Input::old('emitedrg'),array('class' => 'span2','placeholder' => 'AAAAMMDD') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('telefone','Telefone:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('telefone',Input::old('telefone1'),array('class' => 'span6') ) }}
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
											{{ Form::text('username',Input::old('username'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('passowrd','Senha:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::password('passowrd',Input::old('passowrd'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('passowrd_confirmation','Repita a senha:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::password('passowrd_confirmation',Input::old('passowrd_confirmation'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('email','Email:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('email',Input::old('email'),array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
												{{ Form::label('localization', 'Tipo de usuário:',array('class' => 'control-label') ) }}
												<div class="controls">
													<label class="radio inline">
														{{ Form::radio('localization', '0', true) }} Administrador
													</label>
													<label class="radio inline">
														{{ Form::radio('localization', '1') }} Assistente social

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
									{{ Form::text('cep',Input::old('cep'),array('class' => 'span6','placeholder' => 'Somente números') ) }}
								</div>
							</div>


							<div class="control-group">
								{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('rua',Input::old('rua'),array('class' => 'span6','placeholder' => 'Rua ou avenida') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('bairro',Input::old('bairro'),array('class' => 'span6') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('numero','Número:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('numero',Input::old('numero'),array('class' => 'span6') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('complemento',Input::old('complemento'),array('class' => 'span6','placeholder' => 'Casa / Apartamento / Condominio') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('pointreference','Ponto de referência:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('pointreference',Input::old('pointreference'),array('class' => 'span6','placeholder' => 'Escola / Hospital / Empresa') ) }}
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

	{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

	{{ HTML::link('/peoplesref','Cancelar', array('class' => 'btn')) }}

</div>

{{ Form::close() }}

</div>

</div>

</div>

@stop