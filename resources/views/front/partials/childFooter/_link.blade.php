@forelse ($link as $item)
    <span class="link">
        <a href="{{ $item->url }}" target="_blank">{{ $item->name_link }}</a>
    </span>

@empty

    <section class="link">
        <a href="#">لینک های مرتبط</a>
        <a href="#">لینک های مرتبط</a>
        <a href="#">لینک های مرتبط</a>
        <a href="#">لینک های مرتبط</a>
    </section>

@endforelse
