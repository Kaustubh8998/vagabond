@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'change-password']) !!}
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="exampleInputPassword">Password</label>
						{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control new-form-control', 'id' => 'password')) !!}
						@if($errors->has('password'))
						<p class="form-error">{{ $errors->first('password') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputPasswordAgain">Password Again</label>
						{!! Form::password('password_again', array('placeholder' => 'Password Again','class' => 'form-control new-form-control', 'id' => 'password_again')) !!}
						@if($errors->has('password_again'))
						<p class="form-error">{{ $errors->first('password_again') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
						@endif
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection