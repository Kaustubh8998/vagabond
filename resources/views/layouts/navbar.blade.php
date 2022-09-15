<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Vaga Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if(Auth::user())
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('trips.index') }}">Trips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('slides.index') }}">Slides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('testimonials.index') }}">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('change-password') }}">Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            @endif
        </ul>
    </div>
</nav>