<!-- ======================================== Start make news ======================================== -->

<section class="news" style="text-align: center">

    @if (session('comment'))
        <h3 style="width: 40%;margin: 10px auto;background-color: #38c172;color: #dfdfdf;text-align: center;padding: 10px;">{{ session('comment') }}</h3>
    @endif

    <section class="itemNews" style="width: 41%">
        <div class="divNews">
            <h1>{{ $news->title }}</h1>
            <p style="text-align: center;margin: 30px 0;border-bottom: 1px solid #444">
                <img src="{{ asset('assets/images/news/'.$news->image) }}" width="500" height="350"
                     alt="{{ $news->alt }}">
            </p>
            <p>{{ $news->summary }}</p>
            <p>
                <span style="background: gold;padding: 3px"><strong>تاریخ : </strong>{{ \Hekmatinasser\Verta\Verta::instance($news->created_at)->format('%d  %B  %Y | H:i')  }}</span>
                {{--<span>{{ \Hekmatinasser\Verta\Verta::instance($news->created_at)->format('Y-m-d | H:i | l')  }}</span>--}}
                {{--<span"><strong>تاریخ : </strong>{{ \Hekmatinasser\Verta\Verta::instance($news->created_at)  }}</span>--}}
            </p>
        </div>
    </section>


    <section style="width: 40%;padding: 50px;box-sizing: border-box;background-color: lightskyblue;direction: rtl;text-align: right;margin: 40px auto;
             box-shadow: 4px 5px 10px #959595 , -4px -5px 10px #bbbbbb">


        {!! Form::open(['route' => 'comment' , 'method' => 'post']) !!}

        <section class="form-group">
            {!! Form::label('fullname' , 'نام و نام خانوادگی : ') !!}
            {!! Form::text('fullname' , old('fullname') , ['style' => 'border:2px inset lightgray;width:50%;display:block;height:30px;
                direction: rtl;border-radius:5px;margin-top:4px;margin-bottom:30px;width:65%;']) !!}
        </section>

        <section class="form-group">
            {!! Form::label('email' , 'آدرس ایمیل : ') !!}
            {!! Form::email('email' , old('email') , ['style' => 'border:2px inset lightgray;width:50%;display:block;height:30px;
                direction: rtl;border-radius:5px;margin-top:4px;margin-bottom:20px;width:65%;']) !!}
        </section>


        <section class="form-group">
            {!! Form::label('comment' , 'نظرات : ') !!}
            {!! Form::textarea('comment' , old('comment') , ['style' => 'border:2px inset lightgray;width:50%;display:block;height:30px;
                direction: rtl;border-radius:5px;margin-top:4px;margin-bottom:20px;width:65%;resize:none;height:150px;']) !!}
        </section>


        <section class="form-group">
            {!! Form::hidden('id' , $news->id ) !!}
        </section>

        <section class="form-group">
            {!! Form::submit('ثبت', ['style' => 'padding:3px;background:royalblue;color:whitesmoke;width:17%;font-size:16px;
                font-family: IRANSans Medium;height;20px;display:block;border-radius:5px;']) !!}
        </section>

        {!! Form::close() !!}
    </section>


    <section
        style="width: 60%;padding:50px 0;background-color: royalblue;color: whitesmoke;text-align: right;padding-right: 50px;
        border-radius: 10px;box-shadow: 4px 7px 10px #959595 , -4px -7px 10px #bbbbbb;margin:  0 auto">
        @forelse ($comments as $item)
            <h3 style="color: lightgreen;font-weight: normal">{{ $item->fullname }}</h3>
            {{--<h3>{{ $item->email }}</h3>--}}
            <h4 style="padding-right: 20px;margin-bottom: 35px;padding-bottom: 10px;border-bottom: 1px solid whitesmoke;width: 93%;font-weight: normal">{{ $item->comment }}</h4>
        @empty
            <h3 style="text-align: center;color: white;font-weight: normal;font-size: 20px">نظری درون این خبر وجود ندارد</h3>
        @endforelse
    </section>

</section>
<!-- ======================================== End make news ======================================== -->
