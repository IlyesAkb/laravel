<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->routeIs('admin.news.create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.news.create') }}">Добавить новость</a>
        </li>
        <li class="nav-item {{request()->routeIs('admin.news.index') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.news.index') }}">Все новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Выйти</a>
        </li>
    </ul>
</div>
