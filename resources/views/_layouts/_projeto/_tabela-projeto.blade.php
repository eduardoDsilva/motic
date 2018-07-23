<table class="centered responsive-table highlight bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Categoria</th>
        @if(Auth::user()->tipoUser == 'admin')
        <th>Escola</th>
        <th>Avaliadores</th>
        @endif
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($projetos as $projeto)
        <tr>
            <td>{{$projeto->id}}</td>
            <td>{{$projeto->titulo}}</td>
            <td>{{$projeto->categoria->categoria}}</td>
            @if(Auth::user()->tipoUser == 'admin')
            <td>{{$projeto->escola->name}}</td>
            <td>{{$projeto->avaliadores}}</td>
            @endif
            <td>
                @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                   data-tooltip="Editar" href=@if(Auth::user()->tipoUser == 'escola') "{{ route('escola.projeto.edit', $projeto->id) }}">
                    @elseif(Auth::user()->tipoUser == 'admin') "{{ route('admin.projeto.edit', $projeto->id) }}">@endif<i
                            class="small material-icons">edit</i></a>
                <a data-target="modal1" class="modal-trigger tooltipped" data-position="top"
                   data-delay="50" data-tooltip="Deletar" href="#modal1" data-id="{{$projeto->id}}"
                   data-name="{{$projeto->titulo}}" data-projeto="normal" data-tipo="projeto"> <i
                            class="small material-icons">delete</i></a>
                @endcan
                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"
                   href=@if(Auth::user()->tipoUser == 'escola') "{{ route('escola.projeto.show', $projeto->id) }}">
                    @elseif(Auth::user()->tipoUser == 'admin') "{{ route('admin.projeto.show', $projeto->id) }}">@endif <i
                            class="small material-icons">library_books</i></a>
                @if(Auth::user()->tipoUser == 'admin')
                    <a class="tooltipped" data-position="top" data-delay="50"
                       data-tooltip="Rebaixar a projeto suplente"
                       href="{{ route("admin.projeto.rebaixa", $projeto->id) }}"> <i
                                class="small material-icons">arrow_downward</i></a>
                        @if($projeto->avaliadores < 3)
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Vincular avaliadores"
                               href="{{route ('admin.projeto.vincular-avaliadores', $projeto->id)}}"> <i class="small material-icons">stars</i></a>
                        @endif
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
            @if(Auth::user()->tipoUser == 'admin')
            <td>Nenhum registro encontrado</td>
            @endif
            <td>Nenhum registro encontrado</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{$projetos->links()}}
