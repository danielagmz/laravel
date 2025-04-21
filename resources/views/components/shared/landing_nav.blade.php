<div class="nav-grid">
    <aside class="menu">
        <a class="menu__item" href="{{ route('landing')}}">
            <div class="menu__item-link">
                <i class="fi fi-rr-home"></i>
                <div class="menu__item-text">Inici</div>
            </div>
        </a>
        <a id="actionButton" class="menu__item" href="{{ Route::currentRouteName() === 'login' ? route('register') : route('login') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-user"></i>
                <div class="menu__item-text">
                    @if(Route::currentRouteName() === 'login')
                        Enregistrar-se
                    @elseif(Route::currentRouteName() === 'register')
                        Logar-se
                    @else
                        Logar-se / Registrar-se
                    @endif
                </div>
            </div>
        </a>
    </aside>
</div>