<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>مدیریت وب سایت</title>
{{--<title>{{ config('app.name', 'welcome') }}</title>--}}


<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>



<body
    style="background: url('{{ asset("assets/images/wallpaper/jungle.jpg") }}') center center no-repeat fixed;background-size: cover;
        font-family: 'IRANSans Medium',serif;">

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ route('login') }}">
                {{ config('app.name', 'manager') }}
            </a>
            <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))   {{--  has OR exist  اگر وجود داشت   |  Zاگر حالت مهمان بود لاگین و ریجستر نمایش وگرنه اسمشو لاگ اوت یا خروج  --}}
                        <li class="nav-item">
                            {{--<a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            <a class="nav-link text-white text-center" href="{{ route('login') }}">{{ __("ورود") }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                {{--<a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                <a class="nav-link text-white text-center" href="{{ route('register') }}">{{ __("ثبت نام") }}</a>
                            </li>
                        @endif
                    @else   {{--  اگر لاگین کرده بود اسمش و لاگ اوت نمایش بده  --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}  {{--  Auth به پایگاه داده یا دیتابیس یوزرز وصل میشیم به ستون ها دسترسی داریم  --}}
                        </a>

                        {{--  submit کلیک شد  +  event عملیات روی همین تگ  + preventDefault رفرش نشه  --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('خروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">    {{--  py-4   ----Bootstrap5--- >   pt-5  --}}
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
