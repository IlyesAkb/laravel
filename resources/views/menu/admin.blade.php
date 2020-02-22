<div class="navbar-collapse collapse" id="navbarsExample01" style="">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item @if($page == 'main') active @endif">
            <a class="nav-link" href="{{ route('admin.index') }}">Главная</a>
        </li>
        <li class="nav-item @if($page == 'addNews') active @endif">
            <a class="nav-link" href="{{ route('admin.addNews') }}">Добавить новость</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Выйти</a>
        </li>
    </ul>
</div>
