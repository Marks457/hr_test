<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href='/css/app.css' rel="stylesheet">
    <link href='/css/style.css' rel="stylesheet">
    @yield('stylesheets')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="side-menu col-2">
                <div class="row flex-column justify-content-center">
                    <div class="menu-header">
                        <p>Меню</p>
                    </div>
                    <nav class="navbar navbar-default">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ route('index') }}">Погода</a>
                            </li>
                            <li>
                                <a href="{{ route('orders_list') }}">Заказы</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @yield('javascripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
