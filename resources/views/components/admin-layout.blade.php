<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>
<body>
<div class="wrapper min-vh-100">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="public/upload/files/images/logo.png" alt="" style="width: 75%">
        </div>
        <ul class="list-unstyled">
            <p>АДМИН-ПАНЕЛЬ</p>
            @auth("web")
                <li><a href="{{ route("logout") }}">Выйти</a></li>
                <li><a href="#">Главная</a></li>
                <li><a href="{{ route("chars") }}">Персонажи</a></li>
                <li><a href="#">Музыка</a></li>
            @endauth
        </ul>

    </nav>


{{ $slot }}
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
