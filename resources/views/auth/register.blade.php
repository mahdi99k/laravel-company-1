@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #333333;margin-top: 12%">
                    <div class="card-header text-white" style="font-size: 17px">{{ __('ثبت نام') }}</div>

                    <div class="card-body bg-secondary">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-white">{{ __('نام') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name"  placeholder="لطفا نام خود را وارد نمایید" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback text-warning" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" placeholder="لطفا ایمیل خود را وارد نمایید">

                                    @error('email')
                                    <span class="invalid-feedback text-warning" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password" placeholder="لطفا رمز عبور خود را وارد نمایید">

                                    @error('password')
                                    <span class="invalid-feedback text-warning" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-white">{{ __('تکرار رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                           required autocomplete="new-password"  placeholder="لطفا تکرار رمز عبور را وارد نمایید">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('ثبت نام') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
