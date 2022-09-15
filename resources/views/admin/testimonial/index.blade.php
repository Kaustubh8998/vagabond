@extends('layouts.app')
@section('title', 'Testimonials')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Testimonials <a href="{{ route('testimonials.create') }}" style="font-size: 18px;">Add New</a></h3>
				<table class="table">
					<thead>
						<tr>
							<th>Image</th>
							<th>Text</th>
							<th>Name</th>
							<th>Assigned To</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					@foreach($testimonials as $testimonial) 
						<tr>
							<td>{{ $testimonial->text }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->testimonialable ? $testimonial->testimonialable->name : 'General' }}</td>
							<td><a href="{{ route('testimonials.edit', $testimonial->id) }}">Edit</a></td>
							<td><a href="{{ route('testimonial.delete', $testimonial->id) }}">Delete</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">{{ $testimonials->render() }}</div>
			</div>	
		</div>	
	</div>
</div>
@endsection