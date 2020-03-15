<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->routeIs('admin.news.create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.news.create') }}">Добавить новость</a>
        </li>
        <li class="nav-item {{request()->routeIs('admin.news.index') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.news.index') }}">Все новости</a>
        </li>
        <li class="nav-item {{request()->routeIs('admin.users.index') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">Пользователи</a>
        </li>
        <li class="nav-item {{request()->routeIs('admin.resources.index') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.resources.index') }}">Новостные ресурсы</a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @method('post')
                @csrf
                <input class="nav-link logout-btn" type="submit" value="Выйти">
            </form>
        </li>
    </ul>
</div>
