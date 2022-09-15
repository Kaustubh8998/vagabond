<div class="testmonials">
    <div id="carouselTestimonialIndicators{{ isset($second) ? $second : '' }}" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">   
            @foreach($testimonials as $testimonial)
                @if($loop->first)
                <div class="carousel-item active">
                @else
                <div class="carousel-item">
                @endif    
                    <div class="testmonial-holder">
                        <!-- <div class="img-holder">
                            <img src="{{ $testimonial->image != '' ? url($testimonial->image) : 'https://via.placeholder.com/80' }}" alt="">
                        </div> -->
                        <div class="text-holding-device">
                            <i>
                                <span>"</span>
                                {{ strlen($testimonial->text) > 180 ? substr($testimonial->text,0, 180)."..." : $testimonial->text }}
                                <span>"</span>
                            </i>
                            <h4>- {{ $testimonial->name }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselTestimonialIndicators{{ isset($second) ? $second : '' }}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimonialIndicators{{ isset($second) ? $second : '' }}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>  

