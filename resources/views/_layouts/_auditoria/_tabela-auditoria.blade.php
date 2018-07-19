<table class="centered responsive-table highlight bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Descricao</th>
        <th>Objeto</th>
        <th>Usuário</th>
        <th>Data</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($auditorias as $auditoria)
        <tr>
            <td>{{$auditoria->id}}</td>
            <td>{{$auditoria->tipo}}</td>
            <td width="70%">{{str_limit($auditoria->descricao), 80, ' (...)'}}</td>
            <td>{{$auditoria->objeto}}</td>
            <td width="20%">{{$auditoria->nome_usuario}}</td>
            <td width="15%">{{ date('d-m-Y H:i:s', strtotime($auditoria->created_at)) }}</td>
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
{{$auditorias->links()}}