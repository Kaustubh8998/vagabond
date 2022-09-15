@extends('layouts.app')
@section('title', 'Slides - Create')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'slides.store', 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@include('admin.slide.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection