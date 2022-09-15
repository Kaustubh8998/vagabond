@extends('frontend.includes.app')

@section('title', 'Contact us | Get in touch | Learn more')

@section('description')
Need assistance to plan your trips and treks? Contact us at 1 - Labh Plot 31-A, Pushtikar CHS LTD, Patel Est Rd, Jogeshwari West, Mumbai 400 012
@endsection

@section('content')

<div>
    <!-- <div class="container-fluid p-0">
        <img src="{{ asset('/img/Intro-Bg.jpg') }}" alt="" class="banner_image">
    </div> -->

    <div class="emptyStrip">
        
    </div>
    
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center category-heading">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                <script>(function () {
                var setting = {"height":300, "width":"100%","zoom":17,"queryString":"Vagabond Experiences, Patel Estate Road, B R Nagar, Jogeshwari, Mumbai, Maharashtra, India","place_id":"ChIJl0qsjjK25zsRrvP0Q5qiPvg","satellite":false,"centerCoord":[19.14086020551173,72.84902890000001],"cid":"0xf83ea29a43f4f3ae","cityUrl":"/india/andheri-154744","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"93095"};
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=93095';
                s.async = true;
                s.onload = function (e) {
                    window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
                })();</script>
                <a href="https://1map.com/map-embed?embed_id=93095">1map.com</a>
                </div>
            </div>
            <div class="col-md-6 contact">
                <hr class="d-block d-md-none"/>
                <ul class="nostyle contact-holder">
                    <li class="flexIt">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>1 - Labh Plot 31-A, Pushtikar CHS LTD,<br/>Patel Est Rd, Jogeshwari West,<br>Mumbai 400 012.</p><p>
                    </p></li>
                    <li class="flexIt">
                        <a href="https://wa.me/917400054929" target="_blank" class="coloor-black"><i class="fab fa-whatsapp-square" style="font-size: 25px;"></i></a>
                        <p><a class="colooor" href="tel:+917400054929" target="_blank">+91 7400054929 </a></p>
                    </li>
                    <li class="flexIt">
                        <i class="fas fa-phone"></i>
                        <p><a class="colooor" href="tel:+919819765950" target="_blank">+91 9819765950</a></p>
                    </li>
                    <li class="flexIt">
                        <i class="far fa-envelope-open"></i>
                        <p><a class="colooor" href="mailto:contact@vagabondexperiences.com">contact@vagabondexperiences.com</a></p>
                    </li>
                </ul>
                <hr>
                <h4>Follow Us</h4>
                <ul class="nostyle social-icon-holder">
                    <li>
                        <a href="https://www.facebook.com/vagabondexperiences" target="_blank" class="flexIt coloor-black">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/vagabondexperiences" target="_blank" class="flexIt coloor-black">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC0witQA0PjvH8ZCf2FLqJsg" class="flexIt coloor-black" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12"><br/><br/><hr/></div>
        </div>
    </div>
    <div class="container">
            <div class="d-flex justify-content-center category-heading pt-3 pb-3">
                <h1>Get In Touch</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 pb-3 mb-3">
                    <div class="card card-1">
                        <div class="card-body">
                            {!! Form::open(['route' => 'contact.form']) !!}
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">      
                                            <div class="row d-flex justify-content-start">
                                                <label for="social-entrepreneur" class="radio col-md" style="width: 50%;">
                                                    {{ Form::radio('type', 'Inquiry', 1, ['class' => 'hidden', 'id'=>'type', 'style' => 'width: 20px; padding-right: 3px;']) }}
                                                    <span class="label input--style-1" style="font-size: 14px; font-weight: 'Itim', cursive; text-transform: uppercase; color: #adadad;">&nbsp;Inquiry</span>
                                                </label>
                                                <label for="other" class="radio col-md" style="width: 50%;">
                                                    {{ Form::radio('type', 'Feedback', null, ['class' => 'hidden', 'id'=>'type', 'style' => 'width: 20px; padding-right: 3px;']) }}
                                                    <span class="label input--style-1" style="font-size: 14px; font-weight: 'Itim', cursive; text-transform: uppercase; color: #adadad;">&nbsp;Feedback</span>
                                                </label>
                                            </div>
                                            @if($errors->has('type'))
                                            <p class="form-error">{{ $errors->first('type') }}<span class="glyphicon glyphicon-remove-circle"></span> </p>
                                            @endif
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input-group">
                                                {!! Form::text('name', null, ['placeholder' => 'NAME','class' => 'input--style-1', 'id' => 'name']) !!}
                                                @if($errors->has('name'))
                                                <p class="form-error">{{ $errors->first('name') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                {!! Form::email('email', null, ['placeholder' => 'EMAIL ID','class' => 'input--style-1', 'id' => 'email']) !!}
                                                @if($errors->has('email'))
                                                <p class="form-error">{{ $errors->first('email') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                {!! Form::text('number', null, ['placeholder' => 'CONTACT NUMBER','class' => 'input--style-1', 'id' => 'number']) !!}
                                                @if($errors->has('number'))
                                                <p class="form-error">{{ $errors->first('number') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 feedback">
                                            <div class="input-group">
                                                {!! Form::text('experience', null, ['placeholder' => 'EXPERIENCE YOU WERE PART OF','class' => 'input--style-1', 'id' => 'experience']) !!}
                                                @if($errors->has('experience'))
                                                <p class="form-error">{{ $errors->first('experience') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 feedback">
                                            <div class="input-group">
                                                {!! Form::text('date_of_trip', null, ['placeholder' => 'TRIP DATE','class' => 'input--style-1', 'id' => 'date_of_trip']) !!}
                                                @if($errors->has('date_of_trip'))
                                                <p class="form-error">{{ $errors->first('date_of_trip') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                {!! Form::textarea('comments', null, ['rows' => 3, 'placeholder' => 'FEEDBACK','class' => 'input--style-1', 'id' => 'feedback']) !!}
                                                @if($errors->has('comments'))
                                                <p class="form-error">{{ $errors->first('comments') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 align-self-center text-center">
                                            <button class="btn btn-success" type="submit">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

    $( document ).ready(function() {

        if($("input[name='type']:checked").val() === 'Inquiry') {
            $('.feedback').hide(); 
            $('#feedback').attr("placeholder", "INQUIRY");
        } else if($("input[name='type']:checked").val() === 'Feedback'){
            $('.feedback').show(); 
            $('#feedback').attr("placeholder", "FEEDBACK");
        } else {
            $('.feedback').hide();
            $('#feedback').attr("placeholder", "INQUIRY");
        }   

    });
    
    $(function() {
        $("input[name='type']").change(function(){
        
            if($("input[name='type']:checked").val() === 'Inquiry') {
                $('.feedback').hide(); 
                $('#feedback').attr("placeholder", "INQUIRY");
            } else if($("input[name='type']:checked").val() === 'Feedback'){
                $('.feedback').show(); 
                $('#feedback').attr("placeholder", "FEEDBACK");
            } else {
                $('.feedback').hide();
                $('#feedback').attr("placeholder", "INQUIRY");
            }   
        
        });
    });

</script>

@endsection