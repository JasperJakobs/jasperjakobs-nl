<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating apps, web-apps and more!">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@jasperjakobs" />
    <meta name="twitter:title" content="Jasper Jakobs | Software developer" />
    <meta name="twitter:description" content="Creating apps, web-apps and more!" />
    <meta name="twitter:image" content="asset('images/eagle.png')" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jasper Jakobs</title>

    <link rel="icon" href="{{ asset('images/logo.svg') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?v={{ date('dmyhms') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?v={{ date('dmyhms') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="main">
        <main class="content">
            <div class="container-fluid p-0">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
