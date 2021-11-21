@if (session('delete'))
    <section class="row m-0">
        <section class="col-6 offset-3 mt-3 alert alert-danger">
            <h6 class="text-center">{{ session('delete') }}</h6>
        </section>
    </section>
@endif
