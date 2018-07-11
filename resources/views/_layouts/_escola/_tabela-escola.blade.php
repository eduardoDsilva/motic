<table class="centered responsive-table highlight bordered">

    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Usuário</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($escolas as $escola)
        <tr>
            <td>{{$escola->id}}</td>
            <td class="limit">{{$escola->name}}</td>
            <td>{{$escola->telefone}}</td>
            <td class="limit">{{$escola->user->username}}</td>
            <td>
                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                   data-tooltip="Editar" href="{{ route("admin.escola.edit", $escola->id) }}"><i
                            class="small material-icons">edit</i></a>
                <a id="deletar" data-target="modal1" class="modal-trigger tooltipped" data-position="top"
                   data-delay="50" data-tooltip="Deletar" href="#modal1" data-id="{{$escola->id}}"
                   data-name="{{$escola->name}}" data-tipo="escola"> <i
                            class="small material-icons">delete</i></a>
                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"
                   href="{{ route("admin.escola.show", $escola->id) }}"> <i
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
        </tr>
    @endforelse
    </tbody>
</table>
{{$escolas->links()}}