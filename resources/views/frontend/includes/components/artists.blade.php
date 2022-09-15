<div class="col-sm-12">
    <div id="artists" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                @foreach($artists as $artist)
                    @if($loop->first)
                    <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif    
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-sm-6 col-8">
                                <img class="d-block w-100" src="{{ $artist->image != '' ? url($artist->image) : asset('/img/landing.png') }}" alt="">
                            </div>
                            <div class="col-md-auto col-sm-12 d-flex flex-column justify-content-center align-items-md-start align-items-center">
                                <h4>{{ $artist->name }}</h4>
                                {{-- <p>{{ $artist->title }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <a class="carousel-control-prev" href="#artists" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#artists" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
