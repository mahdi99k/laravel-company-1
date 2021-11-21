@if (session('deactive'))
    <section class="row m-0">
        <section class="col-6 offset-3 mt-3 alert alert-danger">
            <h6 class="text-center">{{ session('deactive') }}</h6>
        </section>
    </section>
@endif
