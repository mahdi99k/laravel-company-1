@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات لینک')



@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

        @includeIf('front.partials.session.update')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color: lightgreen">صفحه ی نمایش لینک</h3>
                <table class="table table-bordered table-hover table-responsive-lg bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>نام لینک</td>
                        <td>آدرس اینترنتی</td>
                        <td style="font-size: 13px">به روزرسانی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($link as $item)
                        <tr class="text-center text-white">
                            <td>{{ $item->name_link }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->url , 65) }}</td>

                            <td><a href="{{ route('link.edit' , ['id' => $item->id]) }}" class="btn btn-info text-light">تغییرات</a></td>

                            <td>
                                {!! Form::open(['route' => ['link.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' ,['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-white">دیتایی درون جدول لینک وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $link->links() }}
                <a href="{{ route('link.create') }}" class="btn btn-primary text-light">برو به صفحه ی ساخت لینک</a>
            </section>
        </section>
    </section>
@endsection
