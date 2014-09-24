@section("navbar")
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="{{ URL("/") }}"><i class="icon-dashboard"></i><span>Home</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-bookmark"></i><span>Administrativo</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="{{ URL("/users") }}">Usuários</a></li>
            <li><a href="{{ action('UnidadesController@index') }}">Unidades</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-group"></i><span>Assistência CRAS</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="{{ action('PeoplesreferencesController@index') }}">Pessoas referênciadas</a></li>
            <li><a href="#">Famílias</a></li>
            <li><a href="#">Agendar atendimento</a></li>
          </ul>
        </li>

        <li>
          <a href=" {{ URL("/reports") }} ">
            <i class="icon-list-alt"></i><span>Relatórios</span>            
          </a>
        </li>

        <li>
          <a href="{{ URL("/ajuda") }}">
            <i class="icon-facetime-video"></i><span>Ajuda</span>           
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
@show