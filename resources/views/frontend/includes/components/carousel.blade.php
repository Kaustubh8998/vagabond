<div>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- <a class="switch-to-full"><img src="{{ asset('/svg/switch-to-full-screen-button.svg') }}" alt=""></a> -->
        <div class="carousel-inner">
            @if(isset($category['images']))

                @foreach($category['images'] as $image)
                    @if($loop->first)
                    <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif
                        <a data-toggle="lightbox" href="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" data-gallery="image-gallery">    
                            <img class="d-block w-100" src="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" alt="">
                        </a>     
                    </div>
                @endforeach

            @else
                @foreach($trip['images'] as $image)
                    @if($loop->first)
                    <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif   
                        <a data-toggle="lightbox" href="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" data-gallery="image-gallery">
                            <img class="d-block w-100" src="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" alt="">
                        </a> 
                    </div>
                @endforeach
            @endif
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- <div class="modal fade" id="image-lightbox" tabindex="-1" role="dialog" aria-labelledby="image-lightbox" aria-hidden="true">
        <div class="modal-holder">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="image-lightbox-carousel" class="carousel slide" data-ride="carousel">
                            <a data-dismiss="modal" class="switch-to-full"><img src="{{ asset('/svg/full-screen-exit.svg') }}" alt=""></a>
                            <div class="carousel-inner">
                            @if(isset($category['images']))
                                @foreach($category['images'] as $image)
                                    @if($loop->first)
                                    <div class="carousel-item active">
                                    @else
                                    <div class="carousel-item">
                                    @endif   
                                        <img class="d-block w-100" src="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" alt="">
                                    </div>
                                @endforeach 
                            @else
                                @foreach($trip['images'] as $image)
                                    @if($loop->first)
                                    <div class="carousel-item active">
                                    @else
                                    <div class="carousel-item">
                                    @endif   
                                        <img class="d-block w-100" src="{{ $image->image != '' ? url($image->image) : asset('/img/landing.png') }}" alt="">
                                    </div>
                                @endforeach  
                            @endif      
                            </div>
                            <a class="carousel-control-prev" href="#image-lightbox-carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#image-lightbox-carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

@section('scripts')

@endsection
