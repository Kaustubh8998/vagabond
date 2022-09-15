@extends('layouts.app')
@section('title', 'Categories - Edit')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::model($category, ['route' => ['category.update', $category->id], 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-4">
					@method('PATCH')
					@include('admin.category.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection