@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.gerencia.pagina-inicial')}}" class="breadcrumb">Gerenciar pagina inicial</a>
    <a href="{{route ('admin.config.gerencia.contato')}}" class="breadcrumb">Gerenciar contato</a>
@endsection

@section('content')

@section('titulo-header', 'Gerenciar')

@section('conteudo-header', "Aqui você pode gerenciar os conteúdos da página 'contato'")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            <div class="row">
                <div id="toolbar-container"></div>

                <div id="editor">
                    @if(isset($conteudo))
                        {!! $conteudo->contato !!}
                    @endif
                </div>
                <br>
                <button id='submit' class="center waves-effect waves-light btn" type="submit"><i
                            class="material-icons right">send</i>salvar
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    DecoupledEditor
        .create(document.querySelector('#editor'), {
            language: 'pt-br'
        })
        .then(editor => {
            const toolbarContainer = document.querySelector('#toolbar-container');

            toolbarContainer.appendChild(editor.ui.view.toolbar.element);

            document.querySelector('#submit').addEventListener('click', () => {
                const editorData = editor.getData();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/gerencia/contato/store',
                    type: 'POST',
                    data: {_token: CSRF_TOKEN, contato: editorData},
                    dataType: 'JSON',
                    success: function () {
                        Materialize.toast("Conteúdo atualizado com sucesso", 4000);
                    }
                });

            });

        })
        .catch(error => {
            console.error(error);
        });

</script>

@endsection