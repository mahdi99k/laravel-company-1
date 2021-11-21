@extends('admin.layouts.master')

@section('title' , 'صفحه ساخت اخبار')


@section('content')

    <section class="data">

        @includeIf('front.partials.session.create')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white p-4 mt-5 text-right" style="direction: rtl">
                <h3 class="text-center mb-4" style="color: #ff6868 ">صفحه ی ایجاد اخبار</h3>
                {!! Form::open(['route' => 'news.store' , 'method' => 'post' , 'files' => true]) !!}

                <section class="form-group">
                    {!! Form::label('title' , 'عنوان') !!}
                    {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray' ,
                        'placeholder' => 'لطفا عنوان اخبار وارد نمایید']) !!}
                </section>
                @error('title')
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
                        'placeholder' => 'لطفا یک نام برای تصویر اخبار وارد نمایید']) !!}
                </section>
                @error('alt')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('summary' , 'توضیحات') !!}
                    {!! Form::textarea('summary' , old('summary') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray;
                        resize:none;height:150px' ,'placeholder' => 'لطفا توضیحات اخبار وارد نمایید']) !!}
                </section>
                @error('summary')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('keywords' , 'کلمات کلیدی سئو') !!}
                    {!! Form::textarea('keywords' , old('keywords') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray;
                        resize:none;height:150px' ,'placeholder' => 'لطفا کلمات کلیدی سئو در صفحه اخبار وارد نمایید']) !!}
                </section>
                @error('keywords')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('description' , 'توضیحات سئو') !!}
                    {!! Form::textarea('description' , old('description') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray;
                        resize:none;height:150px' ,'placeholder' => 'لطفا توضیحات سئو در صفحه اخبار وارد نمایید']) !!}
                </section>
                @error('description')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::label('author' , 'نویسنده سئو') !!}
                    {!! Form::text('author' , old('author') , ['class' => 'form-control mb-4' , 'style' => 'border : 2px inset lightgray' ,
                        'placeholder' => 'لطفا نویسنده سئو در صفحه اخبار وارد نمایید']) !!}
                </section>
                @error('author')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                <section class="form-group">
                    {!! Form::submit('ساخت اخبار' , ['class' => 'btn btn-success btn-block mt-5']) !!}
                </section>

                {!! Form::close() !!}

                <a href="{{ route('news.index') }}" class="btn btn-primary text-light">برو به صفحه ی نمایش اخبار</a>

            </section>
        </section>
    </section>
@endsection



