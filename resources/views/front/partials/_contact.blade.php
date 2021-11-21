<!-- ======================================== Start make form ======================================== -->
<section class="contact">

    {{--   قسمت نمایش آلرت یا سشن درون خبر ها بالای وب سایت   --}}

    <form action="{{ route('contact.store') }}" method="post">
        @csrf {{--<input type="hidden" name="_token" value="ohsa3dSn9qJFFbzbdAVhflf0M0tZq486YwqCfdMI">--}}
        <label for="fullname">نام و نام خانوادگی</label>
        <input type="text" name="fullname" id="fullname" placeholder="لطفا نام و نام خانوادگی را وارد نمایید">
        <label for="email">ایمیل</label>
        <input type="email" name="email" id="email" placeholder="لطفا ایمیل خود را وارد نمایید">
        <label for="comment">توضیحات</label>
        <textarea name="comment" id="comment" placeholder="لطفا نظر خود را وارد نمایید"></textarea>
        <input type="submit" value="ثبت نظر">
    </form>
</section>
<!-- ======================================== End make form ======================================== -->
