@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات تماس با ما')

@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color: #b3b4fc">صفحه ی نمایش تماس با ما</h3>
                <table class="table table-bordered table-hover table-responsive-lg bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>نام</td>
                        <td>ایمیل</td>
                        <td>توضیحات</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($contact as $item)
                        <tr class="text-center text-white">
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->comment }}</td>

                            <td>
                                {!! Form::open(['route' => ['contact.destroy' , $item->id] , 'method' => 'delete']) !!}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-white">دیتایی درون جدول تماس با ما وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $contact->links() }}
            </section>
        </section>
    </section>
@endsection
