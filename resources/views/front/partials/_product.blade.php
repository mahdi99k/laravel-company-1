<!-- ======================================== Start make product ======================================== -->
<section class="product">
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @forelse ($slider as $item)
                <div class="swiper-slide">
                    <section><a href="{{ $item->link }}" target="_blank">{{ $item->caption }}</a></section>
                    <img src="{{ asset("assets/images/slider/$item->image") }}" alt="{{ $item->alt }}">
                </div>


            @empty

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <section><h1>this is caption 1</h1></section>
                        <img src="{{ asset('assets/images/wallpaper/sea.jpg') }}">
                    </div>
                </div>
            @endforelse

        </div>
        <div class="swiper-button-next"></div> {{-- علامت بعدی و قبلی --}}
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> {{-- صفحه بندی --}}
    </div>
    <!-- Swiper JS -->

</section>
<!-- ======================================== End make product ======================================== -->

@section('js')
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                {{-- علامت بعدی و قبلی --}}
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                {{-- صفحه بندی --}}
                el: ".swiper-pagination",
                clickable: true,
            },

            autoplay: {
                delay: 3000,
            },

            effect: 'fade',     // نوع رفتنش حالت فید یا ناپدید شدن
            fadeEffect: {
                crossFade: true
            },

            /*effect: 'cards',      // تصویر یکم میزنه بیرون شبیه کارت میره کارت زیر رو کنی
            cardsEffect: {
                // ...
            },*/


            /*effect: 'cube',         // نوع رفتنش حالت سری و جالب
            cubeEffect: {
                slideShadows: false,
            },*/


            /*effect: 'flip',          // چرخش 360 درجه سریع میزنه
            flipEffect: {
                slideShadows: false,
            },*/


            /*effect: 'coverflow',   // نوع رفتنش حالت سری و جالب
            coverflowEffect: {
                rotate: 90,
                slideShadows: false,
            },*/
        });
    </script>
@endsection


<!-- ========================================  make product css ======================================== -->


@section('css')
    <style>

        .swiper-slide {
            position: relative;
        }

        .swiper-slide > img {
            width: 100%;
            height: 500px;
        }

        .swiper-slide > section {
            width: 400px;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: inset 5px 5px 10px #439fea;
            background-color: #29a9de;
            /*background-color: #0078f0;*/
            opacity: 0.9;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: whitesmoke;
            text-align: center;
            border-radius: 2px;
        }


        .swiper-slide > section > a{
            color: #E1F5FE;
            text-decoration: none;
            font-size: 20px;
            text-align: center;
        }

    </style>
@endsection


{{--

<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/1.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>
<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/2.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>
<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/3.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>
<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/4.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>
<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/5.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>
<section class="itemProduct">
    <div class="shadow">
        <a href="#">
            <img src="{{ asset('assets/images/6.jpg') }}" alt="pc">
        </a>
        <h3>دسته بندی موبایل</h3>
        <div class="buttonDivProduct">
            <a href="#">اطلاعات بیشتر</a>
        </div>
    </div>
</section>

--}}
