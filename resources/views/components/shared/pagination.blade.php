@php
    $limit = request('limit', 4);
    $search = request('search', '');
@endphp

@if ($paginator->hasPages())
    <div class="paginacion__links">
        {{-- Botón "anterior" --}}
        @if ($paginator->onFirstPage())
            <a role="button" aria-label="previous page deactivated" class="desactivado button--page">
            <i class="fi fi-rr-caret-left"></i>
            </a>
        @else
            <a role="button" aria-label="previous page" href="{{ $paginator->previousPageUrl() }}&limit={{ $limit }}&search={{ $search }}" class="button--page">
            <i class="fi fi-rr-caret-left"></i>
            </a>
        @endif

        {{-- Números de página --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <a class="num--pages disabled">{{ $element }}</a>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="num--pages page--active">{{ $page }}</a>
                    @else
                        <a class="num--pages" href="{{ $url }}&limit={{ $limit }}&search={{ $search }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón "siguiente" --}}
        @if ($paginator->hasMorePages())
            <a role="button" aria-label="next page" href="{{ $paginator->nextPageUrl() }}&limit={{ $limit }}&search={{ $search }}" class="button--page button--page--right">
                <i class="fi fi-rr-caret-right"></i>
            </a>
        @else
            <a role="button" aria-label="next page deactivated" class="desactivado button--page button--page--right">
                <i class="fi fi-rr-caret-right"></i>
            </a>
        @endif
    </div>
@endif
