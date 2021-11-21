<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  title & seo website  -->
    @yield('seo')
    <!--  end title $ seo website  -->

    <!--  icon website  -->
    <link rel="icon" href="{{ asset('assets/images/favicon/icon-website-16x16.ico') }}" type="image/png">
    <!--  end icon website  -->

    <!--  link css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.min.css') }}">
    @yield('css')
</head>
<body>


<!--  start project  -->
@yield('content')
<!--  end project  -->


<!--  link js  -->
<script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
@yield('js')
</body>
</html>
