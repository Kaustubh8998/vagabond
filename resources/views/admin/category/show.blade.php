@extends('layouts.app')
@section('title', $category->name)
@section('content')

<style type="text/css">

	.close-button {
		position: absolute;
		top: -9px;
		right: -10px;
		background: #fff;
		border-radius: 4px;
		border: 1px solid #ccc;
	}

	.box-it {
		border: 1px solid #999;
		border-radius: 8px;
		margin: 15px 0 15px;
		padding: 20px 15px 15px;
		position: relative;
	}

	.box-it h5{
		background: #e9ecef;
		display: inline;
		position: absolute;
		top: -10px;
		padding: 0 10px;
	}

</style>

<div class="jumbotron">
	<div class="container">

		<h3>{{ $category->name }}</h3>

		<div class="row">

			<div class="col-sm-8">

				<div class="box-it">

					<h5>Basic Info</h5>

					<p>{{ $category->description }}</p>

					<h4>Thumbnail</h4>	

					<p><img src="{{ url($category->thumbnail) }}" width="70"></p>

					<h4>Banner</h4>	

					<p><img src="{{ $category->banner ? url($category->banner) : '' }}" width="70"></p>

				</div>	

				<div class="box-it">

					@include('admin.category.partials.images')

				</div>

			</div>
			
			<div class="col-sm-4">	

				<div class="box-it">

					@include('admin.category.partials.artists')

				</div>

				<div class="box-it">

					@include('admin.category.partials.icon')

				</div>

			</div>
			
		</div>	
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#text').trumbowyg();
	</script>
@endsection