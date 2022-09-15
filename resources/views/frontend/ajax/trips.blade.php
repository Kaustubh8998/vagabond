@foreach($trips as $trip)
    @include('frontend.includes.components.tripcard')
@endforeach 

<div class="col-12 justify-content-center">
    {{ $trips->render("pagination.custom") }}
</div>

<script type="text/javascript">
    $(document).off('click', '.pagination a').on('click', '.pagination a', function(event) {
        event.preventDefault();
        if ($(this).attr('href') != '#') {

            var string = $(this).attr('href');
            var direct = string + "{!! $input !!}";

            $("body").addClass("loading");

            $.post(direct, function(result) {

                if(result.status == 'Success') {
                    $('#trips-holder').html(result.trips);
                } else if(result.status == 'Error' && result.error == 'Too Many'){
                    
                }

                $("body").removeClass("loading");
                goToByScroll('search-bar');

            });

        }
    });
</script> 