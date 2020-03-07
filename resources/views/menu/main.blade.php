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
        @if(Auth::check() && Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">Админка</a>
            </li>
        @endif
    </ul>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    @if(Auth::check())
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
    @else
        <ul class="navbar-nav">
            <li class="nav-item {{ request()->routeIs('login') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login') }}">Войти</a>
            </li>
            <li class="nav-item {{ request()->routeIs('register') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('register') }}">Реистрация</a>
            </li>
        </ul>
    @endif
</div>
