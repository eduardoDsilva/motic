<table class="centered responsive-table highlight bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Evento</th>
        <th>Data/hora</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($accesses as $access)
        <tr>
            <td>{{$access->id}}</td>
            <td>{{\App\User::find($access->user_id)->username}}</td>
            <td>Logou-se</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($access->created_at)) }}</td>
        </tr>
    @empty
        <tr>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
            <td>Nenhum registro encontrado</td>
        </tr>
    @endforelse
    </tbody>
</table>
{{$accesses->links()}}