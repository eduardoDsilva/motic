@if(Session::get('mensagem'))
    <div class="center-align">
        <div class="chip green">
            {{Session::get('mensagem')}}
            <i class="close material-icons">close</i>
        </div>
    </div>
    {{Session::forget('mensagem')}}
@endif

<div class="section container">
    <div class="card-panel">
        <h1 class="header center orange-text">{{$aluno->name}}</h1>
        <div class="row center">
            <h5 class="header col s12 light">Essas são todos os dados do aluno {{$aluno->name}}!</h5>
        </div>
    </div>
</div>

<div class="row">

    <div class="col s12 m12">
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title center-align">Aluno</span>
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Nascimento</th>
                        <th>Sexo</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ano/Etapa</th>
                        <th>Turma</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->name}}</td>
                        <td>{{$aluno->nascimento}}</td>
                        <td>{{$aluno->sexo}}</td>
                        <td>{{($aluno->email == null ? "Aluno sem e-mail" : $aluno->email)}}</td>
                        <td>{{($aluno->telefone == null ? "Aluno sem telefone" : $aluno->telefone)}}</td>
                        <td>{{$aluno->etapa}}</td>
                        <td>{{$aluno->turma}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col s12 m12">
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title center-align">Endereço</span>
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Complemento</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>País</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{($aluno->rua == null ? "Aluno sem rua" : $aluno->rua)}}</td>
                        <td>{{($aluno->numero == null ? "Aluno sem número" : $aluno->numero)}}</td>
                        <td>{{($aluno->bairro == null ? "Aluno sem bairro" : $aluno->bairro)}}</td>
                        <td>{{($aluno->complemento == null ? "Aluno sem complemento" : $aluno->complemento)}}</td>
                        <td>{{($aluno->cep == null ? "Aluno sem CEP" : $aluno->cep)}}</td>
                        <td>{{($aluno->cidade == null ? "Aluno sem cidade" : $aluno->cidade)}}</td>
                        <td>{{($aluno->estado == null ? "Aluno sem estado" : $aluno->estado)}}</td>
                        <td>{{($aluno->pais == null ? "Aluno sem país" : $aluno->pais)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title center-align">Escola</span>
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Escola</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$aluno->escola->id}}</td>
                        <td>{{$aluno->escola->name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="col s12 m8">
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title center-align">Projeto</span>
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Projeto</th>
                        <th>Área</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{(isset($aluno->projeto->id)  == null ? "Aluno sem projeto" : $aluno->projeto->id)}}</td>
                        <td>{{(isset($aluno->projeto->titulo)  == null ? "Aluno sem projeto" : $aluno->projeto->titulo)}}</td>
                        <td>{{(isset($aluno->projeto->area)  == null ? "Aluno sem projeto" : $aluno->projeto->area)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>