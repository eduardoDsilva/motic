<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Todos alunos</title>

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
    </style>

</head>

<body>

<img src="{{public_path('images/LOGO_PMSL.png')}}" class="pmsl" width="1000px" height="300px">
<img src="{{public_path('images/motic.png')}}" class="motic" width="1200px" height="300px">

<h1>Alunos</h1>

<table>

    <thead>
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Ano/Etapa</th>
            <th>Escola</th>
            <th>Turma</th>
            <th>Projeto</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($alunos as $aluno)
        <tr>
            <td>{{$aluno->name}}</td>
            <td>{{$aluno->nascimento}}</td>
            <td>{{$aluno->etapa}}</td>
            <td>{{$aluno->escola->name}}</td>
            <td>{{$aluno->turma}}</td>
            <td>{{($aluno->projeto_id == null ? ($aluno->suplente_id == null ? "Sem projeto" : $aluno->suplente->titulo) : $aluno->projeto->titulo)}}</td>
        </tr>
    @empty
        <tr>
            <td>Nenhum aluno encontrado</td>
            <td>Nenhum aluno encontrado</td>
            <td>Nenhum aluno encontrado</td>
            <td>Nenhum aluno encontrado</td>
            <td>Nenhum aluno encontrado</td>
            <td>Nenhum aluno encontrado</td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>