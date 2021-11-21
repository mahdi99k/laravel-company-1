@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات سئو')


@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

       @includeIf('front.partials.session.update')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center text-warning mb-4">صفحه ی نمایش سئو</h3>
                <table class="table table-bordered table-hover table-responsive-lg bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>عنوان</td>
                        <td style="font-size: 13px">کلمات کلیدی</td>
                        <td>توضیحات</td>
                        <td>نویسنده</td>
                        <td style="font-size: 13px">به روزرسانی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($seo as $item)
                        <tr class="text-center text-white">
                            <td>{{ $item->title }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->keywords , 20) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->description , 20) }}</td>
                            <td>{{ $item->author }}</td>

                            <td><a href="{{ route('seo.edit' , ['id' => $item->id]) }}" class="btn btn-info text-light">تغییرات</a></td>

                            <td>
                                {!! Form::open(['route' => ['seo.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-white">دیتایی درون جدول سئو وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $seo->links() }}
                <a href="{{ route('seo.create') }}" class="btn btn-primary text-light">برو به صفحه ی ساخت سئو</a>
            </section>
        </section>
    </section>
@endsection


