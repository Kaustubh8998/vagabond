<h5>Add Images</h5>
{{ Form::open(['route' => 'images.store', 'files' => true]) }}
	
	<div class="form-group">
		<label>Image</label> <br>
		{!! Form::file('image') !!}
		@if($errors->has('image'))
		<p class="form-error">{{ $errors->first('image') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
		@endif
	</div>

	{{ Form::hidden('imageable_id', $category->id) }}		
	{{ Form::hidden('imageable_type', 'App\Category') }}		

	<button type="submit" class="btn btn-primary">Submit</button>

{{ Form::close() }}
	
<div class="row" style="margin-top:20px;">
@foreach($images as $image) 
	<div class="col-sm-3">
		<div style="width:100%; position: relative;">
			<img width="100%" src="{{ url($image->image) }}" class="img-thumbnail">
			<a href="{{ route('image.delete', $image->id) }}" class="close-button"><img src="{{ asset('img/close.svg') }}"></a>
		</div>
	</div>

@endforeach
</div>