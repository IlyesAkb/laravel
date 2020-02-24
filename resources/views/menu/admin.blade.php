<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.index') }}">Главная</a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.addNews') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.addNews') }}">Добавить новость</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Выйти</a>
        </li>
    </ul>
</div>
