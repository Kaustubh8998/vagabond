<div class="form-group">
	<label>Image</label> <br>
	@if(isset($slide))
	<img src="{{ url($slide->image) }}" alt=""  class="img-thumbnail" style="height:100px;">
	@endif
	<br><br>
	{!! Form::file('image') !!}
	@if($errors->has('image'))
	<p class="form-error">{{ $errors->first('image') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Link</label>
	{!! Form::text('link', null, ['placeholder' => 'Link','class' => 'form-control new-form-control', 'id' => 'link']) !!}
	@if($errors->has('link'))
	<p class="form-error">{{ $errors->first('link') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Logo</label> <br>
	{!! Form::file('logo') !!}
	@if($errors->has('logo'))
	<p class="form-error">{{ $errors->first('logo') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Text</label>
	{!! Form::text('text', null, ['placeholder' => 'Text','class' => 'form-control new-form-control', 'id' => 'text']) !!}
	@if($errors->has('text'))
	<p class="form-error">{{ $errors->first('text') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<div class="form-group">
	<label>Description</label>
	{!! Form::textarea('description', null, ['placeholder' => 'Description...','class' => 'form-control new-form-control', 'id' => 'description', 'rows' => 6]) !!}
	@if($errors->has('description'))
	<p class="form-error">{{ $errors->first('description') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
	@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>