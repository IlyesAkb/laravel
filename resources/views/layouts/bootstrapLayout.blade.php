<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>News</title>
</head>

<body>
<div id="app">
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ route('home') }}">News</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @yield('menu')
            </nav>
        </header>
        @yield('content')
    </div>
</div>


<footer class="footer">
    <div class="container footer__container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>


<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
