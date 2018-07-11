@if(Session::get('mensagem'))
    <div class="center-align">
        <div class="chip green">
            {{Session::get('mensagem')}}
            <i class="close material-icons">close</i>
        </div>
    </div>
    {{Session::forget('mensagem')}}
@endif

<div class="container">

    <div class="col s12 m12 l12">
        <div class="card-panel hoverable">
            <div class="row">
                <div class="card-content">
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Dados pessoais</h4></li>
                        <li class="collection-item">Nome: {{$professor->name}}</li>
                        <li class="collection-item">Nascimento: {{$professor->nascimento}}</li>
                        <li class="collection-item">Sexo: {{$professor->sexo}}</li>
                        <li class="collection-item">E-mail: {{$professor->user->email}}</li>
                        <li class="collection-item">Telefone: {{$professor->telefone}}</li>
                        <li class="collection-item">Escola: {{$professor->escola->name}}</li>
                        <li class="collection-item">CPF: {{$professor->cpf}}</li>
                        <li class="collection-item">Matrícula: {{$professor->matricula}}</li>
                        <li class="collection-item">Usuário: {{$professor->user->username}}</li>
                    </ul>
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Endereço</h4></li>
                        <li class="collection-item">
                            ID: @if(isset($professor->user->endereco->id)){{$professor->user->endereco->id}}@endif</li>
                        <li class="collection-item">
                            Rua: @if(isset($professor->user->endereco->rua)){{$professor->user->endereco->rua}}@endif</li>
                        <li class="collection-item">
                            Número: @if(isset($professor->user->endereco->numero)){{$professor->user->endereco->numero}}@endif</li>
                        <li class="collection-item">
                            Bairro: @if(isset($professor->user->endereco->bairro)){{$professor->user->endereco->bairro}}@endif</li>
                        <li class="collection-item">
                            Complemento: @if(isset($professor->user->endereco->complemento)){{$professor->user->endereco->complemento}}@endif</li>
                        <li class="collection-item">
                            CEP: @if(isset($professor->user->endereco->cep)){{$professor->user->endereco->cep}}@endif</li>
                        <li class="collection-item">
                            Cidade: @if(isset($professor->user->endereco->cidade)){{$professor->user->endereco->cidade}}@endif</li>
                        <li class="collection-item">
                            Estado: @if(isset($professor->user->endereco->estado)){{$professor->user->endereco->estado}}@endif</li>
                        <li class="collection-item">
                            País: @if(isset($professor->user->endereco->pais)){{$professor->user->endereco->pais}}@endif</li>
                    </ul>
                    <ul class="collection with-header col s12 m12 l12">
                        <li class="collection-header"><h4 class="center-align">Projeto</h4></li>
                        @if(isset($professor->projeto->titulo))
                            <li class="collection-item">Título: {{$professor->projeto->titulo}}</li>
                            <li class="collection-item">Área: {{$professor->projeto->area}}</li>
                            <li class="collection-item">Resumo: {{$professor->projeto->resumo}}</li>
                            <li class="collection-item">
                                Disciplinas: @foreach($professor->projeto->disciplina as $disciplina) {{$disciplina->name.", "}}@endforeach</li>

                            <li class="collection-header"><h4 class="center-align">Alunos</h4></li>
                            @foreach($professor->projeto->aluno as $a)
                                <li class="collection-item">{{$a->name}}</li>
                            @endforeach
                            <li class="collection-header"><h4 class="center-align">Professores</h4></li>
                            @foreach($professor->projeto->professor as $p)
                                <li class="collection-item">{{$p->name}} - {{$p->tipo}}</li>
                            @endforeach
                            <li class="collection-header"><h4 class="center-align">Escola</h4></li>
                            <li class="collection-item">{{$professor->projeto->escola->name}}</li>
                        @else
                            <li class="collection-item"><span class="center-align">Professor sem projeto</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
