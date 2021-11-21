@extends('admin.layouts.master')

@section('title' , 'صفحه به روزرسانی پارالکس')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.create')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary text-white p-4 mt-5 text-right"
                     style="direction: rtl">

                <h3 class="text-center mb-4" style="color:aqua">صفحه ی به روزرسانی پارالکس</h3>
                {!! Form::model($parallax , ['route' => ['parallax.update' , $parallax->id] , 'method' => 'put' , 'files' => true]) !!}


                {!! Form::label('title' , 'عنوان') !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا عنوان پارالکس وارد نمایید']) !!}
                @error('title')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('titleSize' , 'اندازه متن عنوان') !!}    {{--  [1 => 'iran' , 2 => 'japan']  --}}
                {!! Form::select('titleSize' , [14 => '14' ,16 => '16' ,18 => '18' ,20 => '20' ,22 => '22',24 => '24' ,26 => '26',28 => '28'
                    ,30 => '30', 32 => '32' , '34' => 34] , $parallax->titlesize ,['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                @error('titleSize')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('titleColor' , 'رنگ متن عنوان') !!}
                {!! Form::color('titleColor', $parallax->titleColor, ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                @error('titleColor')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('body' , 'توضیحات') !!}
                {!! Form::textarea('body' , old('body') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray;resize:none;height:150px' ,
                   'placeholder' => 'لطفا توضیحات پارالکس وارد نمایید']) !!}
                @error('body')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('bodySize' , 'اندازه متن توضیحات') !!}    {{--  [1 => 'iran' , 2 => 'japan']  --}}
                {!! Form::select('bodySize' , [14 => '14' ,15 => '15' ,16 => '16' ,17 => '17' ,18 => '18',19 => '19' ,20 => '20',21 => '21'
                    ,22 => '22'] , $parallax->bodySize ,['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                @error('bodySize')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('bodyColor' , 'رنگ متن توضیحات') !!}
                {!! Form::color('bodyColor', $parallax->bodyColor, ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                @error('bodyColor')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('image' , 'عکس') !!}
                {!! Form::file('image' ,['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                <p class="text-center"><img src="{{ asset('assets/images/parallax/'.$parallax->image) }}" width="150" height="100"></p>
                @error('image')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::label('alt' , 'نام عکس') !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                   'placeholder' => 'لطفا یک نام برای تصویر پارالکس وارد نمایید']) !!}
                @error('alt')
                <p class="text-warning text-right">{{ $message }}</p>
                @enderror


                {!! Form::submit('به روزرسانی پارالکس' , ['class' => 'btn btn-success btn-block mt-5']) !!}

                {!! Form::close() !!}

                <a href="{{ route('parallax.index') }}" class="btn btn-primary text-light mt-3">برو به صفحه نمایش پارالکس</a>

            </section>
        </section>
    </section>
@endsection



