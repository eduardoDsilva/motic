@includeIf('_layouts._mensagem-erro')
@if(Session::get('mensagem'))
    @include('_layouts._mensagem-sucesso')
@endif

<div class="container">

    <div class="col s12 m12 l12">
        <div class="card-panel hoverable">
            <div class="row">
                <div class="card-content">
                    <ul class="collection with-header col s12 m12 l12">
                        <li class="collection-header"><h4 class="center-align">Projeto</h4></li>
                        <li class="collection-item">Título: {{$projeto->titulo}}</li>
                        <li class="collection-item">Área: {{$projeto->area}}</li>
                        @if(Auth::user()->tipoUser == 'admin')
                            <li class="collection-item">Estande: {{$projeto->estande}}</li>
                        @endif
                        <li class="collection-item">Resumo: {{$projeto->resumo}}</li>
                        <li class="collection-item">Ano: {{$projeto->ano}}</li>
                        <li class="collection-item">Tipo: {{$projeto->tipo}}</li>
                        <li class="collection-item">Escola: {{$projeto->escola->name}}</li>
                        <li class="collection-item">Categoria: {{$projeto->categoria->categoria}}</li>
                    </ul>
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Alunos</h4></li>
                        @foreach($projeto->aluno as $aluno)
                            <li class="collection-item">Aluno: {{$aluno->name}}</li>
                        @endforeach
                    </ul>
                    <ul class="collection with-header col s12 m12 l6">
                        <li class="collection-header"><h4 class="center-align">Professores</h4></li>
                        @foreach($projeto->professor as $professor)
                            <li class="collection-item">Professor: {{$professor->name}} - {{$professor->tipo}}</li>
                        @endforeach
                    </ul>
                    @if(Auth::user()->tipoUser == 'admin')
                        <ul class="collection with-header col s12 m12 l12">
                            <li class="collection-header"><h4 class="center-align">Avaliadores</h4></li>
                            @forelse($projeto->avaliador as $avaliador)
                                <li class="collection-item">Avaliador: {{$avaliador->name}}</li>
                            @empty
                                <li class="collection-item">Projeto sem avaliadores</li>
                            @endforelse
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
</div>