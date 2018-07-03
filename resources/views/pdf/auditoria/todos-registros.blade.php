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
     </tr>
    @forelse ($registros as $auditoria)
        <tr>
            <td width="5%">{{$auditoria->id}}</td>
            <td width="10%">{{$auditoria->tipo}}</td>
            <td width="65%">{{$auditoria->descricao}}</td>
            <td width="20%">{{$auditoria->nome_usuario}}</td>
        </tr>
    @empty
        <tr>
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