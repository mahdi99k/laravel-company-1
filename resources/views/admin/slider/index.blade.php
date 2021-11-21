@extends('admin.layouts.master')

@section('title'  , 'نمایش اطلاعات اسلایدر')


@section('content')
    <section class="data">

        @includeIf("front.partials.session.delete")

        @includeIf("front.partials.session.update")

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color: #4bffc1">صفحه ی نمایش اسلایدر</h3>
                <table class="table table-bordered table-hover table-responsive-xl bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>عنوان</td>
                        <td>لینک</td>
                        <td>عکس</td>
                        <td>نام عکس</td>
                        <td style="font-size: 13px">به روزرسانی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($slider as $item)
                        <tr class="text-center text-white">

                            <td style="font-size: 13px">{{ $item->caption }}</td>
                            <td>{{ $item->link }}</td>
                            <td><img src="{{ asset("assets/images/slider/$item->image") }}" width="110" height="75">
                            </td>
                            <td>{{ $item->alt }}</td>

                            <td><a href="{{ route('slider.edit' , ['id' => $item->id]) }}" class="btn btn-info text-light">تغییرات</a></td>
                            {{--<td>
                                {!! Form::open(['route' => ['slider.edit' , $item->id] , 'method' => 'get']) !!}
                                {!! Form::submit('تغییرات' , ['class' => 'btn btn-info text-light']) !!}
                                {!! Form::close() !!}
                            </td>--}}

                            <td>
                                {!! Form::open(['route' => ['slider.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-white">دیتایی درون جدول اسلایدر وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $slider->links() }}
                <a href="{{ route('slider.create') }}" class="btn btn-primary text-light">برو به صفحه ی ساخت اسلایدر</a>
            </section>
        </section>
    </section>
@endsection









