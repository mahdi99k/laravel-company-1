@extends('admin.layouts.master')

@section('title' , 'نمایش اطلاعات کامنت')

@section('content')
    <section class="data">

        @includeIf('front.partials.session.delete')

        @includeIf('front.partials.session.deactive')

        @includeIf('front.partials.session.active')

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary p-4 mt-5">
                <h3 class="text-center mb-4" style="color: #ffb42f">صفحه ی نمایش کامنت</h3>
                <table class="table table-bordered table-hover table-responsive-lg bg-dark">

                    <thead>
                    <tr class="text-center text-warning">
                        <td>نام</td>
                        <td>ایمیل</td>
                        <td>کامنت</td>
                        <td>اخبار</td>
                        <td>وضعیت</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    @forelse ($comment as $item)
                        <tr class="text-center text-white">

                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->email }}</td>
                            <td style="font-size: 13px">{{ $item->comment }}</td>
                            <td style="font-size: 13px">{{ $item->news->title }}</td>

                            <td>
                                @if ($item->publish === 1)
                                    {!! Form::open(['route' => ['comment.update' , $item->id], 'method' => 'put']) !!}
                                    {!! Form::hidden('publish' , 0) !!}
                                    {!! Form::submit('فعال',['class' =>'d-inline-block badge text-dark pr-3 pl-3 p-2',
                                        'style' =>'font-size: 14px;background-color:#00E676']) !!}
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['route' => ['comment.update' , $item->id], 'method' => 'put']) !!}
                                    {!! Form::hidden('publish' , 1) !!}
                                    {!! Form::submit('غیر فعال' , ['class' => 'd-inline-block badge badge-warning p-2' ,'style' => 'font-size: 13px']) !!}
                                    {!! Form::close() !!}

                                @endif
                            </td>

                            <td>{{ Form::open(['route' => ['comment.destroy' , $item->id] , 'method' => 'delete']) }}
                                {!! Form::submit('حذف' , ['class' => 'btn btn-danger text-light']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-white">دیتایی درون جدول کامنت وجود ندارد</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $comment->links() }}
            </section>
        </section>
    </section>
@endsection
