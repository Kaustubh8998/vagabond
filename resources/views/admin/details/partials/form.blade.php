<div class="form-group">
    <label>Title</label>
    {!! Form::text('title', null, ['placeholder' => 'Title','class' => 'form-control new-form-control', 'id' => 'title']) !!}
    @if($errors->has('title'))
    <p class="form-error">{{ $errors->first('title') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
    @endif
</div>

<div class="form-group">
    <label>Text</label>
    {!! Form::textarea('text', null, ['placeholder' => '','class' => 'form-control new-form-control', 'id' => 'text', 'rows' => 4]) !!}
    @if($errors->has('text'))
    <p class="form-error">{{ $errors->first('text') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
    @endif
</div>

<div class="form-group">
    <label>When do you want this to display.</label>
    {!! Form::number('order', null, ['placeholder' => 'Eg. 1','class' => 'form-control new-form-control', 'id' => 'order']) !!}
    @if($errors->has('order'))
    <p class="form-error">{{ $errors->first('order') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
    @endif
</div>

@if(!isset($edit))

{{ Form::hidden('item_id', $item->id) }}	

@endif

<button type="submit" class="btn btn-primary">Submit</button>