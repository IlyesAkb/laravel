<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="app" class="app">
    <div class="wrapper">
        <header class="header">
            <div class="container header__container">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="/"><h3 class="header__heading">Новости</h3></a>
                    <nav>
                        <ul class="navs header__navs">
                            <li>
                                @if($page == 'main')
                                    <a href="/" class="btn btn-primary btn-sm header__nav-link">главная</a>
                                @else
                                    <a href="/" class="btn btn-secondary btn-sm header__nav-link">главная</a>
                                @endif
                            </li>
                            <li>
                                @if($page == 'news')
                                    <a href="/news" class="btn btn-primary btn-sm header__nav-link">новости</a>
                                @else
                                    <a href="/news" class="btn btn-secondary btn-sm header__nav-link">новости</a>
                                @endif
                            </li>
                            <li>
                                @if($page == 'info')
                                    <a href="/info" class="btn btn-primary btn-sm header__nav-link">о проекте</a>
                                @else
                                    <a href="/info" class="btn btn-secondary btn-sm header__nav-link">о проекте</a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </nav>
            </div>
        </header>
        @yield('content')
    </div>
    <footer class="footer">
        <div class="container footer__container"></div>
    </footer>
</div>

</body>
</html>
