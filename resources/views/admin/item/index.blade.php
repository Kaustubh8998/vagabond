@extends('layouts.app')
@section('title', 'Trips')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Trips <a href="{{ route('trips.create') }}" style="font-size: 18px;">Add New</a></h3>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Category</th>
							<th>Image</th>
							<th>Tiny Description</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					@foreach($items as $item) 
						<tr>
							<td><a href="{{ route('trips.show', $item->id) }}">{{ $item->name }}</a></td>
							<td>{{ $item->category->name }}</td>
							<td><img src="{{ url($item->image) }}" width="70"></td>
							<td>{{ $item->tiny_description }}</td>
							<td><a href="{{ route('trips.edit', $item->id) }}">Edit</a></td>
							<td><a href="{{ route('trip.delete', $item->id) }}">Delete</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">{{ $items->render() }}</div>
			</div>	
		</div>	
	</div>
</div>
@endsection