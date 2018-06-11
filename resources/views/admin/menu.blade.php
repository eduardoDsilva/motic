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