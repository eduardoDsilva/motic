<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Registros</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        h2{
            font-family: Arial;
        }
    </style>

</head>

<body>

<h1>Registros</h1>

<table>
     <tr>
         <th>ID</th>
         <th>Tipo</th>
         <th>Descricao</th>
         <th>Usuário Responsável</th>
         <th>ID do responsável</th>
     </tr>
    @forelse ($registros as $auditoria)
        <tr>
            <td>{{$auditoria->id}}</td>
            <td>{{$auditoria->tipo}}</td>
            <td>{{$auditoria->descricao}}</td>
            <td>{{$auditoria->nome_usuario}}</td>
            <td>{{$auditoria->user_id}}</td>
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
</table>
</div>

</body>
</html>