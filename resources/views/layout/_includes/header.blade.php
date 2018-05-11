<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
  <header>
      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
          <li>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
      </ul>
      <nav class="light-blue lighten-1">
          <div class="container">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo">MOTIC</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          @if (Auth::guest())
                  <ul class="right hide-on-med-and-down">
                      <li><a href="{{ route('register') }}">Registrar</a></li>
                      <li><a href="{{ route('login') }}">Login</a></li>
                  </ul>
              @else
              <ul class="right hide-on-med-and-down">
                  @yield('menu')
                  <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
              @endif
          </div>
          </div>
      </nav>

      @if (Auth::guest())
          <ul class="sidenav" id="mobile-demo">
              <li><a href="{{ route('register') }}">Registrar</a></li>
              <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
      @else
          <ul class="sidenav" id="mobile-demo">
              <li>
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>
      @endif


  </header>
