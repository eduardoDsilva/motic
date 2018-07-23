<table class="centered responsive-table highlight bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Evento</th>
        <th>Descricao</th>
        <th>Tipo</th>
        <th>Responsável</th>
        <th>Data/hora</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($auditorias as $auditoria)
        <tr>
            <td>{{$auditoria->id}}</td>
            <td>{{$auditoria->event}}</td>
            <td width="70%">@if($auditoria->new_values == '[]') {!! str_limit(str_replace(',',', ', $auditoria->old_values), 100) !!}
                @else{{str_limit(str_replace(',',', ', $auditoria->new_values), 300)}}@endif</td>
            <td width="20%">{{$auditoria->auditable_type}}</td>
            <td width="20%">{{\App\User::find($auditoria->user_id)->username}}</td>
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