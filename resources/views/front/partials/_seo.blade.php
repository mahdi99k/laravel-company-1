<!--  seo website  -->
@if(is_array($seo))         {{-- $seo = Seo::orderBy('id' , 'desc')->first();    این جا به صورت تکی میفرسته پس آرایه نیست --}}

@forelse($seo as $item)                       <!--  $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->get();  -->
    <!--  title website  -->
    <title>{{ $item->title }}</title>
    <!--  end title website  -->
    <meta name="keywords" content="{{ $item->keywords }}"/>
    <meta name="description" content="{{ $item->description }}"/>
    <meta name="author" content="{{ $item->author }}"/>
    <meta name="robots" content="index,follow"/> <!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->
    <!--  end seo website  -->
    <!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
    <meta property="og:title" content="{{ $item->title }}">
    <meta property="og:description" content="{{ $item->description }}">
    <meta property="og:keywords" content="{{ $item->keywords }}">
    <meta property="og:image" content=""> <!--  icon  -->
    <meta property="og:url" content="{{"https://www.google.com"}}">   <!-- url OR domain website -->
    <!--  <meta name="twitter:card" content="summary_large_image">  -->

    <!-- Some Non-essential but recommended -->
    <meta property="og:site_name" content="{{"https://www.google.com"}}"> <!-- Optional -->
    <meta name="twitter:image:alt" content="Alt text for image"> <!-- Optional -->
    <!--  end meta tag social  -->

@empty       <!--   وقتی که دیتا خالی باش میاد دومی میخونه یا اگه خطایی خورد  -->

<!--  seo website  -->
<!--  title website  -->
<title>{{ "وب سایت فروشگاهی" }}</title>
<!--  end title website  -->
<meta name="keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی"/>
<meta name="description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید"/>
<meta name="author" content="mahdi"/>
<meta name="robots" content="index,follow"/>
<!--  end seo website  -->
<!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
<meta property="og:title" content="وب سایت فروشگاهی">
<meta property="og:description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید">
<meta property="og:keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی">
<meta property="og:image" content=""> <!--  icon  -->
<meta property="og:url" content="{{"https://www.google.com"}}">

<!--  <meta name="twitter:card" content="summary_large_image">  -->

<!-- Some Non-essential but recommended -->
<meta property="og:site_name" content="{{"https://www.google.com"}}">
<meta name="twitter:image:alt" content="Alt text for image">
<!--  end meta tag social  -->
@endforelse




@else      {{--   وقتی که دیتا خالی باش میاد دومی میخونه یا اگه خطایی خورد  --}}




    @if (!empty($seo))

        <!--  title website  -->
        <title>{{ $seo->title }}</title>
        <!--  end title website  -->
        <meta name="keywords" content="{{ $seo->keywords }}"/>
        <meta name="description" content="{{ $seo->description }}"/>
        <meta name="author" content="{{ $seo->author }}"/>
        <meta name="robots" content="index,follow"/> <!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->
        <!--  end seo website  -->
        <!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:keywords" content="{{ $seo->keywords }}">
        <meta property="og:image" content=""> <!--  icon  -->
        <meta property="og:url" content="{{"https://www.google.com"}}">   {{-- url OR domain website --}}
        {{--<meta name="twitter:card" content="summary_large_image">--}}

        <!-- Some Non-essential but recommended -->
        <meta property="og:site_name" content="{{"https://www.google.com"}}"> <!-- Optional -->
        <meta name="twitter:image:alt" content="Alt text for image"> <!-- Optional -->

    @else

        <!--  seo website  -->
        <!--  title website  -->
        <title>{{ "وب سایت فروشگاهی" }}</title>
        <!--  end title website  -->
        <meta name="keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی"/>
        <meta name="description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید"/>
        <meta name="author" content="mahdi"/>
        <meta name="robots" content="index,follow"/>
        <!--  end seo website  -->
        <!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
        <meta property="og:title" content="وب سایت فروشگاهی">
        <meta property="og:description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید">
        <meta property="og:keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی">
        <meta property="og:image" content=""> <!--  icon  -->
        <meta property="og:url" content="{{"https://www.google.com"}}">

        <!--  <meta name="twitter:card" content="summary_large_image">  -->

        <!-- Some Non-essential but recommended -->
        <meta property="og:site_name" content="{{"https://www.google.com"}}">
        <meta name="twitter:image:alt" content="Alt text for image">
        <!--  end meta tag social  -->

    @endif


@endif
<!--  end meta tag social  -->






{{-- $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->get();  //id(column)  desc(end)  |  take(1) بگیز یکی  skip(0) از صفر شروع کن اولی که همون آخری

@forelse($seo as $item)

    <!--  seo website  -->
    <!--  title website  -->
    <title>{{ $item->title }}</title>
    <!--  end title website  -->
    <meta name="keywords" content="{{ $item->keywords }}"/>
    <meta name="description" content="{{ $item->description }}"/>
    <meta name="author" content="{{ $item->author }}"/>
    <meta name="robots" content="index,follow"/> <!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->
    <!--  end seo website  -->
    <!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
    <meta property="og:title" content="{{ $item->title }}">
    <meta property="og:description" content="{{ $item->description }}">
    <meta property="og:keywords" content="{{ $item->keywords }}">
    <meta property="og:image" content=""> <!--  icon  -->
    <meta property="og:url" content="{{"https://www.google.com"}}">   <!-- url OR domain website -->
    <!--  <meta name="twitter:card" content="summary_large_image">  -->

    <!-- Some Non-essential but recommended -->
    <meta property="og:site_name" content="{{"https://www.google.com"}}"> <!-- Optional -->
    <meta name="twitter:image:alt" content="Alt text for image"> <!-- Optional -->
    <!--  end meta tag social  -->


@empty       <!--    وقتی که دیتا خالی باش میاد دومی میخونه یا اگه خطایی خورد  -->


    <!--  seo website  -->
    <!--  title website  -->
    <title>{{ "وب سایت فروشگاهی" }}</title>
    <!--  end title website  -->
    <meta name="keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی"/>
    <meta name="description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید"/>
    <meta name="author" content="mahdi"/>
    <meta name="robots" content="index,follow"/> <!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->
    <!--  end seo website  -->
    <!-- meta tag social  |  Facebook, whatsapp, instagram, twitter and other popular social media -->
    <meta property="og:title" content="وب سایت فروشگاهی">
    <meta property="og:description" content="شما می توانیید از تازه ترین اخبار و به روز ترین مقالات در این وب سایت با خبر شوید">
    <meta property="og:keywords" content="سایت شخصی , سایت فروشگاهی , سایت خبری , وب سایت فروشگاهی">
    <meta property="og:image" content=""> <!--  icon  -->
    <meta property="og:url" content="{{"https://www.google.com"}}">   <!-- url OR domain website -->


    <!--  <meta name="twitter:card" content="summary_large_image">  -->

    <!-- Some Non-essential but recommended -->
    <meta property="og:site_name" content="{{"https://www.google.com"}}"> <!-- Optional -->
    <meta name="twitter:image:alt" content="Alt text for image"> <!-- Optional -->
    <!--  end meta tag social  -->

@endforelse


--}}
