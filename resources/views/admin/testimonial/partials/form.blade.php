<!-- <div class="form-group">
	<label>Image</label> <br>
	@if(isset($testimonial))
	<img src="{{ url($testimonial->image) }}" alt=""  class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('image') !!}
	@if($errors->has('image'))
	<p class="form-error">{{ $errors->first('image') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div> -->

<div class="form-group">
	<label>Text</label>
	{!! Form::text('text', null, ['placeholder' => 'Text','class' => 'form-control new-form-control', 'id' => 'text']) !!}
	@if($errors->has('text'))
	<p class="form-error">{{ $errors->first('text') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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
	<label>Category</label>
	{!! Form::select('category_id', $categories, isset($testimonial->testimonialable_id) && $testimonial->testimonialable_type == 'App\Category' ? $testimonial->testimonialable_id : null, array('placeholder' => 'Select Category','class' => 'form-control new-form-control', 'id' => 'category_id')) !!}
	@if($errors->has('category_id'))
	<p class="form-error">{{ $errors->first('category_id') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Trip</label>
	{!! Form::select('item_id', $trips, isset($testimonial->testimonialable_id) && $testimonial->testimonialable_type == 'App\Item' ? $testimonial->testimonialable_id : null, array('placeholder' => 'Select Trip','class' => 'form-control new-form-control', 'id' => 'item_id')) !!}
	@if($errors->has('item_id'))
	<p class="form-error">{{ $errors->first('item_id') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>