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

        h2 {
            font-family: Arial;
        }

        .motic {
            float: right;
            padding-bottom: 20px;
        }

        .pmsl {
            float: left;
        }

        .page-break {
            page-break-after: always;
        }

        .header {
            width: 100%;
            height: 320px;
            padding-bottom: 20px;
        }
    </style>

</head>

<body>

<div class="header">
<!--<img src="{{public_path('images/LOGO_PMSL.png')}}" class="pmsl" width="1000px" height="300px">
        <img src="{{public_path('images/motic.png')}}" class="motic" width="1200px" height="300px"> -->
</div>

<h1>Registros</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Objeto</th>
        <th>Usuário Responsável</th>
        <th>Data</th>
    </tr>
    @forelse ($registros as $auditoria)
        <tr>
            <td>{{$auditoria->id}}</td>
            <td>{{$auditoria->tipo}}</td>
            <td>{{$auditoria->objeto}}</td>
            <td>{{$auditoria->nome_usuario}}</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($auditoria->created_at)) }}</td>
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

</body>
</html>