    <div class="navbar-fixed">
        <nav>
            <div class="blue">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <div class="col s12">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <ul class="side-nav fixed" id="mobile-demo">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li>
                <div class="user-view blue">
                    <h1 class="white-text flow-text">MOTIC</h1>
                    <span class="white-text name">{{ Auth::user()->name }}</span>
                    <span class="white-text email">{{ Auth::user()->email }}</span>
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

