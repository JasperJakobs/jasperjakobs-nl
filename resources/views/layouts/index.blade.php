<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating apps, web-apps and more!">

    <meta name="description" content="Jasper Jakobs | Developer">
    <meta name="keywords" content="Jasper Jakobs, Jasper, Jakobs, Portfolio, Developer, web, websites, php, html, css, javascript, werk, student, projecten">
    <meta name="subject" content="Portfolio">
    <meta name="copyright" content="Jasper Jakobs">
    <meta name="language" content="NL">
    <meta name="robots" content="index,follow">
    <meta name="url" content="https://jasperjakobs.nl">
    <meta name="identifier-URL" content="https://jasperjakobs.nl">

    <meta property="og:title" content="JLasper Jakobs | jasperjakobs.nl">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Jasper Jakobs | Developer">
    <meta property="og:image" content="{{ asset("images/web-banner.png") }}">
    <meta property="og:image:url" content="{{ asset("images/web-banner.png") }}">
    <meta property="og:image:secure_url" content="{{ asset("images/web-banner.png") }}">
    <meta property="og:url" content="https://jasperjakobs.nl">
    <meta property="og:site_name" content="jasperjakobs.nl">
    <meta property="og:email" content="contact@jasperjakobs.nl">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@jasperjakobs" />
    <meta name="twitter:creator" content="@jasperjakobs" />
    <meta name="twitter:title" content="jasperjakobs.nl" />
    <meta name="twitter:description" content="Does stuff with computers!" />
    <meta name="twitter:image" content="{{ asset("images/web-banner.png") }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jasper Jakobs</title>

    <link rel="icon" href="{{ asset('images/logo.svg') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?v={{ date('dmyhms') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js" integrity="sha512-CPA5LMoJI/a5HkSIAKcBtFXe4gqGjPUL2ExF/3PmhrrHI17wod9xOqqF+0WZQRKIIq0KwF8oG5BaiWobtrke3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?v={{ date('dmyhms') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">

</head>
<body>
    @include('cookie-consent::index')
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
