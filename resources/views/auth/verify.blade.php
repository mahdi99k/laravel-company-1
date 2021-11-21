@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #333333;margin-top: 12%">
                    <div class="card-header text-white" style="font-size: 17px">{{ __('آدرس ایمیل خود را تأیید کنید') }}</div>

                    <div class="card-body bg-secondary text-white">
                        @if (session('resent'))
                            <div class="alert alert-success text-right" role="alert">
                                {{ __('یک لینک تأیید جدید به آدرس ایمیل شما ارسال شده است') }}
                            </div>
                        @endif

                        {{ __('قبل از ادامه، لطفاً ایمیل خود را برای پیوند تأیید بررسی کنید. اگر ایمیل را دریافت نکردید') }}
                        {{-- {{ __('اگر ایمیل را دریافت نکردید') }},--}}
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link text-warning p-0 m-0 mt-3 align-baseline" style="text-decoration: none">
                                {{ __('برای ارسال تایید ایمیل اینجا را کلیک کنید') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
