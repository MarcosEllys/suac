@section('content')

{{ Form::open(array('action' => 'PeoplesreferencesController@handleEdit', 'class' => 'form-horizontal')) }}

{{ Form::hidden('id', $people->id) }}


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
							/ <i class="icon-pencil"></i> Editar pessoa referênciada
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
							<h3>Editando {{{ $people->nome }}}</h3>
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
												{{ Form::label('id','Código:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{{ $people->id }}}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nome','Nome completo:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nome',$people->nome,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('apelido','Apelido:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('apelido',$people->apelido,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nascimento','Data de nascimento:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nascimento',$people->nascimento,array('class' => 'span2') ) }}
												</div>
											</div>


											<div class="control-group">
												{{ Form::label('nomemae','Nome da mãe:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nomemae',$people->nomemae,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nomepai','Nome do pai:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nomepai',$people->nomepai,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('nis','Nº do NIS:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('nis',$people->nis,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('cpf','Nº do CPF:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('cpf',$people->cpf,array('class' => 'span6') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('rg','Nº do RG:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('rg',$people->rg,array('class' => 'span6') ) }}
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
													), $people->orgaorg) 
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
												), $people->ufrg)
											}}


										</div>
									</div>

									<div class="control-group">
										{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('emitedrg',$people->emitedrg,array('class' => 'span2') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('numeroprontuario','Nº do prontuário:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('numeroprontuario',$people->numeroprontuario,array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">

										{{ Form::label('unidade_id', 'Unidade de atendimento:',array('class' => 'control-label')) }}
										
										<div class="controls">

											<select id="unidade_id" name="unidade_id">
												@foreach($unidades as $unidade)
												<option value=" {{{$unidade->id}}} " selected="selected">{{{$unidade->nome}}}</option>
												@endforeach
											</select>

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
											{{ Form::text('cep',$people->cep,array('class' => 'span6') ) }}
										</div>
									</div>


									<div class="control-group">
										{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('rua',$people->rua,array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('bairro','Bairro:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('bairro',$people->bairro,array('class' => 'span6') ) }}
										</div>
									</div>


									<div class="control-group">
										{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('complemento',$people->complemento,array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('pointreference','Ponto de referência:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('pointreference',$people->pointreference,array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('telefone1','Telefone para contato 1:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('telefone1',$people->telefone1,array('class' => 'span6') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('telefone2','Telefone para contato 2:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('telefone2',$people->telefone2,array('class' => 'span6') ) }}
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
</div>

@stop