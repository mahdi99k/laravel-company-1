@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات اخبار')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

        @includeIf('front.partials.session.update')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color: #ff6868">صفحه ی نمایش اخبار</h3>
                <table class="table table-bordered table-hover table-responsive-xl bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>عنوان</td>
                        <td>توضیحات</td>
                        <td>عکس</td>
                        <td>نام عکس</td>
                        <td>کلمات کلیدی سئو</td>
                        <td>توضیحات سئو</td>
                        <td>نویسنده سئو</td>
                        <td style="font-size: 13px">به روزرسانی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                   <tbody>
                    @forelse ($news as $item)
                        <tr class="text-center text-white">

                            <td>{{ \Illuminate\Support\Str::limit($item->title , 25) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->summary , 30) }}</td>
                            <td><img src="{{ asset('assets/images/news/'.$item->image) }}" width="110" height="75"></td>
                            <td>{{ $item->alt }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->keywords , 25) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->description , 25) }}</td>
                            <td>{{ $item->author }}</td>

                            <td><a href="{{ route('news.edit' , ['id' => $item->id]) }}" class="btn btn-info text-light">تفییرات</a></td>

                            {{--<td>
                                {!! Form::open(['route' => ['news.edit' , $item->id] , 'method' => 'get']) !!}
                                {!! Form::submit('تغییرات' , ['class' => 'btn btn-info text-light']) !!}
                                {!! Form::close() !!}
                            </td>--}}

                            <td>
                                {!! Form::open(['route' => ['news.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-white">دیتایی درون جدول اخبار وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $news->links() }}
                <a href="{{ route('news.create') }}" class="btn btn-primary text-light">برو به صفحه ی ساخت اخبار</a>
            </section>
        </section>
    </section>
@endsection











