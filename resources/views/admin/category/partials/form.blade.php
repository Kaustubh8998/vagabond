<div class="form-group">
	<label>Name</label>
	{!! Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control new-form-control', 'id' => 'name']) !!}
	@if($errors->has('name'))
	<p class="form-error">{{ $errors->first('name') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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
	<label>Thumbnail</label> <br>
	@if(isset($category))
	<img src="{{ url($category->thumbnail) }}" alt=""  class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('thumbnail') !!}
	@if($errors->has('thumbnail'))
	<p class="form-error">{{ $errors->first('thumbnail') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Banner</label> <br>
	@if(isset($category))
	<img src="{{ url($category->banner) }}" alt=""  class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('banner') !!}
	@if($errors->has('banner'))
	<p class="form-error">{{ $errors->first('banner') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
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

<div class="form-group">
	<label>Instagram Link</label>
	{!! Form::text('insta', null, ['placeholder' => 'Put Insta Link Here','class' => 'form-control new-form-control', 'id' => 'insta']) !!}
	@if($errors->has('insta'))
	<p class="form-error">{{ $errors->first('insta') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>