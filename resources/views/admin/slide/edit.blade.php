@extends('layouts.app')
@section('title', 'Slide - Edit')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::model($slide, ['route' => ['slides.update', $slide->id], 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@method('PATCH')
					@include('admin.slide.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection