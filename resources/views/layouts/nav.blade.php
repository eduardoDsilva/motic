<div class="container">
    <div class="navbar-fixed">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="col s12">
            @yield('breadcrumb')
        </div>
    </div>

    <ul class="side-nav fixed" id="mobile-demo">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
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
                @include('admin.nav.nav')
            @elseif(Auth::user()->tipoUser == 'escola')
                @include('escola.nav.nav')
            @elseif(Auth::user()->tipoUser == 'professor')
                @include('professor.nav.nav')
            @elseif(Auth::user()->tipoUser == 'avaliador')
                @include('avaliador.nav.nav')
            @endif
        @endif
    </ul>
</div>
</div>