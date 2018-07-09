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

        .motic{
            float: right;
            padding-bottom: 20px;
        }
        .pmsl{
            float: left;
        }
        .page-break {
            page-break-after: always;
        }

        .header{
            width: 100%;
            height: 320px;
            padding-bottom: 20px;
        }
    </style>


</head>

<body>

@foreach($escolas as $escola)

    <div class="header">
    <!--<img src="{{public_path('images/LOGO_PMSL.png')}}" class="pmsl" width="1000px" height="300px">
        <img src="{{public_path('images/motic.png')}}" class="motic" width="1200px" height="300px"> -->
    </div>

    <h2>Escola {{$escola->name}}</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Categorias</th>
                <th>Usuário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$escola->id}}</td>
                <td>{{$escola->name}}</td>
                <td>{{$escola->telefone}}</td>
                <td>@foreach($escola->categoria as $c){{$c->categoria.', '}}@endforeach</td>
                <td>{{$escola->user->username}}</td>
            </tr>
        </tbody>
    </table>

    <h2>Endereço</h2>

    <table>
        <thead>
        <tr>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$escola->user->endereco->rua}}</td>
            <td>{{$escola->user->endereco->numero}}</td>
            <td>{{$escola->user->endereco->bairro}}</td>
            <td>{{$escola->user->endereco->cep}}</td>
            <td>{{$escola->user->endereco->cidade}}</td>
            <td>{{$escola->user->endereco->estado}}</td>
            <td>{{$escola->user->endereco->pais}}</td>
        </tr>
        </tbody>
    </table>
    <div class="page-break"></div>

@endforeach
</body>
</html>