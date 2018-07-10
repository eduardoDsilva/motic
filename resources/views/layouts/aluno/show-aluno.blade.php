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
<div class="container">

    <div class="col s12 m12 l12">
        <div class="card-panel hoverable">
            <div class="row">
                <div class="card-content">
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Dados pessoais</h4></li>
                        <li class="collection-item">Nome: {{$aluno->name}}</li>
                        <li class="collection-item">Nascimento: {{$aluno->nascimento}}</li>
                        <li class="collection-item">Sexo: {{$aluno->sexo}}</li>
                        <li class="collection-item">E-mail: {{$aluno->email}}</li>
                        <li class="collection-item">Telefone: {{$aluno->telefone}}</li>
                        <li class="collection-item">Escola: {{$aluno->escola->name}}</li>
                        <li class="collection-item">Ano/Etapa: {{$aluno->etapa}}</li>
                        <li class="collection-item">Turma: {{$aluno->turma}}</li>
                    </ul>
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Endereço</h4></li>
                        <li class="collection-item">Rua: {{$aluno->rua}}</li>
                        <li class="collection-item">Número: {{$aluno->numero}}</li>
                        <li class="collection-item">Bairro: {{$aluno->bairro}}</li>
                        <li class="collection-item">Complemento: {{$aluno->complemento}}</li>
                        <li class="collection-item">CEP: {{$aluno->cep}}</li>
                        <li class="collection-item">Cidade: {{$aluno->cidade}}</li>
                        <li class="collection-item">Estado: {{$aluno->estado}}</li>
                        <li class="collection-item">País: {{$aluno->pais}}</li>
                    </ul>
                    <ul class="collection with-header col s12 m12 l12">
                        <li class="collection-header"><h4 class="center-align">Projeto</h4></li>
                        @if(isset($aluno->projeto->titulo))
                            <li class="collection-item">Título: {{$aluno->projeto->titulo}}</li>
                            <li class="collection-item">Área: {{$aluno->projeto->area}}</li>
                            <li class="collection-item">Resumo: {{$aluno->projeto->resumo}}</li>
                            <li class="collection-item">
                                Disciplinas: @foreach($aluno->projeto->disciplina as $disciplina) {{$disciplina->name.", "}}@endforeach</li>

                            <li class="collection-header"><h4 class="center-align">Alunos</h4></li>
                            @foreach($aluno->projeto->aluno as $a)
                                <li class="collection-item">{{$a->name}}</li>
                            @endforeach
                            <li class="collection-header"><h4 class="center-align">Professores</h4></li>
                            @foreach($aluno->projeto->professor as $professor)
                                <li class="collection-item">{{$professor->name}} - {{$professor->tipo}}</li>
                            @endforeach
                            <li class="collection-header"><h4 class="center-align">Escola</h4></li>
                            <li class="collection-item">{{$aluno->projeto->escola->name}}</li>
                        @else
                            <li class="collection-item"><span class="center-align">Aluno sem projeto</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>