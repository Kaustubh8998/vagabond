@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'login']) !!}
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="exampleInputEmail">Email Id</label>
						{!! Form::email('email', 'admin@test.com', array('placeholder' => 'abc@mail.com','class' => 'form-control new-form-control', 'id' => 'email', Input::old('email'))) !!}
						@if($errors->has('email'))
						<p class="form-error">{{ $errors->first('email') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputPassword">Password</label>
						{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control new-form-control', 'id' => 'password')) !!}
						@if($errors->has('password'))
						<p class="form-error">{{ $errors->first('password') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
						@endif
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection