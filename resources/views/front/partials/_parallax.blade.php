<!-- ======================================== Start make parallax ======================================== -->
@if (!empty($parallax))

    <section class="parallax" style="background: url('{{ asset("assets/images/parallax/$parallax->image") }}') center center no-repeat fixed;background-size: cover">
        <section class="slogan">
            <h1 style="font-size: {{ $parallax->titleSize . "px" }};color: {{ $parallax->titleColor }}">{{ $parallax->title }}</h1>
            <p style="font-size: {{ $parallax->bodySize}}px;color: {{ $parallax->bodyColor }}">{{ $parallax->body }}</p>
        </section>
    </section>


@else


    <section class="parallax">
        <section class="slogan">
            <h1>کاربر گرامی به وب سایت ما خوش آمدید</h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
                را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به
                پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </section>
    </section>

@endif
<!-- ======================================== End make parallax ======================================== -->
