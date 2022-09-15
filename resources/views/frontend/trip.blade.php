@extends('frontend.includes.app')

@section('title', $trip->meta_title)
@section('media_title', $trip->media_title)
@section('keywords', $trip->meta_keywords)
@section('description', $trip->meta_description)

@section('content')

<div>
    <div class="container-fluid p-0">
        <img src="{{ url($trip->banner) }}" alt="{{ $trip->name }}" class="banner_image">
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-12">

                <!-- <h2 class="heading">{{ $trip->name }}</h2> -->
                <div class="trip-heading">
                    <h1 class="pb-0">{{ $trip->name }}</h1>
                </div>
                <p class="category">{{ $trip['category']->name }}</p>

                <div class="d-block d-lg-none desktop text-left">

                    <div class="row">
                        @if(isset($details))
                        <div class="col-sm-6">
                            <p class="costs text-left p-0"><img class="touch-of-money" src="{{ asset('/svg/money.svg') }}" alt=""> Rs. {!! $details->cost !!}</p>
                            @if($details->diff_cost_one > 0)
                            <p class="costs text-left p-0"><img class="touch-of-money" src="{{ asset('/svg/money.svg') }}" alt=""> Rs. {{ $details->diff_cost_one }} ({{ $details->diff_cost_one_label }})</p>
                            @endif
                            @if($details->diff_cost_two > 0)
                            <p class="costs text-left p-0"><img class="touch-of-money" src="{{ asset('/svg/money.svg') }}" alt=""> Rs. {{ $details->diff_cost_two }} ({{ $details->diff_cost_two_label }})</p>
                            @endif
                            @if($details->diff_cost_three > 0)
                            <p class="costs text-left p-0"><img class="touch-of-money" src="{{ asset('/svg/money.svg') }}" alt=""> Rs. {{ $details->diff_cost_three }} ({{ $details->diff_cost_three_label }})</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <p class="duration text-left p-0"><img src="{{ asset('/svg/day.svg') }}" alt=""> {{ $trip->duration }}</p>
                            
                            <p class="dates text-left p-0"><img class="touch-of-class" src="{{ asset('/svg/calendar.svg') }}" alt=""> {{ $details->event_end_date ? $details->event_date.' - '.$details->event_end_date : $details->event_date }}</p>
                        </div>
                        @else
                        <div class="col-sm-6">
                            <p class="duration text-left p-0 m-0"><img src="{{ asset('/svg/day.svg') }}" alt=""> {{ $trip->duration }}</p>
                            <p class="duration text-left p-1 m-1 pb-2 pt-3">
                                @if(count($trip['upcoming']))
                                <b>Click on a date for further info</b>
                                @endif
                            </p>
                            @foreach($trip['upcoming'] as $date)
                            <a class="special" href="{{ route('trip-profile', [$trip['slug'], Carbon\Carbon::parse($date->event_date)->format('d-m-Y')]) }}">
                                <p class="dates text-left p-0"><img class="touch-of-class" src="{{ asset('/svg/calendar.svg') }}" alt=""> {{ $date->event_end_date ? $date->event_date.' - '.$date->event_end_date : $date->event_date }}</p>
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>

                </div>

                <div class="diff-description">{!! $trip->description !!}</div>
                
                @if($trip->location != '')
                <p class="bullet">Location</p>
                <p class="diff-description">{{ $trip->location }}</p>
                @endif

                @if($trip->difficulty_level != '')
                <p class="bullet">Difficulty</p>
                <p class="diff-description">{{ $trip->difficulty_level }}</p>
                @endif
                
                @if($trip->sleeping_bag_rental != 0)
                <p class="bullet">Sleeping Bag Rental</p>
                <p class="diff-description">{{ $trip->sleeping_bag_rental }}</p>
                @endif

                @if(isset($details))

                    @include('frontend.includes.components.details')

                @endif
                
                @if(count($trip['images']))
                <div>
                    <div class="d-flex justify-content-center category-heading mt-2">
                        <h2>Gallery</h2>
                    </div>
                        @include('frontend.includes.components.carousel')
                   
                </div>
                @endif

                @if(count($testimonials))    
                <div class="container-fluid p-0 white d-none d-lg-block keep-it-in mt-3">    

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 offset-lg-0 col-5 offset-0">    
                                <div class="d-flex align-items-center">
                                    <img class="side-graphic" src="{{ asset('/img/Expression_2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-7 category-heading d-flex justify-content-sm-center justify-content-end">
                                <h2 class="she-said pb-0">That's what s(he) said</h2>
                            </div>
                            
                            <div class="col-sm-12">
                                @include('frontend.includes.components.testimonials')
                            </div>
                            
                        </div>
                    </div>

                </div> 
                @endif

                <div class="container d-none d-lg-block">
                    <div class="d-flex justify-content-center category-heading mt-2">
                        <h1>Enquiry Form</h1>
                    </div>

                    <div class="d-flex justify-content-center category-heading px-3 pb-3">
                        <p>In case you'd like us to get in touch with you, fill out the form below and we'll reach out to you</p>
                    </div>
                    @include('frontend.includes.components.inquiry')
                </div>

                

                @if($trip['category']->insta != '')
                <div class="container d-none d-lg-block">
                    <div class="d-flex justify-content-center category-heading mt-2">
                        <h1>Follow Us</h1>
                    </div>
                    <div class="row trip-item center" >
                        <a href='{{ $trip['category']->insta }}' target="_blank" class="floating-insta-Icon"><img src="{{ asset('img/instagram_Icon.png') }}"/></a>
                    </div>
                </div>
                @endif

            </div>
            <div class="col-lg-4 d-none d-lg-block desktop">

                <div class="price-info-holder">

                    @if(isset($details))

                        <h3>Rs. {{ $details->cost }}</h3>

                        
                        <div class="dates">
                            @if($details->diff_cost_one > 0)
                            <p>{{ $details->diff_cost_one_label }}</p>
                            <p>Rs. {{ $details->diff_cost_one }}</p>
                            @endif
                            @if($details->diff_cost_two > 0)
                            <p>{{ $details->diff_cost_two_label }}</p>
                            <p>Rs. {{ $details->diff_cost_two }}</p>
                            @endif
                            @if($details->diff_cost_three > 0)
                            <p>{{ $details->diff_cost_three_label }}</p>
                            <p>Rs. {{ $details->diff_cost_three }}</p>
                            @endif
                            @if($details->diff_cost_one > 0 || $details->diff_cost_two > 0 || $details->diff_cost_three > 0)
                            <p><br></p>
                            @endif
                            <img src="{{ asset('/svg/calendar.svg') }}" alt="">
                            
                            <p>{{ $details->event_end_date ? $details->event_date.' - '.$details->event_end_date : $details->event_date }}</p>
                            
                        </div>

                    @else

                        <h3><img src="{{ asset('/svg/calendar.svg') }}" alt=""></h3>
                    
                        <div class="dates" style="padding:10px 0;">  
                        
                            @if(count($trip['upcoming']))
                            <b class="pad-them-bottom">Click on a date for further info</b>
                            @endif

                        </div>

                        <div class="dates" style="padding:0 0 10px;">      
                            
                            @foreach($trip['upcoming'] as $date)
                            <a class="special" href="{{ route('trip-profile', [$trip['slug'], Carbon\Carbon::parse($date->event_date)->format('d-m-Y')]) }}"><p>{{ $date->event_end_date ? $date->event_date.' - '.$date->event_end_date : $date->event_date }}</p></a>
                            @if ($loop->last)
                            @else
                            <hr style="width:50px; margin:13px auto 5px;"> 
                            @endif
                            @endforeach
                        </div>

                    @endif

                    
                    

                    <p class="duration" style="padding:20px 0 10px"><img src="{{ asset('/svg/day.svg') }}" alt=""> {{ $trip->duration }}</p>
                    {{-- @if(isset($details) && $details->payment_link != '')
                    <a href="{{ $details->payment_link }}" target="_blank" class="btn btn-info book-btn">Book Now</a>
                    {!! $details->payment_link !!}
                    @endif --}}

                </div>
            </div>
        </div>

    </div>
    @if(isset($details) && $details->payment_link != '')
        {!! $details->payment_link !!}
    @endif

    @if(count($testimonials))    
    <div class="container-fluid p-0 white d-block d-lg-none keep-it-in mt-3">    

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
                    @include('frontend.includes.components.testimonials', ['second' => '1'])
                </div>
                
            </div>
        </div>

    </div> 
    @endif

    <div class="container d-block d-lg-none">
        <div class="d-flex justify-content-center category-heading mt-2">
            <h1>Enquiry Form</h1>
        </div>
        <div class="d-flex justify-content-center category-heading px-3 pb-3">
            <p>In case you'd like us to get in touch with you, fill out the form below and we'll reach out to you</p>
        </div>
        @include('frontend.includes.components.inquiry')
    </div>

    @if($trip['category']->insta != '')
    <div class="container d-block d-lg-none">
        <div class="d-flex justify-content-center category-heading mt-2">
            <h1>Follow Us</h1>
        </div>
        <div class="row trip-item center" >
            <a href='{{ $trip['category']->insta }}' target="_blank" class="floating-insta-Icon"><img src="{{ asset('img/instagram_Icon.png') }}"/></a>
        </div>
    </div>
    @endif

    {{-- <div class="purchase-btn d-block d-lg-none">
        @if(isset($details) && $details->payment_link != '')
        {!! $details->payment_link !!}
        @endif
    </div> --}}

</div>

@endsection

@section('scripts')

<script>
$('.carousel').carousel({
  interval: 4000
});
</script>
	
@endsection



