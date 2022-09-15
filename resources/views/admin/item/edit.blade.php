@extends('layouts.app')
@section('title', 'Trips - Edit')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::model($item, ['route' => ['trips.update', $item->id], 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-8">
					@method('PATCH')
					@include('admin.item.partials.form')
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#description').trumbowyg();
		$('#inclusions').tagsInput();
		$('#exclusions').tagsInput();
	</script>
@endsection