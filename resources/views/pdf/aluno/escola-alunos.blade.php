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

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h2{
            font-family: Arial;
        }

        .page-break {
            page-break-after: always;
        }
    </style>

</head>

<body>

<h1>Alunos</h1>

@foreach ($escolas as $escola)
    <h2>{{$escola->name}}</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Ano/Etapa</th>
                <th>Turma</th>
                <th>Projeto</th>
            </tr>
        </thead>
        @foreach ($escola->aluno as $aluno)
            <tbody>
                <tr>
                    <td>{{$aluno->name}}</td>
                    <td>{{$aluno->nascimento}}</td>
                    <td>{{$aluno->etapa}}</td>
                    <td>{{$aluno->turma}}</td>
                    <td>{{($aluno->projeto_id == null ? ($aluno->suplente_id == null ? "Sem projeto" : $aluno->suplente->titulo) : $aluno->projeto->titulo)}}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <div class="page-break"></div>
@endforeach
</body>
</html>