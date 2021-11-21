@extends('admin.layouts.master')

@section('title' , 'صفحه ساخت اسلایدر')


@section('content')

    <section class="data">

        @includeIf('front.partials.session.create')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white p-4 mt-5 text-right" style="direction: rtl">
                <h3 class="text-center mb-4" style="color: #4bffc1">صفحه ی ایجاد اسلایدر</h3>
                {!! Form::open(['route' => 'slider.store' , 'method' => 'post' , 'files' => true]) !!}

                <section class="form-group">
                    {!! Form::label('caption' , 'عنوان') !!}
                    {!! Form::text('caption' , old('caption') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray' ,
                        'placeholder' => 'لطفا عنوان اسلایدر وارد نمایید']) !!}
                </section>
                @error('caption')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('image' , 'عکس') !!}
                    {!! Form::file('image' , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray']) !!}
                </section>
                @error('image')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror

                <section class="form-group">
                    {!! Form::label('alt' , 'نام عکس') !!}
                    {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray' ,
                        'placeholder' => 'لطفا یک نام برای تصویر اسلایدر وارد نمایید']) !!}
                </section>
                @error('alt')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('link' , 'لینک') !!}
                    {!! Form::url('link' , old('link') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray;' ,
                        'placeholder' => 'لطفا لینک اسلایدر وارد نمایید']) !!}
                </section>
                @error('link')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::submit('ساخت اسلایدر' , ['class' => 'btn btn-success btn-block mt-5']) !!}
                </section>

                {!! Form::close() !!}

                <a href="{{ route('slider.index') }}" class="btn btn-primary text-light">برو به صفحه ی نمایش اسلایدر</a>

            </section>
        </section>
    </section>
@endsection



