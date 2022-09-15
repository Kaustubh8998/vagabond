<nav class="navbar navbar-dark fixed-top navbar-expand-md nav-bg justify-content-center d-flex" id="nav">
    <a href="{{ route('index') }}" class="navbar-brand d-flex w-50 mr-auto order-md-2">
        <img class="m-md-auto logo-style" src="{{ asset('/img/vagalogo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100 order-md-1" id="navbar">
        <ul class="nav navbar-nav ml-auto w-100 d-flex justify-content-around">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Experiences
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                        <a href="{{ route('category-profile', $category->slug) }}" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('experiences') }}">Upcoming</a>
            </li>
        </ul>
    </div>
    
    <div class="navbar-collapse collapse w-100 order-md-3" id="navbar">
        <ul class="nav navbar-nav ml-auto w-100 d-flex justify-content-around">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('office-outdoors') }}">Office Outdoors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
            </li>
        </ul>
    </div>
</nav>
