<form action="{{ $route }}" method="{{ $method }}" class="form">
    {{ $overrideMethod = null }}
    @csrf
    <div class="row">
        @foreach ($formGroup as $f)
            {!! $f !!}
        @endforeach
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">
                Submit
            </button>
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                Reset
            </button>
        </div>
    </div>
</form>
