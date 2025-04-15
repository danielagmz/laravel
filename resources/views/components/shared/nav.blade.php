

<div class="nav-grid">
    <aside class="menu">
        <a id="home" class="menu__item" href="{{ url('/home') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-home"></i>
            </div>
        </a>
        {{-- @if (Auth::user()->is_admin) --}}
        <a id="admin" class="menu__item" href="{{ route('admin') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-users-gear"></i>
            </div>
        </a>
        {{-- @endif --}}
        <a id="all" class="menu__item" href="{{ route('all') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-book-alt"></i>
            </div>
        </a>
        <a id="create" class="menu__item" href="{{ route('create') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-add-document"></i>
            </div>
        </a>
        <a id="delete" class="menu__item" href="{{ route('delete') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-delete-document"></i>
            </div>
        </a>
        <a id="update" class="menu__item" href="{{ route('update') }}">
            <div class="menu__item-link">
                <i class="fi fi-rr-edit"></i>
            </div>
        </a>
        <a id="dashboard" class="menu__item" href="{{ route('dashboard') }}">
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
