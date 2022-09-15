@extends('frontend.includes.app')

@section('title', 'Office Outdoors | Corporate Events')

@section('description')
Extending our experiences to the office outdoors- some amazing team building activities for corporate employees and private groups outing
@endsection

@section('content')

<div>
    <div class="container-fluid p-0">
        <img src="{{ asset('/img/Corporate.png') }}" alt="" class="banner_image">
    </div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center category-heading pt-3 pb-3">
            <h1>Office Outdoors</h1>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p class="description text-justify pt-0">
                Since its inception, Vagabond has been curating a range of outdoor experiences for people, with one aim, and that is to build a community. Over the years people from this community have approached us to curate similar or completely unique experiences for either their workplace or a private group of people. After having worked with over 40 such groups, we at Vagabond have decided to launch Office Outdoors. 
                    <br/><br/>
                Office Outdoors will be focused on experiences for private groups, off-sites, Team outings, and seminars. The idea is to take you outside the workplace and build a sense of community in a different environment. We do this by taking you to scenic locations, engage you in music, games, activities and a whole lot of good food with of course a touch of the Vaga-Experience.
                    <br><br>
                In the past, we’ve put together experiences such as:
                </p>
                <ul>
                    <li>Scavenger hunts</li>
                    <li>Harry Potter themed events and Quiz</li>
                    <li>Wilderness Survival camps</li>
                    <li>Capture the fort</li>
                    <li>Sailing lessons and racing</li>
                    <li>A tribal village experience</li>
                    <li>Unique Team Building games and activities</li>
                </ul>
                <br>
                If you’d like us to take your office outdoors, drop in a query below and we’ll make it happen!
            </div>
            <div class="col-lg-4">    
                <div class="d-flex justify-content-center align-items-center">
                    <img class="right-side-graphic" src="{{ asset('/img/Tent.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center category-heading pt-3 pb-3">
            <h1>Past Clients</h1>
        </div>
    </div>
    
    <div id="companies" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#companies" data-slide-to="0" class="active"></li>          
            <li data-target="#companies" data-slide-to="1"></li>
        </ol>     --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/001.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/002.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/003.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/004.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/005.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-8">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/006.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="containerr">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-12 col-12">
                            <div class="company-logo-holder text-center">
                                <img src="{{ asset('/img/logos/007.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <a class="carousel-control-prev" href="#companies" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#companies" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center category-heading pt-3 pb-3">
            <h1>Get In Touch</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 pb-3 mb-3">
                <div class="card card-1">
                    <div class="card-body">
                        {!! Form::open(['route' => 'officeoutdoors.form']) !!}
                            <div class="container">
                                <div class="row">
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
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            {!! Form::text('company_name', null, ['placeholder' => 'COMPANY NAME','class' => 'input--style-1', 'id' => 'company_name']) !!}
                                            @if($errors->has('company_name'))
                                            <p class="form-error">{{ $errors->first('company_name') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            {!! Form::text('group_size', null, ['placeholder' => 'GROUP SIZE','class' => 'input--style-1', 'id' => 'group_size']) !!}
                                            @if($errors->has('group_size'))
                                            <p class="form-error">{{ $errors->first('group_size') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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
	
@endsection



