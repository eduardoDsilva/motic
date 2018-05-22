
@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

   @if(Session::get('mensagem'))
          <div class="center-align">
               <div class="chip green">
                    {{Session::get('mensagem')}}
                   <i class="close material-icons">close</i>
               </div>
          </div>
       {{Session::forget('mensagem')}}
   @endif

   <a class="btn green" href="{{url()->previous()}}">Voltar</a>

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
                <th>id</th>
                <th>Nome</th>
                <th>Tipo Escola</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>E-mail</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
            </thead>
            @forelse ($escolas as $escola)
                <tbody>
                <tr>
                    <td>{{$escola->id}}</td>
                    <td>{{$escola->name}}</td>
                    <td>{{$escola->tipoEscola}}</td>
                    <td>{{$escola->telefone}}</td>
                    <td>{{$escola->user->endereco->rua}}</td>
                    <td>{{$escola->user->email}}</td>
                    <td>{{$escola->user->username}}</td>
                    <td>
                        <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/escola/update/".$escola->id."/editar") }}"><i class="small material-icons">edit</i></a>
                        <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar" href="#modal1"> <i class="small material-icons">delete</i></a>
                    </td>
                </tr>
                </tbody>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Deletar</h4>
                        <p>Você tem certeza que deseja deletar essa escola?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url("admin/escola/deletar/".$escola->user->id."/excluir") }}" class="btn red">Sim</a>
                    </div>
                </div>
            @empty
                <tbody>
                <tr>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                </tr>
                </tbody>
            @endforelse
        </table>

        <br><br>

        <a class="btn blue" href="{{route ('admin/escola/cadastro/registro')}}">Adicionar Escola</a>
        <br><br>

        <br><br>

    </div>
</div>

@endsection
