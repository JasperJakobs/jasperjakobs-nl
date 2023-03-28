<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating apps, web-apps and more!">

    <meta name="description" content="Jasper Jakobs | Developer">
    <meta name="keywords" content="Jasper Jakobs, Jasper, Jakobs, Portfolio, Developer, web, websites, php, html, css, javascript, werk, student, projecten, cyber security, cybersecurity, informatiebeveiliging">
    <meta name="subject" content="Portfolio">
    <meta name="copyright" content="Jasper Jakobs">
    <meta name="language" content="NL">
    <meta name="robots" content="index,follow">
    <meta name="url" content="https://jasperjakobs.nl">
    <meta name="identifier-URL" content="https://jasperjakobs.nl">

    <meta property="og:title" content="Jasper Jakobs | jasperjakobs.nl">
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

    <title>Jasper Jakobs | jasperjakobs.nl</title>

    <link rel="icon" href="{{ asset('images/logo.svg') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?v={{ date('dmyhms') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js" integrity="sha512-v8B8T8l8JiiJRGomPd2k+bPS98RWBLGChFMJbK1hmHiDHYq0EjdQl20LyWeIs+MGRLTWBycJGEGAjKkEtd7w5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Analytics -->
    <script type="text/javascript">
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3426868,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;r.type="text/javascript";
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?v={{ date('dmyhms') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.css" integrity="sha512-PYSQaQBKTu066xiq+XES4zNfKps3Za9xFsPH97MuEaP53a4kNFed/Q7lW539jALMETHApKj7/CZ1ac9d0NBzZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    @include('cookie-consent::index')
    @yield('content')
</body>
</html>
