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
      <nav class="nav blue">
          <div class="container">
              <div class="navbar-fixed">
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <div class="col s12">
                      @yield('breadcrumb')
                  </div>
              </div>

                  <ul class="side-nav fixed" id="mobile-demo">
                      @if (Auth::guest())
                          <li><a href="{{{ route('login') }}}">Login</a></li>
                      @else
                          <li>
                              <div class="user-view">
                                  <div class="background blue">
                                  </div>
                                  <a href="#!user"><i class="large material-icons">account_circle</i></a>
                                  <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                                  <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                              </div>
                          </li>
                          @if(Auth::user()->tipoUser == 'admin')
                              <li class="white">
                                  <a class="collapsible-header" href="{{{route ('admin/home')}}}"><i class="small material-icons">home</i>Home</a>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Alunos <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/aluno/home')}}}"><i class="material-icons">list</i>Listar alunos</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/aluno/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar aluno</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">format_list_bulleted</i>Auditoria <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/auditoria/home')}}}"><i class="material-icons">list</i>Listar auditorias</a></li>
                                                  <li><a class="waves-effect waves-blue" href=""><i class="material-icons">chrome_reader_mode</i>Gerar relatório</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">contacts</i>Avaliadores <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/avaliador/home')}}}"><i class="material-icons">list</i>Listar avaliadores</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/avaliador/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar avaliador</a></li>
                                                  <li><a class="waves-effect waves-blue" href=""><i class="material-icons">cached</i>Vincular projeto</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">note</i>Disciplinas <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/disciplinas/home')}}}"><i class="material-icons">list</i>Listar disciplinas</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">school</i>Escolas <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/escola/home')}}}"><i class="material-icons">list</i>Listar escolas</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/escola/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar escola</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Professores <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/professor/home')}}}"><i class="material-icons">list</i>Listar professores</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/professor/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar professor</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">library_add</i>Projetos <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/projeto/home')}}}"><i class="material-icons">list</i>Listar projetos</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('admin/projeto/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar projetos</a></li>
                                                  <li><a class="waves-effect waves-blue" href=""><i class="material-icons">add</i>Projetos x Avaliadores</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <a class="collapsible-header" href="{{{ route('logout') }}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i class="small material-icons">exit_to_app</i>Logout
                                  </a>

                                  <form id="logout-form" action="{{{ route('logout') }}}" method="POST" style="display: none;">
                                      {{{ csrf_field() }}}
                                  </form>
                              </li>
                          @elseif(Auth::user()->tipoUser == 'escola')
                              <li class="white">
                                  <a class="collapsible-header" href="{{{route ('escola/home')}}}"><i class="small material-icons">home</i>Home</a>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Alunos <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/aluno/home')}}}"><i class="material-icons">list</i>Listar alunos</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/aluno/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar aluno</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Professores <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/professor/home')}}}"><i class="material-icons">list</i>Listar professores</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/professor/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar professor</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <ul class="collapsible collapsible-accordion">
                                      <li>
                                          <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">library_add</i>Projetos <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                                          <div class="collapsible-body">
                                              <ul>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/projeto/home')}}}"><i class="material-icons">list</i>Listar projetos</a></li>
                                                  <li><a class="waves-effect waves-blue" href="{{{route ('escola/projeto/cadastro/registro')}}}"><i class="material-icons">add</i>Cadastrar projetos</a></li>
                                                  <li><div class="divider"></div></li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="white">
                                  <a class="collapsible-header" href="{{{ route('logout') }}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i class="small material-icons">exit_to_app</i>Logout
                                  </a>

                                  <form id="logout-form" action="{{{ route('logout') }}}" method="POST" style="display: none;">
                                      {{{ csrf_field() }}}
                                  </form>
                              </li>
                          @elseif(Auth::user()->tipoUser == 'professor')
                              @yield('menu')
                          @elseif(Auth::user()->tipoUser == 'avaliador')
                              @yield('menu')
                          @endif
                      @endif
                  </ul>
              </div>
          </div>
      </nav>

  </header>
