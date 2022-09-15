@extends('layouts.app')
@section('title', 'Testimonial - Edit')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::model($testimonial, ['route' => ['testimonials.update', $testimonial->id], 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@method('PATCH')
					@include('admin.testimonial.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection