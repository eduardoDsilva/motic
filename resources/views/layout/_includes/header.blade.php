<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{{ csrf_token() }}}">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body style="background-color:#F0F0F0;">
  <header>
      <div class="navbar-fixed">
      <nav class="light-blue lighten-1">
          <div class="container">
              <div class="nav-wrapper">
                  @if (Auth::guest())
                  <a href="{{{ route('home-inicio') }}}" class="brand-logo">MOTIC</a>
                  @else
                  <a href="{{{ route(Auth::user()->tipoUser.'/home') }}}" class="brand-logo">MOTIC</a>
                  @endif
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                  @if (Auth::guest())
                      <ul class="right hide-on-med-and-down">
                          <li><a href="{{{ route('login') }}}">Login</a></li>
                      </ul>
                  @else
                      <ul class="right hide-on-med-and-down">
                          @if (Auth::user()->tipoUser == 'admin')
                              <li><a href="{{{route ('admin/aluno/home')}}}">Alunos</a></li>
                              <li><a href="{{{route ('admin/avaliador/home')}}}">Avaliadores</a></li>
                              <li><a href="{{{route ('admin/disciplinas/home')}}}">Disciplinas</a></li>
                              <li><a href="{{{route ('admin/escola/home')}}}">Escolas</a></li>
                              <li><a href="{{{route ('admin/professor/home')}}}">Professores</a></li>
                              <li><a href="{{{route ('admin/projeto/home')}}}">Projetos</a></li>
                              @yield('menu')
                              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{{ Auth::user()->name }}}<i class="material-icons right">arrow_drop_down</i></a></li>
                          @elseif (Auth::user()->tipoUser == 'escola')
                              @yield('menu')
                              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{{ Auth::user()->name }}}<i class="material-icons right">arrow_drop_down</i></a></li>
                          @endif
                      </ul>
                  @endif

                  <ul class="side-nav" id="mobile-demo">
                      @if (Auth::guest())
                          <li><a href="{{{ route('login') }}}">Login</a></li>
                      @else
                          <li><a href="{{{route ('admin/aluno/home')}}}">Alunos</a></li>
                          <li><a href="{{{route ('admin/avaliador/home')}}}">Avaliadores</a></li>
                          <li><a href="{{{route ('admin/disciplinas/home')}}}">Disciplinas</a></li>
                          <li><a href="{{{route ('admin/escola/home')}}}">Escolas</a></li>
                          <li><a href="{{{route ('admin/professor/home')}}}">Professores</a></li>
                          <li><a href="{{{route ('admin/projeto/home')}}}">Projetos</a></li>
                          <li>
                              <a href="{{{ route('logout') }}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> Logout
                              </a>

                              <form id="logout-form" action="{{{ route('logout') }}}" method="POST" style="display: none;">
                                  {{{ csrf_field() }}}
                              </form>
                          </li>

                      @endif
                  </ul>
              </div>
          </div>
      </nav>
      </div>

      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
          <li>
              <a href="{{{ route('logout') }}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{{ csrf_field() }}}
              </form>
          </li>
      </ul>

  </header>
