<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="nav-item {{ request()->routeIs('news.all') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('news.all') }}">Новости</a>
        </li>
        <li class="nav-item {{ request()->routeIs('categories.all') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('categories.all') }}">Категории</a>
        </li>
        <li class="nav-item {{ request()->routeIs('info') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('info') }}">О проекте</a>
        </li>
        <li class="nav-item {{ request()->routeIs('user.login') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.login') }}">Войти</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">Админка</a>
        </li>
    </ul>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
