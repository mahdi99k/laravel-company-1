@extends('front.layouts.master')


@section('seo')
    @include('front.partials.news.seoNews' , ['seo' => $seo])
@endsection

@section('content')

    <!-- =================== Start make website ======================== -->
    <main class="wrapper">

        <!-- =================== Start make menu ======================= -->
    @include('front.partials._menu' )
    <!-- =================== End make menu ========================= -->

        <!-- =================== Start make parallax =================== -->
    @include('front.partials._parallax' , ['parallax' => $parallax])
    <!-- =================== End make parallax ===================== -->

        <!-- =================== Start make news ======================= -->
    @include('front.partials.news.pageNews' , ['news' => $news , 'comments' => $comments])
    <!-- =================== End make news ======================== -->


        <!-- ===================Start make footer ===================== -->
    @include('front.partials._footerWebsite' , ['link' => $link])
    <!-- =================== End make footer ====================== -->

    </main>
    <!-- =================== End make website ========================= -->

@endsection




