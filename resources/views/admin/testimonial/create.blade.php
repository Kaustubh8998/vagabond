@extends('layouts.app')
@section('title', 'Testimonials - Create')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'testimonials.store', 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@include('admin.testimonial.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection