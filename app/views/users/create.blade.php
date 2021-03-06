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
													{{ Form::text('nome',Input::old('nome'),array('class' => 'span6', 'placeholder' => 'Nome completo', 'maxlength' => '60', 'autofocus', 'required') ) }}
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
													{{ Form::text('nascimento',Input::old('nascimento'),array('class' => 'span2','id' => 'mask_date','required') ) }}
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
													{{ Form::text('rg',Input::old('rg'),array('class' => 'span6', 'placeholder' => 'Somente os números', 'required') ) }}
												</div>
											</div>

											<div class="control-group">

												{{ Form::label('orgaorg', 'Orgão expedidor:',array('class' => 'control-label')) }}
												<div class="controls">

													{{ Form::select('orgaorg', array(
													'' => '',
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
													), '') 
												}}

											</div>
										</div>

										<div class="control-group">
											{{ Form::label('ufrg', 'UF do RG:',array('class' => 'control-label')) }}
											<div class="controls">

												{{ Form::select('ufrg', array(
												'' => '',
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
												), '') 
											}}


										</div>
									</div>

									<div class="control-group">
										{{ Form::label('emitedrg','Data de emissão:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('emitedrg',Input::old('emitedrg'),array('class' => 'span2','placeholder' => 'AAAAMMDD', 'required') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('telefone','Telefone:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('telefone',Input::old('telefone'),array('class' => 'span6') ) }}
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
													{{ Form::text('username',Input::old('username'),array('class' => 'span6', 'required') ) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('password','Senha:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::password('password', ['class' => 'span6']) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('password_confirmation','Repita a senha:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::password('password_confirmation', ['class' => 'span6']) }}
												</div>
											</div>

											<div class="control-group">
												{{ Form::label('email','Email:',array('class' => 'control-label') ) }}
												<div class="controls">
													{{ Form::text('email',Input::old('email'),array('class' => 'span6', 'required') ) }}
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
										{{ Form::label('numero','Numero:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('numero',Input::old('numero'),array('class' => 'span6', 'placeholder' => 'Somente os números') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('complemento','Complemento:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('complemento',Input::old('complemento'),array('class' => 'span6','placeholder' => 'Casa / Apartamento / Condominio') ) }}
										</div>
									</div>

									<div class="control-group">
										{{ Form::label('pointreferencia','Ponto de referência:',array('class' => 'control-label') ) }}
										<div class="controls">
											{{ Form::text('pointreferencia',Input::old('pointreferencia'),array('class' => 'span6','placeholder' => 'Escola / Hospital / Empresa') ) }}
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


<script src="{{ asset("js/masks/form-components.js") }}"></script>

<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
	<script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>

	<script>
	jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>

	@stop