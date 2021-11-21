<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--  link css  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>


<body  style="background: url('{{ asset("assets/images/wallpaper/computer-5.jpg") }}') center center no-repeat fixed;
    background-size: cover;font-family: 'IRANSans Medium',serif">
<!--  main  -->
<section class="container-fluid p-0">
    <!--  menu  -->
    @includeIf('admin.layouts._menu')
    <!--  end menu  -->
    @yield('content')
</section>
<!--  end main  -->

<!--  link js  -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')
</body>
</html>
