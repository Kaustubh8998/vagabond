@extends('layouts.app')
@section('title', 'Categories - Create')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'category.store', 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@include('admin.category.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection