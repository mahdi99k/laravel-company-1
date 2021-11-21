@if (session('create'))
    <section class="row m-0">
        <section class="col-6 offset-3 mt-3 alert alert-success">
            <h6 class="text-center">{{ session('create') }}</h6>
        </section>
    </section>
@endif
