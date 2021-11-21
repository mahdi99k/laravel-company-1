<!-- ======================================== Start make news ======================================== -->

<section class="news">

    @forelse ($search as $item)

        <section class="itemNews">
            <div class="divNews">
                <h1>{{ $item->title }}</h1>
                <p style="text-align: center;margin: 30px 0;border-bottom: 1px solid #444">
                    <img src="{{ asset('assets/images/news/'.$item->image) }}" width="400" height="300"
                         alt="{{ $item->alt }}">
                </p>
                <p>{{ \Illuminate\Support\Str::limit($item->summary , 350) }}</p>
                <a href="{{ route('showNews' , ['id' => $item->id]) }}">ادامه مطالب</a>
            </div>
        </section>

    @empty

        <section class="itemNews" style="margin-right: 35%">
            <div class="divNews" style="background-color: crimson;color: whitesmoke">
                <h1>جستجوی مورد نظر یافت نشد</h1>
            </div>
        </section>


    @endforelse

</section>
<!-- ======================================== End make news ======================================== -->
