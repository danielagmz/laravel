
<div class="cabeceras">
    <div class="busqueda-barra content__body--row">
        <input aria-label="search bar" type="text" list="busquedas" id="busqueda-barra__input"
            name="busqueda-barra__input" placeholder="Filtar por..." class="busqueda-barra__input" autofocus>
        <datalist id="busquedas">
            <!-- crear_datalist_user()?> -->
        </datalist>
    </div>
    <div class="busqueda-barra cabeceras--paginacion">
        <select aria-label="paginacion" name="page" class="busqueda__input--page" id="page">
            <option aria-label="4 articulos por pagina" value="4">4</option>
            <option aria-label="8 articulos por pagina" value="8">8</option>
            <option aria-label="12 articulos por pagina" value="12">12</option>
            <option aria-label="16 articulos por pagina" value="16">16</option>
        </select>
        <div class="paginacion">{!! $links !!}</div>
        <div class="cabeceras--ordenacion ordenacion">
            <fieldset class=" content_subtitle content__body--row">
                <legend hidden>Ordenar</legend>
                <input type="radio" class="ordenacion__input" id="asc" value="ASC" name="orden">
                <label tabindex="0" for="asc" aria-label="ascendente" class="ordenacion__label"><i
                        class="fi fi-rr-sort-alpha-up"></i></label>

                <input type="radio" checked class="ordenacion__input" value="DESC" id="desc" name="orden">
                <label tabindex="0" for="desc" aria-label="descendente" class="ordenacion__label"><i
                        class="fi fi-rr-sort-alpha-down-alt"></i></i></label>
            </fieldset>
        </div>
    </div>
</div>
