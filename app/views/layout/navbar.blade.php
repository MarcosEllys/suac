@section("navbar")

<nav class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        @if(isset($active1))
        <li class=" {{{ $active1 }}} ">
          <a href="{{ URL("/") }}"><i class="icon-dashboard"></i><span>Home</span> </a>
        </li>
        @else
        <li class=""><a href="{{ URL("/") }}"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        @endif

        @if(Auth::User()->is_admin)

        @if(isset($active2))
        <li class="dropdown {{{ $active2 }}}"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-bookmark"></i><span>Administrativo</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="{{ action('UsersController@index') }}">Usuários</a></li>
            <li><a href="{{ action('UnidadesController@index') }}">Unidades</a></li>
          </ul>
        </li>
        @else
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-bookmark"></i><span>Administrativo</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="{{ action('UsersController@index') }}">Usuários</a></li>
            <li><a href="{{ action('UnidadesController@index') }}">Unidades</a></li>
          </ul>
        </li>
        @endif

        @endif

        @if(isset($active3))
        <li class="dropdown {{{ $active3 }}}"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-group"></i><span>Assistência CRAS</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="{{ action('PeoplesreferencesController@index') }}">Pessoas referênciadas</a></li>
            <li>
              <a href=" {{ action('FamilysController@index') }} ">Famílias</a>
            </li>
            <li><a href=" {{ action('AgendaratendimentosController@index') }} ">Agendar atendimento</a></li>
          </ul>
        </li>
        @else
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class=" icon-group"></i><span>Assistência CRAS</span> <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li>
              <a href="{{ action('PeoplesreferencesController@index') }}">Pessoas referênciadas</a>
            </li>
            <li>
              <a href="{{ action('FamilysController@index') }}">Famílias</a>
            </li>
            <li><a href=" {{ action('AgendaratendimentosController@index') }} ">Agendar atendimento</a></li>
          </ul>
        </li>
        @endif

        @if(isset($active4))
        <li class="{{{ $active4 }}}">
          <a href=" {{ URL("/reports") }} ">
            <i class="icon-list-alt"></i><span>Relatórios</span>            
          </a>
        </li>
        @else
        <li>
          <a href=" {{ URL("/reports") }} ">
            <i class="icon-list-alt"></i><span>Relatórios</span>            
          </a>
        </li>
        @endif

        @if(isset($active5))
        <li class="active">
          <a href="{{ URL("/ajuda") }}">
            <i class="icon-facetime-video"></i><span>Ajuda</span>           
          </a>
        </li>
        @else
        <li>
          <a href="{{ URL("/ajuda") }}">
            <i class="icon-facetime-video"></i><span>Ajuda</span>           
          </a>
        </li>
        @endif

      </ul>
    </div>
  </div>
</nav>
@show