<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
          media="screen,projection"/>
    <link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/motic.css')?>" type="text/css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" href="http://example.org/img/favicon.ico" type="image/x-icon"/>

    <title>@yield('titulo')</title>

</head>

<body>

<header>
    <nav class="nav blue">
        @include('layouts.nav')
    </nav>

</header>

<main>
    @yield('content')
</main>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Prefeitura Municipal de São Leopoldo</h5>
                <p class="grey-text text-lighten-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua."
                </p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Sobre</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Desenvolvido por <a class="orange-text text-lighten-3" href="">Eduardo da Silva</a>
        </div>
    </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script src="<?php echo asset('js/projeto_ajax.js')?>" type="text/javascript"></script>

<script type="text/javascript">
    $(document).on('click', '#auditoria', function () {
        $('#id_auditoria').html('');
        $('#id_auditoria').append($(this).data('id'));
        $('#tipo_auditoria').html('');
        $('#tipo_auditoria').append($(this).data('tipo'));
        $('#descricao_auditoria').html('');
        $('#descricao_auditoria').append($(this).data('descricao'));
        $('#usuario_auditoria').html('');
        $('#usuario_auditoria').append($(this).data('user_id'));
        $('#responsavel_auditoria').html('');
        $('#responsavel_auditoria').append($(this).data('nome_usuario'));
    });
</script>

<script type="text/javascript">
    $(document).on('click', '.modal-trigger', function () {
        $('#id_delete').val($(this).data('id'));
        $('#name_delete').val($(this).data('name'));
        $('#projeto').val($(this).data('projeto'));
        $('#tipo').val($(this).data('tipo'));
    });

    $('.modal-footer').on('click', '.delete', function () {
        id = $('#id_delete').val();
        projeto = $('#projeto').val();
        tipo = $('#tipo').val();
        console.log(id);
        if (tipo == 'escola') {
            $.ajax({
                type: 'GET',
                url: 'escola/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'projeto') {
            $.ajax({
                type: 'GET',
                url: 'projeto/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'aluno') {
            $.ajax({
                type: 'GET',
                url: 'aluno/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'professor') {
            $.ajax({
                type: 'GET',
                url: 'professor/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'suplente') {
            $.ajax({
                type: 'GET',
                url: 'destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'avaliador') {
            $.ajax({
                type: 'GET',
                url: 'avaliador/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'disciplina') {
            $.ajax({
                type: 'GET',
                url: 'disciplina/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        }
    });
</script>

<script type="text/javascript">

    $(document).ready(function () {
        $('#alunos').change(function (event) {
            var alunos = $('#alunos').val();
            if (alunos.length == 3) {
                $("#envia").prop("disabled", false);
            } else if (alunos.length > 3) {
                $("#envia").prop("disabled", true);
                alert("Selecione no máximo 3 alunos");
            } else {
                $("#envia").prop("disabled", true);
            }

        });
    });

    $(document).ready(function () {
        $('ul.tabs').tabs({
            swipeable: true
        });
    });

    $(document).ready(function () {
        $('.sidenav').sidenav();
    });

    $(document).ready(function () {
        $('.tooltipped').tooltip({delay: 50});
    });
    $(document).ready(function () {
        $('select').material_select();
    });
    $(document).ready(function () {
        $('.modal').modal();
    });

    @yield('modal')

    $(".dropdown-button").dropdown();

    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();

    $('.datepicker').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Pronto',
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Mês anterior',
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        selectMonths: true,
        selectYears: 100,
        max: new Date(2018, 7, 14),
        format: 'dd-mm-yyyy'
    });
    $(document).ready(function () {
        $('.modal-trigger').leanModal();
    });
</script>

</body>

</html>