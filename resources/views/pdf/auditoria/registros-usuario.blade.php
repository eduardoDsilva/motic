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

@if($registro == null)

    <h1>Usuário sem registros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Descricao</th>
            <th>Objeto</th>
            <th>Data</th>
        </tr>
        <tr>
            <td width="5%"></td>
            <td width="10%"></td>
            <td width="45%"></td>
            <td width="10%"></td>
            <td width="25%"></td>
        </tr>
    </table>
@else
    <h1>Registros do usuário {{$registro->nome_usuario}}</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Descricao</th>
            <th>Objeto</th>
            <th>Data</th>
        </tr>
        <tr>
            <td width="5%">{{$registro->id}}</td>
            <td width="10%">{{$registro->tipo}}</td>
            <td width="45%">{{$registro->descricao}}</td>
            <td width="10%">{{$registro->objeto}}</td>
            <td width="25%">{{ date('d-m-Y H:i:s', strtotime($registro->created_at)) }}</td>
        </tr>
    </table>
@endif
</body>
</html>