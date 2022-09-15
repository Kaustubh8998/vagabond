@extends('layouts.app')
@section('title', 'Slides')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Slides <a href="{{ route('slides.create') }}" style="font-size: 18px;">Add New</a></h3>
				<table class="table">
					<thead>
						<tr>
							<th>Image</th>
							<th>Link</th>
							<th>Logo</th>
							<th>Text</th>
							<th>Description</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					@foreach($slides as $slide) 
						<tr>
							<td><img src="{{ url($slide->image) }}" height="100"></td>
                            <td>{{ $slide->link }}</td>
                            <td>@if($slide->logo)<img src="{{ url($slide->logo) }}" width="70">@endif</td>
                            <td>{{ $slide->text }}</td>
							<td>{{ $slide->description }}</td>
							<td><a href="{{ route('slides.edit', $slide->id) }}">Edit</a></td>
							<td><a href="{{ route('slide.delete', $slide->id) }}">Delete</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
		</div>	
	</div>
</div>
@endsection