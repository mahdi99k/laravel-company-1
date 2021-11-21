@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات پارالکس')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

        @includeIf("front.partials.session.update")

        <section class="row m-0">
            <section class="col-10 offset-1 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color:aqua">صفحه ی نمایش پارالکس</h3>
                <table class="table table-bordered table-hover table-responsive-xl bg-dark">

                    <thead>
                    <tr class="text-center text-warning" style="font-size: 13px">
                        <td>عنوان</td>
                        <td>اندازه عنوان</td>
                        <td>رنگ عنوان</td>
                        <td>توضیحات</td>
                        <td>اندازه توضیحات</td>
                        <td>رنگ توضیحات</td>
                        <td>عکس</td>
                        <td>نام عکس</td>
                        <td>به روزرسانی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($parallax as $item)
                        <tr class="text-center text-white">
                            <td style="font-size: 13px">{{ \Illuminate\Support\Str::limit($item->title , 35) }}</td>
                            <td>{{ $item->titleSize }}</td>
                            <td>{{ $item->titleColor }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->body , 20) }}</td>
                            <td>{{ $item->bodySize }}</td>
                            <td>{{ $item->bodyColor }}</td>
                            <td><img src="{{ asset("assets/images/parallax/$item->image") }}" width="110" height="75"></td>
                            <td>{{ $item->alt }}</td>

                            {{--<td>
                                {!! Form::open(['route' => ['parallax.edit' , $item->id] , 'method' => 'get']) !!}
                                {!! Form::submit('تغییرات' , ['class' => 'btn btn-info text-light']) !!}
                                {!! Form::close() !!}
                            </td>--}}

                            <td><a href="{{ route("parallax.edit" , ['id' => $item->id]) }}" class="btn btn-info text-light">تغییرات</a></td>

                            <td>
                                {!! Form::open(['route' => ['parallax.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-white">دیتایی درون جدول پارالکس وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>



                </table>
               {{ $parallax->links() }}
                <a href="{{ route('parallax.create') }}" class="btn btn-primary text-light">برو به صفحه ی ساخت پارالکس</a>
            </section>
        </section>
    </section>
@endsection










