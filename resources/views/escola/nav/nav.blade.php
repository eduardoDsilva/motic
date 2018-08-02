<li class="white">
    <a class="collapsible-header" href="{{route ('escola')}}"><i class="small material-icons">home</i>Home</a>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Alunos <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.aluno')}}"><i class="material-icons">list</i>Listar
                            alunos</a></li>
                    @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.aluno.create')}}"><i
                                    class="material-icons">add</i>Cadastrar aluno</a></li>
                    <li>
                     @endcan
                        <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Professores
                <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.professor')}}"><i
                                    class="material-icons">list</i>Listar professores</a></li>
                    @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
                        <li><a class="waves-effect waves-blue" href="{{route ('escola.professor.create')}}"><i
                                        class="material-icons">add</i>Cadastrar professor</a></li>
                        <li>
                    @endcan
                        <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">library_add</i>Projetos
                <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.projeto')}}"><i
                                    class="material-icons">list</i>Listar projetos</a></li>
                    @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.projeto.create')}}"><i
                                    class="material-icons">add</i>Cadastrar projetos</a></li>
                    <li>
                    @endcan
                        <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">library_add</i>Suplentes<i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.suplente')}}"><i
                                    class="material-icons">list</i>Listar suplente</a></li>
                    @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.suplente.create')}}"><i
                                    class="material-icons">add</i>Cadastrar suplentes</a></li>
                    <li>
                    @endcan
                        <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">settings</i>Configurações<i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.config.alterar-senha')}}"><i
                                    class="material-icons">lock_outline</i>Mudar senha</a></li>
                    <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">folder</i>Documentos<i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('escola.documentos')}}"><i
                                    class="material-icons">description</i>Termos</a></li>
                    <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="white">
    <a class="collapsible-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i
                class="small material-icons">exit_to_app</i>Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>