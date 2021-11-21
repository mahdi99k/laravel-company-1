<!-- ===================Start make footer ===================== -->
<footer>

    {{--@include('front.partials.childFooter._social')--}}

    @include('front.partials.childFooter._search')

    @include('front.partials.childFooter._link' , ['link' => $link])

</footer>
<!-- =================== End make footer ====================== -->
