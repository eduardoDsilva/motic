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
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">MOTIC</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{ route('register') }}">{{ __('Cadastrar') }}</a></li>
          <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Cadastrar</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </header>
