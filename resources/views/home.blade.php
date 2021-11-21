@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 12%">
                    <div class="card-header" style="font-size: 16px">{{ __('داشبورد') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success text-right" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __(' ! شما وارد شده اید') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
