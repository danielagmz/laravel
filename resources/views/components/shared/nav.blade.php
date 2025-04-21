

<div class="nav-grid">
    <aside class="menu">
        <a id="home" class="menu__item {{ request()->is('home') ? 'link--active' : '' }}" href="{{ route('home') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-home"></i>
            </div>
        </a>
        
        <a id="admin" class="menu__item {{ request()->routeIs('admin') ? 'link--active' : '' }}" href="{{ route('admin') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-users-gear"></i>
            </div>
        </a>
        
        <a id="all" class="menu__item {{ request()->routeIs('all') ? 'link--active' : '' }}" href="{{ route('all') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-book-alt"></i>
            </div>
        </a>
        
        <a id="create" class="menu__item {{ request()->routeIs('create') ? 'link--active' : '' }}" href="{{ route('create') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-add-document"></i>
            </div>
        </a>
        
        <a id="delete" class="menu__item {{ request()->routeIs('delete') ? 'link--active' : '' }}" href="{{ route('delete') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-delete-document"></i>
            </div>
        </a>
        
        <a id="update" class="menu__item {{ request()->routeIs('update') ? 'link--active' : '' }}" href="{{ route('update') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-edit"></i>
            </div>
        </a>
        
        <a id="dashboard" class="menu__item {{ request()->routeIs('dashboard') ? 'link--active' : '' }}" href="{{ route('dashboard') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-settings"></i>
            </div>
        </a>
        
        <form action="index.php?action=logout" class="cursor--pointer" method="post">
            <button type="submit" class="button--logout menu__item">
                <div class="menu__item ">
                    <i class="fi fi-rr-sign-out-alt"></i>
                </div>
            </button>
        </form>
    </aside>
</div>
