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

			<br>

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
												{{ Form::label('name','Nome completo:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('name',null,array('class' => 'span6', 'placeholder' => 'Nome completo', 'required' => 'true') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('apelido','Apelido:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('apelido',null,array('class' => 'span6', 'required' => 'true') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('namemather','Nome da mãe:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('namemather',null,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('namefather','Nome do pai:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('namefather',null,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nis','Nº do NIS:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nis',null,array('class' => 'span6','placeholder' => 'Número do NIS da pessoa referenciada', 'required' => 'true') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('cpf',null,array('class' => 'span6','placeholder' => 'Somente os números', 'required' => 'true') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do Registro de Identendidade:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('rg',null,array('class' => 'span6','placeholder' => 'Somente os números', 'required' => 'true') ) }}
												</div>
											</div>

											<div class="control-group">

												{{ Form::label('orgaorg', 'Orgão expedidor:',array('class' => 'control-label', 'required' => 'true')) }}
												<div class="controls">

													{{ Form::select('orgaorg', array(
													'ssp' => 'SSP'
													), 'ssp') }}

												</div>
											</div>

											<div class="control-group">
												{{ Form::label('ufrg', 'UF do Registro de Identidade:',array('class' => 'control-label')) }}
												<div class="controls">

													{{ Form::select('ufrg', array(
													'ce' => 'CE',
													'bh' => 'BH',
													'pe' => 'PE',
													'df' => 'DF'
													), 'ce') 
												}}


											</div>
										</div>

										<div class="control-group">
											{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
											<div class="controls">
												{{ Form::text('emitedrg',null,array('class' => 'span2','placeholder' => 'AAAAMMDD', 'required' => 'true') ) }}
											</div>
										</div>

										<div class="control-group">
											{{ Form::label('numprotuario','Nº do prontuário:',array('class' => 'control-label') ) }}
											<div class="controls">
												{{ Form::text('numprotuario',null,array('class' => 'span6','placeholder' => 'Somente os números', 'required' => 'true') ) }}
											</div>
										</div>

										<div class="control-group">
											{{ Form::label('typeunity', 'Tipo de unidade:',array('class' => 'control-label') ) }}
											<div class="controls">
												<label class="radio inline">
													{{ Form::radio('typeunity', 'cras', true) }} CRAS
												</label>
												<label class="radio inline">
													{{ Form::radio('typeunity', 'creas') }} CREAS
												</label>
											</div>
										</div>

										<div class="control-group">
											{{ Form::label('nameunity', 'Nome da unidade:',array('class' => 'control-label')) }}
											<div class="controls">

												{{ Form::select('nameunity', array(
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
											{{ Form::text('rua',null,array('class' => 'span6','placeholder' => 'Rua ou avenida', 'required' => 'true') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('logradouro','Bairro:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('logradouro',null,array('class' => 'span6', 'required' => 'true') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('cep','CEP:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('cep',null,array('class' => 'span6','placeholder' => 'Somente números', 'required' => 'true') ) }}
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
										{{ Form::text('complemento',null,array('class' => 'span6','placeholder' => 'Casa / Apartamento / Condominio') ) }}
									</div>
								</div>

								<div class="control-group">
									{{ Form::label('pointreference','Ponto de referência:',array('class' => 'control-label') ) }}
									<div class="controls">
										{{ Form::text('pointreference',null,array('class' => 'span6','placeholder' => 'Escola / Hospital / Empresa') ) }}
									</div>
								</div>

								<div class="control-group">
									{{ Form::label('telephone1','Telefone para contato 1:',array('class' => 'control-label') ) }}
									<div class="controls">
										{{ Form::text('telephone1',null,array('class' => 'span6', 'required' => 'true') ) }}
									</div>
								</div>

								<div class="control-group">
									{{ Form::label('telephone2','Telefone para contato 2:',array('class' => 'control-label') ) }}
									<div class="controls">
										{{ Form::text('telephone2',null,array('class' => 'span6') ) }}
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

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

	{{ HTML::link('/peoplesref','Cancelar', array('class' => 'btn')) }}

</div>

{{ Form::close() }}

</div>

</div>

</div>

@stop