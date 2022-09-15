@extends('layouts.app')
@section('title', 'Trips - Create')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::open(['route' => 'trips.store', 'files' => 'true']) !!}
			<div class="row">
				<div class="col-sm-8">
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
