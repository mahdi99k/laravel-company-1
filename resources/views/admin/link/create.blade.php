@extends('admin.layouts.master')

@section('title' , 'صفحه ساخت لینک')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.create')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white p-4 mt-5 text-right" style="direction: rtl">

                <h3 class="text-center mb-4" style="color: lightgreen">صفحه ی ایجاد لینک</h3>
                {!! Form::open(['route' => 'link.store' , 'method' => 'post']) !!}

                {!! Form::label('name_link' , 'نام لینک') !!}
                {!! Form::text('name_link' , old('name_link') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا یک نام برای لینک وارد نمایید']) !!}
                @error('name_link')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('url' , 'آدرس اینترنتی') !!}
                {!! Form::text('url' , old('url') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا آدرس اینترنتی لینک وارد نمایید']) !!}
                @error('url')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::submit('ساخت لینک' , ['class' => 'btn btn-success btn-block mt-5']) !!}


                {!! Form::close() !!}

                <a href="{{ route('link.index') }}" class="btn btn-primary text-light mt-3">برو به صفحه نمایش لینک</a>

            </section>
        </section>
    </section>
@endsection
