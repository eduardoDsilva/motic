@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/avaliador/home')}}}" class="breadcrumb">Avaliador</a>
    <a href="{{{route ('admin/avaliador/atribuir')}}}" class="breadcrumb">Atribuir Avaliador</a>
@endsection

@section('content')

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
            <h1 class="header center orange-text">Projetos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Atribuir um avaliador ao projeto </h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">
            <form method="post" enctype="multipart/form-data" action="">
                {{csrf_field()}}
                <div class="input-field col s12">
                    <select name="avaliador_id">
                        <option value="" disabled selected>Selecione o avaliador</option>
                        @forelse($avaliadores as $avaliador)
                            <option value="{{$avaliador->id}}">{{$avaliador->name}}</option>
                        @empty
                            <option value="">Sem avaliadores disponíveis no sistema.</option>
                        @endforelse
                    </select>
                    <label>Avaliadores</label>
                </div>

                <p class="center-align">
                    <button class="waves-effect waves-light btn" type="submit"><i
                                class="material-icons right">send</i>salvar
                    </button>
                </p>

            </form>
        </div>
    </div>

@endsection
