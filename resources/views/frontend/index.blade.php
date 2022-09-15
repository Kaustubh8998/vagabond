@extends('frontend.includes.app')

@section('title', 'Home Page')

@section('description')
Vagabond Experiences is a travel agency in Mumbai and a one-stop destination for your backpacking, trekking, camping, weekend getaways in India
@endsection

@section('loader')

<div class="wrapper-layer">
    <div style="text-align:center;">
    <img class="m-md-auto logo-style-two" src="{{ asset('/img/vagalogo.png') }}" alt="">
    <p style="padding:25px; color: #ddd; text-align:center;">Loading...</p>
    </div>
</div>

@endsection

@section('content')

@include('frontend.includes.components.landing')

<div class="container-fluid p-0 white">
    <div class="container">
        <div class="row align-items-center mt-4">
            <div class="col-lg-12 col-12 mt-4 category-heading">
                <h2 class="pb-0">Who We Are</h2>
            </div>
            <div class="col-lg-4 d-none d-lg-block">    
                <div class="d-flex justify-content-center align-items-center">
                    <img class="right-side-graphic" src="{{ asset('/img/Guitar_full.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <p class="description text-justify pt-0">
                    We are a company dedicated to making travelling a truly authentic and exciting experience. Be it hiking in the Sahyadris, backpacking through the Himalayas or camping paired with the best musical talent from the city. 
                    We pay special attention to creating comfortable social spaces; bringing like-minded people together and catalysing the birth of beautiful new ideas. Our <a href="{{ route('aboutus') }}#team">Experience Managers</a> are trained not just in first-aid and hiking guidance, but in making sure you have a wonderful time and definitely make some new friends.
                </p>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid p-0 white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mt-4 category-heading pb-4">
                <h2 class="pb-0">Experiences</h2>
            </div>
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6">
                <div class="category_box category-box-identifier" style="background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4) ), url({{ asset($category->thumbnail) }})">
                    <!-- @if($category->icon != '')
                        <img src="{{ url($category->icon) }}" alt="" class="" width="100px">
                    @endif -->
                    <h1>{{ $category->name }}</h1>
                    <p>{{ $category->tiny_description }}</p>
                    <a class="read-more" href="{{ route('category-profile', $category->slug) }}">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 office-holds">
                <div class="pt-4">
                    <h1>Office Outdoors</h1>
                    <p>We curate and design custom experiences for offices and private groups with a key 
focus on team-building and working together. These trips are meant to be equal parts 
training and fun. Drop us an enquiry and find out for yourself!</p>
                    <a class="read-more read-more-add" href="{{ route('office-outdoors') }}">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                <img class="office-outdoors-img" src="{{ asset('/img/van.png') }}" alt="">
            </div>
        </div>
    </div>

</div>



<div class="container-fluid p-0 white">

    <div class="container mt-sm-0">

        <div class="row align-items-center">
            <div class="col-lg-12 col-12 mt-4 category-heading pb-4">
                <a href="{{ route('experiences') }}"><h2 class="pb-0">Up Next</h2></a>
            </div>
            <!-- <div class="col-md-4 col-7">    
                <div class="d-flex justify-content-center align-items-center">
                    <img class="bus-graphic" src="{{ asset('/img/van.png') }}" alt="">
                </div>
            </div> -->

        </div>

    </div>

    <div class="container desktop">
        <div class="row justify-content-center trip-holder">
            @foreach($trips as $trip)
                @include('frontend.includes.components.tripcard')
            @endforeach
            <div class="col-sm-12 text-center">
                <a href="{{ route('experiences') }}" class="read-more read-more-add m-4">View More</a>
            </div>       
        </div>
    </div>

    <div class="container-fluid mobile mt-3">
        <div id="carouselTripIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">   
                @foreach($trips as $trip)
                    @if($loop->first)
                    <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif    
                        
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1">
                        @include('frontend.includes.components.tripcard')
                        </div>
                    </div>

                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselTripIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTripIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mb-2">
            <div class="col-sm-12 text-right">
                <a href="{{ route('experiences') }}" class="read-more read-more-add m-0 my-3">View More</a>
            </div>  
        </div>
    </div>  

</div>

<div class="container-fluid p-0 white keep-it-in">    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 offset-lg-1 col-5 offset-0">    
                <div class="d-flex align-items-center">
                    <img class="side-graphic" src="{{ asset('/img/Expression_2.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-7 category-heading d-flex justify-content-sm-center justify-content-end">
                <h2 class="she-said pb-0">That's what s(he) said</h2>
            </div>
            
            <div class="col-sm-12">
                @include('frontend.includes.components.testimonials')
            </div>
            
        </div>
    </div>

</div> 

@endsection

@section('scripts')

    <script>

    $(document).ready(function() {
        // Get an array of all element heights
        var elementHeights = $('.category-box-identifier').map(function() {
            return $(this).height();
        }).get();

        // Math.max takes a variable number of arguments
        // `apply` is equivalent to passing each height as an argument
        var maxHeight = Math.max.apply(null, elementHeights);

        // Set each height to the max height
        $('.category-box-identifier').height(maxHeight);
    });
     
        $( window ).on("load", function() { 
            $(".wrapper-layer").fadeOut("slow");
        });

    </script>
        
@endsection