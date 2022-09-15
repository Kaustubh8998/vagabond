@extends('frontend.includes.app')

@section('title', 'VagaFam | Loyalty Program')

@section('description')
You are eligible to receive discounts as an extended family if you have joined us on at least 3 trips or experiences. You are a part of our VagaFam
@endsection

@section('content')

<div class="vagafam-page">
    <div class="container-fluid p-0">
        <img src="{{ asset('/img/vagafam_full.jpg') }}" alt="" class="banner_image">
    </div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center category-heading pt-3 pb-3">
            <h1><img src="{{ asset('/img/VagafamFontFinal.png') }}" alt="vagafam" width="200"></h1>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 style='color:#b5904a'>What is Vagafam?</h3>
                <p class="description text-justify pt-0">
                It is essentially a thankyou. From us to you. You're part of an extended family that will receive exclusive discounts on almost every single thing we do. Be it a trip, trek, camp or even merchandise. You're special and we want you to know that.
                </p>
                <h3 style='color:#b5904a'>Who is Vagafam?</h3>
                <p class="description text-justify pt-0">
                    Anyone who has joined us on at least 3 experiences qualifies as part of this family.
                    <br/>
                    Just fill-up the form below and we'll make it official :)
                </p>



            
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-1">
                    <div class="card-body">
                        {!! Form::open(['route' => 'vagafam.form']) !!}
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
                                            {!! Form::text('number', null, ['placeholder' => 'CONTACT NUMBER','class' => 'input--style-1', 'id' => 'number']) !!}
                                            @if($errors->has('number'))
                                            <p class="form-error">{{ $errors->first('number') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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
                                            {!! Form::textarea('vaga_exp', null, ['rows' => 3, 'placeholder' => 'LIST YOUR VAGABOND EXPERIENCES','class' => 'input--style-1', 'id' => 'vaga_exp']) !!}
                                            @if($errors->has('vaga_exp'))
                                            <p class="form-error">{{ $errors->first('vaga_exp') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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



