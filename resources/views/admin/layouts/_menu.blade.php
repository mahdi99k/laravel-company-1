<!--  menu  -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <!-- Navbar Brand -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav m-1 d-flex flex-lg-row-reverse w-100">  <!-- تا حالت تبلت انجام بشو ادامه حالت عادی -->

            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('admin') }}">صفحه اصلی</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('seo.index') }}">تنظیمات سئو</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('parallax.index') }}">پارالکس</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('link.index') }}">لینک</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('news.index') }}">اخبار</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('comment.index') }}">کامنت</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('contact.index') }}">تماس با ما</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white text-center ml-2" href="{{ route('slider.index') }}">اسلایدر</a>
            </li>


            <li class="nav-item mb-3 mt-2 mb-lg-0 mt-lg-0">
                <a class="nav-link text-white bg-info text-center" href="{{ route('index') }}" target="_blank">نمایش سایت</a>
            </li>


            <li class="nav-item mr-lg-3">
                <a class="nav-link text-white bg-danger text-center" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
    <!-- end Navbar Brand -->
</nav>
<!--  end menu  -->
