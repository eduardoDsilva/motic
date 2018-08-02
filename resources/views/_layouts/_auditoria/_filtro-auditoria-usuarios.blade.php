<div class="row">
    <div class="input-field col s12 m12 l4">
        <select name="tipo" required>
            <option value="" disabled selected>Filtrar por...</option>
            <option value="user">Usuário</option>
        </select>
        <label>Filtros</label>
    </div>

    <div class="input-field col s10 m11 l7">
        <input id="search" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Insira um complemento para a pesquisa" type="search" name="search" required>
        <label for="search">Pesquise no sistema...</label>
    </div>
    {{csrf_field()}}
    <div class="input-field col s1 m1 l1">
        <button type="submit" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Clique aqui para pesquisar"><i class="material-icons">search</i></button>
    </div>
</div>