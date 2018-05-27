<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Prefeitura Municipal de São Leopoldo</h5>
        <p class="grey-text text-lighten-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
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
      <div class="col l3 s12">
        <h5 class="white-text">Conheça</h5>
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

    <script type="text/javascript">

        $('#escola').on('change', function(e){
            console.log(e);
            var escola_id = e.target.value;

            $.get('/json-categorias?escola_id=' + escola_id,function(data) {
                console.log(data);
                $('#categorias').append('<option value="0" disable="true" selected="true">=== Select categoria ===</option>');
                $('select').material_select();
                $.each(data, function(index, categoriasObj){
                    console.log(categoriasObj);
                    $('#categorias').append('<option value="'+ categoriasObj.id +'">'+ categoriasObj.categoria +'</option>');
                    $('select').material_select();
                })
            });

            $.get('/json-alunos?escola_id=' + escola_id,function(data) {
                console.log(data);
                $('#alunos').append('<option value="0" disable="true" selected="true">=== Select alunos ===</option>');
                $('select').material_select();
                $.each(data, function(index, alunosObj){
                    $('#alunos').append('<option value="'+ alunosObj.id +'">'+ alunosObj.name +'</option>');
                    $('select').material_select();
                })
            });

            $.get('/json-professores?escola_id=' + escola_id,function(data) {
                console.log(data);
                $('#professores').append('<option value="0" disable="true" selected="true">=== Select orientador ===</option>');
                $('select').material_select();
                $.each(data, function(index, professoresObj){
                    $('#professores').append('<option value="'+ professoresObj.id +'">'+ professoresObj.name +'</option>');
                    $('select').material_select();
                })
            });
        });

        $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });

        $(document).ready(function() {
            $('select').material_select();
        });

        $(document).ready(function() {
            $('.modal').modal();
        });

        $(".button-collapse").sideNav();

        $(".dropdown-button").dropdown();

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        $('.datepicker').pickadate({
            monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            today: 'Hoje',
            clear: 'Limpar',
            close: 'Pronto',
            labelMonthNext: 'Próximo mês',
            labelMonthPrev: 'Mês anterior',
            labelMonthSelect: 'Selecione um mês',
            labelYearSelect: 'Selecione um ano',
            selectMonths: true,
            selectYears: 100,
            max: new Date(2018,7,14),
            format: 'dd-mm-yyyy'
        });

        $(document).ready(function(){
            $('.modal-trigger').leanModal();
        });
      </script>
    </body>
  </html>
