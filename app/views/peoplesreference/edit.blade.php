@section('content')

	{{ Form::open(array('action' => 'PeoplesreferencesController@handleEdit', 'class' => 'form-horizontal')) }}

	<input type="hidden" name="id" value="{{ $people->id }}">


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
								/ <i class="icon-pencil"></i> Editar pessoa referenciada
							</li>
						</ol>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="span12">
						<div class="widget ">
							<div class="widget-header">
								<i class="icon-pencil"></i>
								<h3>Editar pessoa referenciada</h3>
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
														{{ Form::label('name','Nome completo:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('name',$people->name,array('class' => 'span6') ) }}
														</div>
													</div>
													<div class="control-group">
														{{ Form::label('apelido','Apelido:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('apelido',$people->apelido,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('namemather','Nome da mãe:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('namemather',$people->namemather,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('namefather','Nome do pai:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('namefather',$people->namefather,array('class' => 'span6') ) }}
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
														{{ Form::label('rg','Nº do Registro de Identendidade:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('rg',$people->rg,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('orgaorg', 'Orgão expedidor:',array('class' => 'control-label')) }}
														<div class="controls">

															{{ Form::select('orgaorg', array(
																'ssp' => 'SSP'
																), $people->orgaorg) 
															}}

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
																), $people->ufrg) 
															}}

														</div>
													</div>

													<div class="control-group">
														{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('emitedrg',$people->emitedrg,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('numprotuario','Nº do prontuário:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('numprotuario',$people->numprotuario,array('class' => 'span6') ) }}
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
																), $people->nameunity) 
															}}

														</div>
													</div>

												</fieldset>
										</div>

										<div class="tab-pane" id="jscontrols">
												<fieldset>

													<div class="control-group">
														{{ Form::label('rua','Rua:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('rua',$people->rua,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('logradouro','Bairro:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('logradouro',$people->logradouro,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('cep','CEP:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('cep',$people->cep,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('municipio','Municipio:',array('class' => 'control-label') ) }}
														<div class="controls">

															{{ Form::select('municipio', array(
																'ico' => 'Icó',
																'russas' => 'Russas',
																'jaguaribe' => 'Jaguaribe'
																), $people->municipio) 
															}}

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
														{{ Form::label('telephone1','Telefone para contato 1:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('telephone1s',$people->telephone1,array('class' => 'span6') ) }}
														</div>
													</div>

													<div class="control-group">
														{{ Form::label('telephone2','Telefone para contato 1:',array('class' => 'control-label') ) }}
														<div class="controls">
															{{ Form::text('telephone2',$people->telephone2,array('class' => 'span6') ) }}
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
													</div>
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