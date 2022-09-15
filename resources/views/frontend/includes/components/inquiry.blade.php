<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-1">
            <div class="card-body">
                {!! Form::open(['route' => 'contact.form']) !!}
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="input-group">
                                    {!! Form::text('name', null, ['placeholder' => 'FULL NAME','class' => 'input--style-1', 'id' => 'name']) !!}
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
                                    {!! Form::textarea('comments', null, ['rows' => 3, 'placeholder' => 'INQUIRY','class' => 'input--style-1', 'id' => 'comments']) !!}
                                    @if($errors->has('comments'))
                                    <p class="form-error">{{ $errors->first('comments') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
                                    @endif
                                </div>
                            </div>
                            {{ Form::hidden('item_id', $trip->id) }}
                            {{ Form::hidden('type', 'Inquiry') }}
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