
@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Escolas</h1>
        <div class="row center">
            <h5 class="header col s12 light">Essas são as escolas cadastradas no sistema!</h5>
        </div>
        <br>
    </div>
</div>

<div class="container">
    <div class="col s12 m4 l8">

        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo Escola</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>
            </thead>
            @forelse ($escolas as $escola)
                <tbody>
                <tr>
                    <td>{{$escola->name}}</td>
                    <td>{{$escola->tipoEscola}}</td>
                    <td>{{$escola->telefone}}</td>
                    <td>{{$escola->users->endereco->rua}}</td>
                </tr>
                </tbody>
            @empty
                <tbody>
                <tr>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                </tr>
                </tbody>
            @endforelse
        </table>

        <br><br>

<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

</p>

        <br><br>
        
    </div>
</div>

@endsection
