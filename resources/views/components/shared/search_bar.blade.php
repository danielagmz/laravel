
@vite(['resources/js/pagination.js'])
@vite(['resources/js/filter.js'])
@php
    $limit = request('limit', 4);
@endphp
<div class="cabeceras">
    <div class="busqueda-barra content__body--row">
        <input aria-label="search bar" type="text" list="busquedas" id="busqueda-barra__input"
            name="busqueda-barra__input" placeholder="Filtar por..." class="busqueda-barra__input" autofocus>
            <button class="busqueda-barra__button">
                <i class="fi fi-rr-search"></i>
            </button>
        </div>
    <div class="busqueda-barra cabeceras--paginacion">
        <select aria-label="paginacion" name="page" class="busqueda__input--page" id="page">
            <option aria-label="4 articulos por pagina" {{ $limit == 4 ? 'selected' : '' }} value="4">4</option>
            <option aria-label="8 articulos por pagina" {{ $limit == 8 ? 'selected' : '' }} value="8">8</option>
            <option aria-label="12 articulos por pagina" {{ $limit == 12 ? 'selected' : '' }} value="12">12</option>
            <option aria-label="16 articulos por pagina" {{ $limit == 16 ? 'selected' : '' }} value="16">16</option>
        </select>
        <div class="paginacion">{!! $links !!}</div>
        <div class="cabeceras--ordenacion ordenacion">
            <fieldset class=" content_subtitle content__body--row">
                <legend hidden>Ordenar</legend>
                <input type="radio" checked class="ordenacion__input" id="asc" value="ASC" name="orden">
                <label tabindex="0" for="asc" aria-label="ascendente" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-up"></i></label>

                <input type="radio"  class="ordenacion__input" value="DESC" id="desc" name="orden">
                <label tabindex="0" for="desc" aria-label="descendente" class="ordenacion__label"><i class="fi fi-rr-sort-alpha-down-alt"></i></i></label>
            </fieldset>
        </div>
    </div>
</div>
