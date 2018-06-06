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
    <link rel="stylesheet" href="<?php echo asset('css/motic.css')?>" type="text/css">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{{ csrf_token() }}}">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
  <header>
      <nav class="top-nav blue">
          <div class="container">
              <div class="nav-wrapper">
                      <div class="col s12">
                          <a href="#!" class="breadcrumb">Administrador</a>
                          <a href="#!" class="breadcrumb">Home</a>
                      </div>
              </div>
                  <ul class="side-nav fixed" id="mobile-demo">
                      @if (Auth::guest())
                          <li><a href="{{{ route('login') }}}">Login</a></li>
                      @else
                          <li><div class="user-view">
                                  <div class="background blue">
                                  </div>
                                  <a href="#!user"><i class="large material-icons">account_circle</i></a>
                                  <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                                  <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                              </div></li>
                          <li><a href="{{{route ('admin/home')}}}">MOTIC</a></li>
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
