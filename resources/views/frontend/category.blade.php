@extends('frontend.includes.app')
@section('title', $category->meta_title)
@section('media_title', $category->media_title)
@section('description', $category->meta_description)
@section('keywords', $category->meta_keywords)
@section('content')

<div>
    <div class="container-fluid p-0">
        <img src="{{ url($category->banner) }}" alt="" class="banner_image">
        <div class="d-flex justify-content-center category-heading mt-md-5 mt-2">
            <h1>{{ $category->name }}</h1>
        </div>
    </div>
    <div class="container">

        <div class="d-flex justify-content-center">
            <p class="description">{{ $category->description }}</p>
        </div>
        
        @if($category->icon != '')
        <div class="row">
            <div class="col-sm-4 offset-sm-4 col-12 offset-0 m-auto text-center">
                <img src="{{ url($category->icon) }}" alt="" class="category_image">
            </div>
        </div>
        @endif

        <div class="container">
            <div class="d-flex justify-content-center category-heading mt-2">
                <h1>Experiences</h1>
            </div>
            <div class="row trip-item">
                @foreach($trips as $trip)
                    @include('frontend.includes.components.tripcard')
                @endforeach 
            </div>
        </div>
        
        @if(count($category['images']))
        <div class="container">
            <div class="d-flex justify-content-center category-heading mt-2">
                <h1>Gallery</h1>
            </div>
            <div class="row trip-item">
                @include('frontend.includes.components.carousel')
            </div>
        </div>
        @endif

    </div>


    @if(count($artists))
    <div class="container-fluid my-5 pt-3 pb-5 brown keep-it-in"> 
        <div class="container">
            <div class="d-flex justify-content-center category-heading mt-2">
                <h1>Featured Artists</h1>
            </div>
            <div class="row trip-item">
                @include('frontend.includes.components.artists')
            </div>
        </div>
    </div>
    @endif

    @if(count($testimonials))
    <div class="container-fluid p-0 white keep-it-in">    

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 offset-lg-1 col-5 offset-0">    
                    <div class="d-flex align-items-center">
                        <img class="side-graphic" src="{{ asset('/img/Expression_2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-7 category-heading d-flex justify-content-sm-center justify-content-end">
                    <h1 class="she-said pb-0">That's what s(he) said</h1>
                </div>
                
                <div class="col-sm-12">
                    @include('frontend.includes.components.testimonials')
                </div>
                
            </div>
        </div>

    </div>
    @endif
    @if($category->insta != '')
    <div class="container">
        <div class="d-flex justify-content-center category-heading mt-2">
            <h1>Follow Us</h1>
        </div>
        <div class="row trip-item center" >
            <a href='{{ $category->insta }}' target="_blank" class="floating-insta-Icon"><img src="{{ asset('img/instagram_Icon.png') }}"/></a>
        </div>
    </div>
    @endif
    
</div>

@endsection

@section('scripts')
	
@endsection



