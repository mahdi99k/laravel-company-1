@extends('admin.layouts.master')

@section('title' , 'پنل مدیریت')


@section('content')

    <section class="show">
        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white text-right p-4" style="margin-top: 7%">
                <h2 class="text-center text-warning mb-4">{{ \Illuminate\Support\Facades\Auth::user()->name }} به پنل مدیریت خوش آمدید </h2>
                <p style=" line-height: 30px">
                    سلام دوست عزیز , شما می توانید برای دسترسی به بخش های متنوع وب سایت و تنظیمات بخش سئو و پنل مدیریت
                    روی دکمه زیر کلیک کنید , در این قسمت شما باید وب سایت خود را داینامیک و آماده تغییرات لازم کنید تا
                    بتوانید یک سئو بسیار خوبی از گوگل بگیرید تا وب سایتتون زنده و پویا بماند و آماده انجام کار های لازم
                    باشد
                </p>
                <a href="{{ route('seo.index') }}" class="btn btn-warning text-dark mt-4">برو به صفحه ی نمایش سئو</a>
            </section>
        </section>
    </section>

@endsection



