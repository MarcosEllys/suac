@section('content')

{{ Form::open(array('action' => 'PeoplesreferencesController@store', 'class' => 'form-horizontal')) }}

<div class="main">

	<div class="main-inner">
		<div class="container">


			<div class="row">
				<div class="span12">
					<ol class="breadcrumb">
						<li>
							<a href="/"><i class="icon-dashboard"></i> Home</a>
						</li>
						<li>
							/ <a href="/peoplesref"> <i class="icon-group"></i> Pessoas referênciadas</a>
						</li>
						<li>
							/ <i class="icon-user"></i> Cadastrar pessoa referênciada
						</li>
					</ol>
				</div>
			</div>

			@include('layout._errors')				


			<div class="row">
				<div class="span12">
					<div class="widget ">
						
						<div class="widget-header">
							<i class="icon-user"></i>
							<h3>Cadastrar pessoa referênciada</h3>
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
												{{ Form::label('apelido','Apelido:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('apelido',Input::old('apelido'),array('class' => 'span6', 'maxlength' => '30') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nascimento',Input::old('nascimento'),array('class' => 'span2','placeholder' => 'AAAAMMDD') ) }}
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
													'ssp' => 'SSP',
													'ifp' => 'IFP',
													'ipf' => 'IPF',
													'ma' => 'MA',
													'mm' => 'MM',
													'mt' => 'MT',
													'oab' => 'OAB',
													'crea' => 'CREA',
													'crm' => 'CRM',
													'cra' => 'CRA',
													'me' => 'ME',
													'cbm' => 'CBM',
													'cro' => 'CRO',
													'crf' => 'CRF',
													), 'ssp') 
												}}

											</div>
										</div>

										<div class="control-group">
											{{ Form::label('ufrg', 'UF do Registro de Identidade:',array('class' => 'control-label')) }}
											<div class="controls">

												{{ Form::select('ufrg', array(
												'ce' => 'CE',
												'pb' => 'PB',
												'pe' => 'PE',
												'df' => 'DF',
												'ba' => 'BA',
												'al' => 'AL',
												'rs' => 'RS',
												'sc' => 'SC',
												'pr' => 'PR',
												'sp' => 'SP',
												'rj' => 'RJ',
												'mg' => 'MG',
												'es' => 'ES',
												'mt' => 'MT',
												'ms' => 'MS',
												'go' => 'GO',
												'rn' => 'RN',
												'ap' => 'AP',
												'to' => 'TO',
												'ac' => 'AC',
												'ro' => 'RO',
												'rr' => 'RR',
												'am' => 'AM',
												'pa' => 'PA',
												'ma' => 'MA',
												'pi' => 'PI',
												'se' => 'SE'
												), 'ce') 
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
										{{ Form::label('numeroprontuario','Nº do prontuário:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('numeroprontuario',Input::old('numeroprontuario'),array('class' => 'span6','placeholder' => 'Somente os números') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('tipounidade', 'Tipo de unidade:',array('class' => 'control-label') ) }}
										<div class="controls">
											<label class="radio inline">
												{{ Form::radio('tipounidade', 'cras', true) }} CRAS
											</label>
											<label class="radio inline">
												{{ Form::radio('tipounidade', 'creas') }} CREAS
											</label>
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('nomeunidade', 'Unidade de atendimento:',array('class' => 'control-label')) }}
										<div class="controls">

											{{ Form::select('nomeunidade', array(
											'centro' => 'Centro',
											'alto manoel marioano' => 'Alto Manoel Marioano',
											'bnh' => 'BNH'
											), 'centro') 
										}}

									</div>
								</div>
								<!-- /Até aqui -->

							</fieldset>
						</div>

						<div class="tab-pane" id="jscontrols">
							<fieldset>

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
									{{ Form::label('cep','CEP:',array('class' => 'control-label') ) }}
									<div class="controls">
										{{ Form::text('cep',Input::old('cep'),array('class' => 'span6','placeholder' => 'Somente números') ) }}
									</div>
								</div>

								<div class="control-group">
									{{ Form::label('municipio','Municipio:',array('class' => 'control-label') ) }}
									<div class="controls">

										{{ Form::select('municipio', array(
										'ico' => 'Icó',
										'russas' => 'Russas',
										'jaguaribe' => 'Jaguaribe'
										), 'ico') 
									}}

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

							<div class="control-group">
								{{ Form::label('telefone1','Telefone para contato 1:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('telefone1',Input::old('telefone1'),array('class' => 'span6') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('telefone2','Telefone para contato 2:',array('class' => 'control-label') ) }}
								<div class="controls">
									{{ Form::text('telefone2',Input::old('telefone2'),array('class' => 'span6') ) }}
								</div>
							</div>

							<div class="control-group">
								{{ Form::label('localization', 'Tipo de unidade:',array('class' => 'control-label') ) }}
								<div class="controls">
									<label class="radio inline">
										{{ Form::radio('localization', 'urbano', true) }} Urbano
									</label>
									<label class="radio inline">
										{{ Form::radio('localization', 'rural') }} Rural

									</label>		
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