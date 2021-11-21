@extends('admin.layouts.master')

@section('title' , 'صفحه ساخت سئو')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.create')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white p-4 mt-5 text-right" style="direction: rtl">

                <h3 class="text-center text-warning mb-4">صفحه ی ایجاد سئو</h3>
                {!! Form::open(['route' => 'seo.store' , 'method' => 'post']) !!}

                {!! Form::label('title' , 'عنوان') !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا عنوان سئو وارد نمایید']) !!}
                @error('title')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('keywords' , 'کلمات کلیدی') !!}
                {!! Form::textarea('keywords' , old('keywords') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray;
                    resize:none;height:130px' ,'placeholder' => 'لطفا کلمات کلیدی سئو وارد نمایید']) !!}
                @error('keywords')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('description' , 'توضیحات') !!}
                {!! Form::textarea('description' , old('description') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray;
                   resize:none;height:130px', 'placeholder' => 'لطفا توضیحات سئو وارد نمایید']) !!}
                @error('description')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('author' , 'نویسنده') !!}
                {!! Form::text('author' , old('author') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا نام نویسنده سئو وارد نمایید']) !!}
                @error('author')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::submit('ساخت سئو' , ['class' => 'btn btn-success btn-block mt-5']) !!}


                {!! Form::close() !!}

                <a href="{{ route('seo.index') }}" class="btn btn-primary text-light mt-3">برو به صفحه نمایش سئو</a>

            </section>
        </section>
    </section>
@endsection



