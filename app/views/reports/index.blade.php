@extends('layout.master')

@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">

			<div class="row">
				<div class="span12">

					<ol class="breadcrumb">
						<li>
							<a href="{{ URL("/") }}"><i class="icon-dashboard"></i> Home</a>
						</li>
						<li class="active">
							/ <i class="icon-list-alt"></i> Relatórios
						</li>
					</ol>

				</div>
			</div>


			<div class="row">

				<div class="span12">

					<div class="widget">
						<div class="widget-header">
							<i class="icon-list-alt"></i>
							<h3>Tipos de relatórios</h3>
						</div>
						<div class="widget-content">
							<div class="shortcuts">
								<a href=" {{ URL("reports/peoples") }} " class="shortcut">
									<i class="shortcut-icon icon-user"></i> <span class="shortcut-label"> Pessoas referenciadas cadastradas </span> 
								</a>
								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-group"></i> <span class="shortcut-label"> Famílias cadastradas </span> 
								</a>
								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-ok"></i> <span class="shortcut-label">Atendimentos realizados </span> 
								</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>



@stop
