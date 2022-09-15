@extends('layouts.app')
@section('title', 'Categories')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Categories <a href="{{ route('category.create') }}" style="font-size: 18px;">Add New</a></h3>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Thumbnail</th>
							<th>Banner</th>
							<th>Description</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					@foreach($categories as $category) 
						<tr>
							<td><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></td>
							<td><img src="{{ url($category->thumbnail) }}" width="70"></td>
							<td><img src="{{ url($category->banner) }}" width="70"></td>
							<td>{{ $category->description }}</td>
							<td><a href="{{ route('category.edit', $category->id) }}">Edit</a></td>
							<td><a href="{{ route('category.delete', $category->id) }}">Delete</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
		</div>	
	</div>
</div>
@endsection