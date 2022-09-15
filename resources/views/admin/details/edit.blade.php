@extends('layouts.app')
@section('title', 'Details - Edit')
@section('content')
<div class="jumbotron">
	<div class="container">
		{!! Form::model($detail, ['route' => ['details.update', $detail->id]]) !!}
			<div class="row">
				<div class="col-sm-12">
					@method('PATCH')
					@include('admin.details.partials.form', ['edit' => 1])
				</div>	
			</div>	
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#text').trumbowyg();
	</script>
@endsection