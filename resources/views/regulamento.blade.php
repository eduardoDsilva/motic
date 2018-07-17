@extends('_layouts._app')

@section('titulo','Motic - Regulamento')

@section('breadcrumb')
    <a href="{{{route ('home')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Regulamento</h1>
        </div>
    </div>

    <div class="container">
        <div class="card-panel">
            <blockquote>
                <p>Logo abaixo você encontra o regulamento da MOTIC São Leopolo e as Regras de exposição e segurança MOTIC
                    São Leopoldo. Os ducumentos encontram-se disponíveis para download no formado de PDF.</p>
                <p>Qualquer dúvida, entre em contato com a organização da feira.</p>
            </blockquote>

            <div class="collection">
                <a target="_blank" href="{{url('storage/regulamentos/regulamento-motic.pdf')}}" class="collection-item">  <i class="material-icons">picture_as_pdf</i> Regulamento MOTIC São Leopoldo</a>
                <a target="_blank" href="{{url('storage/regras/regras-motic.pdf')}}" class="collection-item">  <i class="material-icons">picture_as_pdf</i> Regras de exposição e segurança MOTIC São Leopoldo</a>
            </div>
        </div>
    </div>

@endsection