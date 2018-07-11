<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Deletar</h4>
        <p>@yield('conteudo-deletar')</p>
        <div class="row">
            <label for="id_delete">ID:</label>
            <div class="input-field col s12">
                <input disabled class="validate" type="number" id="id_delete">
                <input disabled class="validate" hidden type="text" id="tipo">
            </div>
        </div>
        <div class="row">
            <label for="name_delete">Nome:</label>
            <div class="input-field col s12">
                <input disabled class="validate" type="text" id="name_delete">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn red delete">Sim</a>
    </div>
</div>