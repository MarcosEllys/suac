@section("top")

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </a>
      {{ HTML::link('/', 'Sistema Único de Assistência ao CRAS - SUAC', array('class' => 'brand')) }}
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
              class="icon-user-md"></i> {{{ Auth::User()->username }}}  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Perfil</a>
                </li>
                <li>
                  <a href=' {{ URL('logout') }} '> Sair </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @show
