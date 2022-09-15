<div class="col-lg-4 col-md-6 p-0 cards-really">  
    <div class="trip-card">
        <img src="{{ url($trip['image']) }}" class="tripImage">
        @if($trip['event_date'])
        <a href="{{ route('trip-profile', [$trip['slug'], Carbon\Carbon::parse($trip['event_date'])->format('d-m-Y')]) }}">
        @else
        <a href="{{ route('trip-profile', $trip['slug']) }}">
        @endif
            <div class="trip-info">
                <div>
                    <!-- <div class="d-flex justify-content-between trip-details trip-icon">
                        <img src="{{ asset('/svg/compass.svg') }}" alt="" class="svgSwag">
                    </div> -->

                    <div class="d-flex flex-column justify-content-between">
                        <div class="trip-hold trip-category-name">{{ $trip['category_name'] }}</div>
                        <div class="trip-hold">{{ $trip['name'] }}</div>
                    </div>
                    
                    @if($trip['event_date'])
                    <div class="d-flex justify-content-between trip-details trip-pricetag">
                        <div class="trip-price">Rs. {{ isset($trip['date_cost']) ? $trip['date_cost'] : $trip['cost'] }}</div>
                    </div>
                    @endif

                    <!-- <a href="{{ route('trip-profile', $trip['slug']) }}" class="btn btn-default trip-btn">More..</a> -->

                </div>
            </div> 
        </a>
    </div>  
    @if($trip['event_date'])
    <a href="{{ route('trip-profile', [$trip['slug'], Carbon\Carbon::parse($trip['event_date'])->format('d-m-Y')]) }}">
    @else
    <a href="{{ route('trip-profile', $trip['slug']) }}">
    @endif
        <div class="full-trip">
            <div class="d-flex trip-details">
                <p class="trip-description">{{ strlen($trip['tiny_description']) > 120 ? substr($trip['tiny_description'], 0, 120)."..." : $trip['tiny_description'] }}</p>
            </div>
            @if($trip['event_date'])
            <div class="d-flex align-items-center trip-details">
                <i class="fas fa-calendar-day"></i> <p class="trip-date">{{ $trip['event_date'] }}</p>
            </div>
            @endif
        </div>
    </a>
</div>
