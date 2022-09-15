<h5>Add Artists</h5>
{{ Form::open(['route' => 'artists.store', 'files' => true]) }}
	
	<div class="form-group">
		<label>Image</label> <br>
		{!! Form::file('image') !!}
		@if($errors->has('image'))
		<p class="form-error">{{ $errors->first('image') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
		@endif
	</div>

	<div class="form-group">
		<label>Name</label>
		{!! Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control new-form-control', 'id' => 'name']) !!}
		@if($errors->has('name'))
		<p class="form-error">{{ $errors->first('name') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
		@endif
	</div>

	<div class="form-group">
		<label>Title</label>
		{!! Form::text('title', null, ['placeholder' => 'Title','class' => 'form-control new-form-control', 'id' => 'title']) !!}
		@if($errors->has('title'))
		<p class="form-error">{{ $errors->first('title') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
		@endif
	</div>

	{{ Form::hidden('artistable_id', $category->id) }}		
	{{ Form::hidden('artistable_type', 'App\Category') }}		

	<button type="submit" class="btn btn-primary">Submit</button>

{{ Form::close() }}
	
<div class="row" style="margin-top:20px;">
@foreach($artists as $artist) 
	<div class="col-sm-4 pb-3">
		<div style="width:100%; position: relative;">
			<img width="100%" src="{{ url($artist->image) }}" class="img-thumbnail">
			<a href="{{ route('artist.delete', $artist->id) }}" class="close-button"><img src="{{ asset('img/close.svg') }}"></a>
		</div>
	</div>

	<div class="col-sm-8">
		<h6>{{ $artist->name }}</h6>
		<p>{{ $artist->title }}</p>
	</div>

@endforeach
</div>