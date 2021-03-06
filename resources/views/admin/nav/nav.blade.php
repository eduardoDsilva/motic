<li class="white">
    <a class="collapsible-header" href="{{route ('admin')}}"><i class="small material-icons">home</i>Home</a>
</li>
<li class="white">
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">person</i>Alunos <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.aluno')}}"><i class="material-icons">list</i>Listar
                            alunos</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.aluno.create')}}"><i
                                    class="material-icons">add</i>Cadastrar aluno</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.aluno.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a></li>
                    <li>
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
            <a class="collapsible-header waves-effect waves-blue"><i
                        class="small material-icons">format_list_bulleted</i>Auditoria <i class="material-icons right"
                                                                                          style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.auditoria')}}"><i
                                    class="material-icons">list</i>Listar auditorias</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.auditoria.usuarios')}}"><i
                                    class="material-icons">list</i>Login de Usuários</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.auditoria.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a></li>
                    <li>
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
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">contacts</i>Avaliadores
                <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.avaliador')}}"><i
                                    class="material-icons">list</i>Listar avaliadores</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.avaliador.create')}}"><i
                                    class="material-icons">add</i>Cadastrar avaliador</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.avaliador.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a></li>
                    <li>
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
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">note</i>Disciplinas <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.disciplina')}}"><i
                                    class="material-icons">list</i>Listar disciplinas</a></li>
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
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">school</i>Escolas <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.escola')}}"><i class="material-icons">list</i>Listar
                            escolas</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.escola.create')}}"><i
                                    class="material-icons">add</i>Cadastrar escola</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.escola.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a></li>
                    <li>
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
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.professor')}}"><i
                                    class="material-icons">list</i>Listar professores</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.professor.create')}}"><i
                                    class="material-icons">add</i>Cadastrar professor</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.professor.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a>
                    </li>
                    <li>
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
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.projeto')}}"><i class="material-icons">list</i>Listar
                            projetos</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.projeto.create')}}"><i
                                    class="material-icons">add</i>Cadastrar projetos</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.projeto.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a></li>
                    <li>
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
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.suplente')}}"><i
                                    class="material-icons">list</i>Listar suplentes</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.suplente.create')}}"><i
                                    class="material-icons">add</i>Cadastrar suplentes</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.suplente.relatorios')}}"><i
                                    class="material-icons">chrome_reader_mode</i>Relatórios</a>
                    </li>
                    <li>
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
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.config.inscricoes')}}"><i
                                    class="material-icons">access_time</i>Período de inscrições</a></li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.config.avaliacoes')}}"><i
                                    class="material-icons">access_time</i>Período de avaliações</a></li>
                    <li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.config.pdf')}}"><i
                                    class="material-icons">insert_drive_file</i>PDF's</a></li>
                    <li>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.config.gerencia.pagina-inicial')}}"><i
                                    class="material-icons">perm_media</i>Gerenciar home-page</a></li>
                    <li>
                    <li><a class="waves-effect waves-blue" href="{{url ('admin/config/alterar-senha')}}"><i
                                    class="material-icons">lock_outline</i>Mudar senha</a></li>
                    <div class="divider"></div>
                    </li>
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
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">note</i>Categorias <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.categoria')}}"><i
                                    class="material-icons">list</i>Listar categorias</a></li>
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
            <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">note</i>Etapas <i
                        class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="waves-effect waves-blue" href="{{route ('admin.etapa')}}"><i
                                    class="material-icons">list</i>Listar etapas</a></li>
                    <div class="divider"></div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
@if(Illuminate\Support\Facades\Auth::user()->id == 1)
    <li class="white">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">people</i>Usuários<i
                            class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="waves-effect waves-blue" href="{{route('admin.user')}}"><i
                                        class="material-icons">people_outline</i>Gerenciar usuários</a></li>
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
                <a class="collapsible-header waves-effect waves-blue"><i class="small material-icons">info</i>Info. do
                    Sistema<i
                            class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="waves-effect waves-blue" href="{{url('admin/logs')}}"><i
                                        class="material-icons">info_outline
                                </i>Logs</a></li>
                        <li><a class="waves-effect waves-blue" href="{{url('admin/decomposer')}}"><i
                                        class="material-icons">info_outline
                                </i>Decomposer</a></li>
                        <div class="divider"></div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
@endif
<li class="white">
    <a class="collapsible-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i
                class="small material-icons">exit_to_app</i>Sair
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>