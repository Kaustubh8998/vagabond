<div class="form-group">
	<label>Name</label>
	{!! Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control new-form-control', 'id' => 'name']) !!}
	@if($errors->has('name'))
	<p class="form-error">{{ $errors->first('name') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Category</label>
	{!! Form::select('category_id', $categories, null, array('placeholder' => 'Select Categories','class' => 'form-control new-form-control', 'id' => 'category_id')) !!}
	@if($errors->has('category_id'))
	<p class="form-error">{{ $errors->first('category_id') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Tiny Description</label>
	{!! Form::textarea('tiny_description', null, ['placeholder' => 'Tiny Description...','class' => 'form-control new-form-control', 'id' => 'tiny_description', 'rows' => 6]) !!}
	@if($errors->has('tiny_description'))
	<p class="form-error">{{ $errors->first('tiny_description') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Description</label>
	{!! Form::textarea('description', null, ['placeholder' => 'Description...','class' => 'form-control new-form-control', 'id' => 'description', 'rows' => 6]) !!}
	@if($errors->has('description'))
	<p class="form-error">{{ $errors->first('description') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>



<div class="form-group">
	<label>Image</label> <br>
	@if(isset($item))
	<img src="{{ url($item->image) }}" alt="" class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('image') !!}
	@if($errors->has('image'))
	<p class="form-error">{{ $errors->first('image') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Banner</label> <br>
	@if(isset($item))
	<img src="{{ url($item->banner) }}" alt=""  class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('banner') !!}
	@if($errors->has('banner'))
	<p class="form-error">{{ $errors->first('banner') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Difficulty Level</label>
	{!! Form::select('difficulty_level', ['Easy' => 'Easy'], null, array('placeholder' => 'Select Categories','class' => 'form-control new-form-control', 'id' => 'difficulty_level')) !!}
	@if($errors->has('difficulty_level'))
	<p class="form-error">{{ $errors->first('difficulty_level') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost (Rs.)</label>
	{!! Form::text('cost', null, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'cost']) !!}
	@if($errors->has('cost'))
	<p class="form-error">{{ $errors->first('cost') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost Label - 1</label>
	{!! Form::text('diff_cost_one_label', null, ['placeholder' => 'Eg Vagafam.','class' => 'form-control new-form-control', 'id' => 'diff_cost_one_label']) !!}
	@if($errors->has('diff_cost_one_label'))
	<p class="form-error">{{ $errors->first('diff_cost_one_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost (Rs.) - 1</label>
	{!! Form::text('diff_cost_one', null, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_one']) !!}
	@if($errors->has('diff_cost_one'))
	<p class="form-error">{{ $errors->first('diff_cost_one') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost Label - 2</label>
	{!! Form::text('diff_cost_two_label', null, ['placeholder' => 'Eg. BYOT.','class' => 'form-control new-form-control', 'id' => 'diff_cost_two_label']) !!}
	@if($errors->has('diff_cost_two_label'))
	<p class="form-error">{{ $errors->first('diff_cost_two_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost (Rs.) - 2</label>
	{!! Form::text('diff_cost_two', null, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_two']) !!}
	@if($errors->has('diff_cost_two'))
	<p class="form-error">{{ $errors->first('diff_cost_two') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost Label - 3</label>
	{!! Form::text('diff_cost_three_label', null, ['placeholder' => 'Eg. Group.','class' => 'form-control new-form-control', 'id' => 'diff_cost_three_label']) !!}
	@if($errors->has('diff_cost_three_label'))
	<p class="form-error">{{ $errors->first('diff_cost_three_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Cost (Rs.) - 3</label>
	{!! Form::text('diff_cost_three', null, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_three']) !!}
	@if($errors->has('diff_cost_three'))
	<p class="form-error">{{ $errors->first('diff_cost_three') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Location</label>
	{!! Form::text('location', null, ['placeholder' => 'Eg. Parvati Valley, Himachal Pradesh.','class' => 'form-control new-form-control', 'id' => 'location']) !!}
	@if($errors->has('location'))
	<p class="form-error">{{ $errors->first('location') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Duration</label>
	{!! Form::text('duration', null, ['placeholder' => 'Eg. 2D/3N.','class' => 'form-control new-form-control', 'id' => 'duration']) !!}
	@if($errors->has('duration'))
	<p class="form-error">{{ $errors->first('duration') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Payment Link</label>
	{!! Form::text('payment_link', null, ['placeholder' => '','class' => 'form-control new-form-control', 'id' => 'payment_link']) !!}
	@if($errors->has('payment_link'))
	<p class="form-error">{{ $errors->first('payment_link') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label for="hide">Hide</label>
	{!! Form::checkbox('hide', '1') !!}
</div>

<div class="form-group">
	<label>Meta Title</label>
	{!! Form::text('meta_title', null, ['placeholder' => 'Meta Title','class' => 'form-control new-form-control', 'id' => 'meta_title']) !!}
	@if($errors->has('meta_title'))
	<p class="form-error">{{ $errors->first('meta_title') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Meta Description</label>
	{!! Form::textarea('meta_description', null, ['placeholder' => 'Meta Description...','class' => 'form-control new-form-control', 'id' => 'meta_description', 'rows' => 6]) !!}
	@if($errors->has('meta_description'))
	<p class="form-error">{{ $errors->first('meta_description') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Meta Keywords</label>
	{!! Form::textarea('meta_keywords', null, ['placeholder' => 'Meta Keywords...','class' => 'form-control new-form-control', 'id' => 'meta_keywords', 'rows' => 6]) !!}
	@if($errors->has('meta_keywords'))
	<p class="form-error">{{ $errors->first('meta_keywords') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Media Title</label>
	{!! Form::text('media_title', null, ['placeholder' => 'Media Title','class' => 'form-control new-form-control', 'id' => 'media_title']) !!}
	@if($errors->has('media_title'))
	<p class="form-error">{{ $errors->first('media_title') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>
