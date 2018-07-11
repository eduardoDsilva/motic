<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            <form method="POST" enctype="multipart/form-data" action=@if(Auth::user()->tipoUser == 'escola') "{{ route('escola.projeto.filtrar') }}">
                @elseif(Auth::user()->tipoUser == 'admin') "{{ route('admin.projeto.filtrar') }}">@endif>
                <div class="row">
                    <div class="input-field col s12 m12 l4">
                        <select name="tipo" required>
                            <option value="" disabled selected>Filtrar por...</option>
                            <option value="id">ID</option>
                            <option value="nome">Nome</option>
                            <option value="escola">Escola</option>
                            <option value="categoria">Categoria</option>
                        </select>
                        <label>Filtros</label>
                    </div>

                    <div class="input-field col s10 m11 l7">
                        <input id="search" type="search" name="search" required>
                        <label for="search">Pesquise no sistema...</label>
                    </div>
                    {{csrf_field()}}
                    <div class="input-field col s1 m1 l1">
                        <button type="submit" class="btn-floating"><i class="material-icons">search</i></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <table class="centered responsive-table highlight bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Área</th>
                    <th>Categoria</th>
                    @if(Auth::user()->tipoUser == 'admin')
                    <th>Escola</th>
                    @endif
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($projetos as $projeto)
                    <tr>
                        <td>{{$projeto->id}}</td>
                        <td>{{$projeto->titulo}}</td>
                        <td>{{$projeto->area}}</td>
                        <td>{{$projeto->categoria->categoria}}</td>
                        @if(Auth::user()->tipoUser == 'admin')
                        <td>{{$projeto->escola->name}}</td>
                        @endif
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Editar" href="{{route ('admin.projeto.edit',$projeto->id)}}"><i
                                        class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top"
                               data-delay="50" data-tooltip="Deletar" href="#modal1" data-id="{{$projeto->id}}"
                               data-name="{{$projeto->titulo}}" data-projeto="normal" data-tipo="projeto"> <i
                                        class="small material-icons">delete</i></a>
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"
                               href="{{ route("admin.projeto.show", $projeto->id) }}"> <i
                                        class="small material-icons">library_books</i></a>
                            <a class="tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Rebaixar a projeto suplente"
                               href="{{ route("admin.projeto.rebaixa", $projeto->id) }}"> <i
                                        class="small material-icons">arrow_downward</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum registro encontrado</td>
                        <td>Nenhum registro encontrado</td>
                        <td>Nenhum registro encontrado</td>
                        <td>Nenhum registro encontrado</td>
                        <td>Nenhum registro encontrado</td>
                        <td>Nenhum registro encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{$projetos->links()}}
        </div>

        <div class="fixed-action-btn">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
                   data-position="top" data-delay="50" data-tooltip="Adicionar projeto"
                   href=@if(Auth::user()->tipoUser == 'escola') "{{route ('escola.projeto.create')}}">
                    @elseif(Auth::user()->tipoUser == 'admin') "{{route ('admin.projeto.create')}}">@endif<i class="material-icons">add</i></a>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Deletar</h4>
        <p>Você tem certeza que deseja deletar o projeto abaixo?</p>
        <div class="row">
            <label for="id_delete">ID</label>
            <div class="input-field col s12">
                <input disabled class="validate" type="number" id="id_delete">
                <input disabled class="validate" hidden type="text" id="tipo">
            </div>
        </div>
        <div class="row">
            <label for="name_delete">Nome do projeto</label>
            <div class="input-field col s12">
                <input disabled class="validate" type="text" id="name_delete">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn red delete">Sim</a>
    </div>
</div>