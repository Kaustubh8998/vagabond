<h5>Add Category Icon</h5>
{{ Form::open(['route' => ['category.icon', $category], 'files' => true]) }}
	
	<div class="form-group">
		<label>Icon</label> <br>
		{!! Form::file('icon') !!}
		@if($errors->has('icon'))
		<p class="form-error">{{ $errors->first('icon') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
		@endif
	</div>		

	<button type="submit" class="btn btn-primary">Submit</button>

{{ Form::close() }}

@if($category->icon != '')
<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
		<div style="width:100%; position: relative;">
			<img width="100%" src="{{ url($category->icon) }}" class="img-thumbnail">
			<a href="{{ route('category.icon.delete', $category->id) }}" class="close-button"><img src="{{ asset('img/close.svg') }}"></a>
		</div>
	</div>
</div>
@endif