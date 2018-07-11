<table class="centered responsive-table highlight bordered">

    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Usuário</th>
        @if(Auth::user()->tipoUser == 'admin')
            <th>Escola</th>
        @endif
        <th>Projeto</th>
        <th>Tipo</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($professores as $professor)
        <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->name}}</td>
            <td>{{$professor->user->username}}</td>
            @if(Auth::user()->tipoUser == 'admin')
                <td>{{$professor->escola->name}}</td>
            @endif
            <td>{{($professor->projeto_id == null ? ($professor->suplente_id == null ? "Professor sem projeto" : $professor->suplente->titulo) : $professor->projeto->titulo)}}</td>
            <td>{{($professor->projeto_id == null ? ($professor->suplente_id == null ? "Professor sem projeto" : $professor->tipo) : $professor->tipo)}}</td>
            <td>
                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                   data-tooltip="Editar"
                   href=@if(Auth::user()->tipoUser == 'escola') "{{ route('escola.professor.edit', $professor->id) }}">
                    @elseif(Auth::user()->tipoUser == 'admin')
                        "{{ route('admin.professor.edit', $professor->id) }}">@endif<i
                            class="small material-icons">edit</i></a>
                <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50"
                   data-tooltip="Deletar" href="#modal1" data-id="{{$professor->id}}"
                   data-name="{{$professor->name}}" data-tipo="professor"> <i
                            class="small material-icons">delete</i></a>
                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"
                   href=@if(Auth::user()->tipoUser == 'escola') "{{ route('escola.professor.show', $professor->id) }}">
                    @elseif(Auth::user()->tipoUser == 'admin')
                        "{{ route('admin.professor.show', $professor->id) }}">@endif <i
                            class="small material-icons">library_books</i></a>
            </td>
        </tr>

    @empty
        <tr>
            <td>Nenhum registro encontrado</td>
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
{{$professores->links()}}