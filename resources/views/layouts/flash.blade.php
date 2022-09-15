@if (Session::has('success'))
    <div class="alert alert-success flash alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done! - </strong> {{ Session::get('success') }}
    </div>
@endif 

@if (Session::has('error'))
    <div class="alert alert-danger flash alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Watch Out! - </strong> {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info flash alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Heads up! - </strong> {{ Session::get('info') }}
    </div>
@endif 