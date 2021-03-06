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

@foreach($alunos as $aluno)
    <div class="header">
       <!-- <img src="{{public_path('images/LOGO_PMSL.png')}}" class="pmsl" width="1000px" height="300px"> -->
           PREFEITURA MUNICIPAL DE SÃO LEOPOLDO
           Estado do Rio Grande do Sul
           SECRETARIA MUNICIPAL DE EDUCAÇÃO
           Praça Tiradentes, 119 – Centro São Leopoldo - RS – Cep: 93010-020
           Fone: (0xx51) 22000800 E-mail: smed@saoleopoldo.rs.gov.br
        <!--<img src="{{public_path('images/motic-logo.png')}}" class="motic" width="1200px" height="300px"> -->
    </div>
    <h1>{{$aluno->name}}</h1>

    <h2>Dados pessoais</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <tr>
            <td>{{$aluno->name}}</td>
            <td>{{$aluno->nascimento}}</td>
            <td>{{$aluno->sexo}}</td>
            <td>{{$aluno->cpf}}</td>
            <td>{{$aluno->email}}</td>
            <td>{{$aluno->telefone}}</td>
        </tr>
    </table>

    <h2>Dados escolares</h2>

    <table>
        <tr>
            <th>Escola</th>
            <th>Etapa/ano</th>
            <th>Turma</th>
        </tr>
        <tr>
            <td>{{$aluno->escola->name}}</td>
            <td>{{$aluno->etapa}}</td>
            <td>{{$aluno->turma}}</td>
        </tr>
    </table>

    <h2>Endereço</h2>

    <table>
        <tr>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
        </tr>
        <tr>
            <td>{{$aluno->rua}}</td>
            <td>{{$aluno->numero}}</td>
            <td>{{$aluno->bairro}}</td>
            <td>{{$aluno->cep}}</td>
            <td>{{$aluno->cidade}}</td>
            <td>{{$aluno->estado}}</td>
            <td>{{$aluno->pais}}</td>
        </tr>
    </table>
    <div class="page-break"></div>

@endforeach

</body>
</html>