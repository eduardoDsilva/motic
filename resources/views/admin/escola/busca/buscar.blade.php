
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
                <th>Ações</th>
            </tr>
            </thead>
            @forelse ($escolas as $escola)
                <tbody>
                <tr>
                    <td>{{$escola->name}}</td>
                    <td>{{$escola->tipoEscola}}</td>
                    <td>{{$escola->telefone}}</td>
                    <td>{{$escola->users->endereco->rua}}</td>
                    <td>
                        <a class="btn deep-orange" href="">Editar</a>
                        <a class="btn red" href="">Deletar</a>
                    </td>
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

        <a class="btn blue" href="">Adicionar Escola</a>

        <br><br>

        <br><br>
        
    </div>
</div>

@endsection
