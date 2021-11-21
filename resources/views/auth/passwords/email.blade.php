@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #333333;margin-top: 12%">
                    <div class="card-header text-white" style="font-size: 17px">{{ __('بازنشانی رمز عبور') }}</div>

                    <div class="card-body bg-secondary">
                        @if (session('status'))
                            <div class="alert alert-success text-right" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-white" style="font-size: 16px">{{ __('ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" placeholder="لطفا ایمیل خود را وارد نمایید" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback text-warning" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ارسال بازنشانی رمز عبور') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
