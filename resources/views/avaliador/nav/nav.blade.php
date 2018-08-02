<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador/home')}}"><i class="small material-icons">home</i>Home</a>
</li>
<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador/projeto/home')}}"><i class="small material-icons">home</i>Projetos</a>
</li>
<li class="white">
    <a class="collapsible-header" href="{{route ('avaliador/conta/home')}}"><i class="small material-icons">home</i>Conta</a>
</li>
<li class="white">
    <a class="collapsible-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i
                class="small material-icons">exit_to_app</i>Sair
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>