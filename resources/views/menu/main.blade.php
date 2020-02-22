<div class="navbar-collapse collapse" id="navbarsExample01" style="">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item @if($page == 'main') active @endif">
            <a class="nav-link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="nav-item @if($page == 'news') active @endif">
            <a class="nav-link" href="{{ route('news.all') }}">Новости</a>
        </li>
        <li class="nav-item @if($page == 'categories') active @endif">
            <a class="nav-link" href="{{ route('categories.all') }}">Категории</a>
        </li>
        <li class="nav-item @if($page == 'info') active @endif">
            <a class="nav-link" href="{{ route('info') }}">О проекте</a>
        </li>
        <li class="nav-item @if($page == 'login') active @endif">
            <a class="nav-link" href="{{ route('user.login') }}">Войти</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">Админка</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </form>
</div>
