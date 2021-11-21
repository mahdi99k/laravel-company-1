@extends('front.layouts.master')


@section('seo')
    @include('front.partials._seo' , ['seo' => $seo])
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
        @include('front.partials._news' , ['news' => $news])
        <!-- =================== End make news ======================== -->

        <!-- =================== Start make form ====================== -->
        @include('front.partials._contact')
        <!-- =================== End make form ======================== -->

        <!-- =================== Start make product =================== -->
        @include('front.partials._product' , ['slider' => $slider])
        <!-- =================== End make product ===================== -->

        <!-- ===================Start make footer ===================== -->
        @include('front.partials._footerWebsite' , ['link' => $link])
        <!-- =================== End make footer ====================== -->

    </main>
    <!-- =================== End make website ========================= -->

@endsection




