@extends('layout.master')

@section('header')

@parent

@stop

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
								<!-- /widget-header -->
								<div class="widget-content">
									<div class="shortcuts">
										<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-group"></i> <span class="shortcut-label"> Famílias cadastradas </span> </a>
										<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-ok"></i> <span class="shortcut-label"> Atendimentos realizados </span> </a>
									</div>
									<!-- /shortcuts -->
								</div>
								<!-- /widget-content -->
							</div>

						</div>

					</div>


</div>
</div>
</div>



@stop
