@extends('frontend.includes.app')

@section('title', 'Upcoming Tours | Weekend Getaways')

@section('description')
Check out our upcoming trekking, backpacking, and camping trips around Maharashtra, Himachal, and Karnataka for adventurous and fun weekend
@endsection

@section('content')

@include('frontend.includes.components.landing')

<div id="search-bar"></div>
<div class="grey-page spacer-top" id="search-bars">
    <div class="container-fluid p-0 pb-4">
        <div class="d-flex justify-content-center category-heading">
            <h1>Upcoming</h1>
        </div>
        <div class="d-flex justify-content-center trips-heading">
            <form class="mb-3 mx-3" id="searchForm">  
                <div class="row">  
                    <div class="col-sm-3 mb-3">
                        <input type="text" placeholder="Where to ?" name="name" id="name" class="form-control" value="{{ $name }}">
                    </div>
                    <div class="col-sm-3 mb-3">
                        {!! Form::select('month', [
                                '01' => 'Jan',
                                '02' => 'Feb',
                                '03' => 'Mar',
                                '04' => 'Apr',
                                '05' => 'May',
                                '06' => 'Jun',
                                '07' => 'Jul',
                                '08' => 'Aug',
                                '09' => 'Sep',
                                '10' => 'Oct',
                                '11' => 'Nov',
                                '12' => 'Dec'
                            ], $month, array('placeholder' => 'When','class' => 'custom-select', 'id' => 'month')) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        {!! Form::select('category_id', $categories->pluck('name', 'id'), $category_id, array('placeholder' => 'What','class' => 'custom-select', 'id' => 'category_id')) !!}
                    </div>
                    {{ Form::hidden('page', $page, ['id' => 'page']) }}
                    <div class="col-sm-3 mb-3">
                        <button id="searchSubmit" class="read-more read-more-add my-btn search" type="submit">Search</button>
                    </div>
                </div>
            </form>    
        </div>
    </div>
    <div class="container-fluid greyed-out border-up" id="trip-parent">
        <div class="container">
            <div class="row mt-4" id="trips-holder">
                    
            </div>
            <div class="smokescreen"><!-- Place at bottom of page --></div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

<script>

    function populateTrips() {

        $("body").addClass("loading");

        var name = $('#name').val();
        
        var category_id = $('#category_id').val();

        var month = $('#month').val();

        var page = $('#page').val();

        $.ajax({
            url: "{{ route('trips') }}",
            type: "POST",
            data: {
                name: name,
                category_id: category_id,
                month: month,
                page: page
            },
            success: function(result) {
                if(result.status == 'Success') {
                    $('#trips-holder').html(result.trips);
                } else if(result.status == 'Error' && result.error == 'Too Many'){
                    
                }
                $("body").removeClass("loading");
            }
        });

    }

    $(document).ready(function() {

        populateTrips();

        // Scroll To Search
        $('html, body').animate({
            scrollTop: $('#trip-parent').offset().top-40
        }, 'slow');

    });

    $('body').on('submit', '#searchForm', function(e) {

        populateTrips();
        
        e.preventDefault();
        
    });

</script>
	
@endsection



