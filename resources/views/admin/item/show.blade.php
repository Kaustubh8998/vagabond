@extends('layouts.app')
@section('title', $item->name)
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

		<h3>{{ $item->name }}</h3>

		<div class="row">

			<div class="col-sm-8">

				<div class="box-it">

					<h5>Basic Info</h5>

					<p>Category: {{ $item->category->name }}</p> 

					<p>Tiny Desc: {{ $item->tiny_description }}</p> 

					<p>Description: {!! $item->description !!}</p> 

					<p><img src="{{ url($item->image) }}" width="70"></p>

					<p><img src="{{ $item->banner ? url($item->banner) : '' }}" width="70"></p>

					<p>Inclusions: {{ implode(',', $item->inclusions) }}</p> 

					<p>Exclusions: {{ implode(',', $item->exclusions) }}</p> 

					<p>Difficulty Level: {{ $item->difficulty_level }}</p> 

					<p>Sleeping Bag Rental: {{ $item->sleeping_bag_rental }}</p> 

					<p>Cost: {{ $item->cost }}</p> 

					<p>Hidden: {{ $item->hide ? "Yes" : "No" }}</p>

				</div>	

			</div>	

			<div class="col-sm-4">

				<div class="box-it">
					
					<h5>Dates</h5>

					{{ Form::open(['route' => 'dates.store', 'files' => true]) }}
	
						<div class="form-group">
							{!! Form::input('date', 'event_date', null, array('placeholder' => '','class' => 'form-control new-form-control', 'id' => 'event_date')) !!}
							@if($errors->has('event_date'))
							<p class="form-error">{{ $errors->first('event_date') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							{!! Form::input('date', 'event_end_date', null, array('placeholder' => '','class' => 'form-control new-form-control', 'id' => 'event_end_date')) !!}
							@if($errors->has('event_end_date'))
							<p class="form-error">{{ $errors->first('event_end_date') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost (Rs.)</label>
							{!! Form::text('cost', $item->cost, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'cost']) !!}
							@if($errors->has('cost'))
							<p class="form-error">{{ $errors->first('cost') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost Label - 1</label>
							{!! Form::text('diff_cost_one_label', $item->diff_cost_one_label, ['placeholder' => 'Eg Vagafam.','class' => 'form-control new-form-control', 'id' => 'diff_cost_one_label']) !!}
							@if($errors->has('diff_cost_one_label'))
							<p class="form-error">{{ $errors->first('diff_cost_one_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost (Rs.) - 1</label>
							{!! Form::text('diff_cost_one', $item->diff_cost_one, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_one']) !!}
							@if($errors->has('diff_cost_one'))
							<p class="form-error">{{ $errors->first('diff_cost_one') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost Label - 2</label>
							{!! Form::text('diff_cost_two_label', $item->diff_cost_two_label, ['placeholder' => 'Eg. BYOT.','class' => 'form-control new-form-control', 'id' => 'diff_cost_two_label']) !!}
							@if($errors->has('diff_cost_two_label'))
							<p class="form-error">{{ $errors->first('diff_cost_two_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost (Rs.) - 2</label>
							{!! Form::text('diff_cost_two', $item->diff_cost_two, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_two']) !!}
							@if($errors->has('diff_cost_two'))
							<p class="form-error">{{ $errors->first('diff_cost_two') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost Label - 3</label>
							{!! Form::text('diff_cost_three_label', $item->diff_cost_three_label, ['placeholder' => 'Eg. Group.','class' => 'form-control new-form-control', 'id' => 'diff_cost_three_label']) !!}
							@if($errors->has('diff_cost_three_label'))
							<p class="form-error">{{ $errors->first('diff_cost_three_label') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Cost (Rs.) - 3</label>
							{!! Form::text('diff_cost_three', $item->diff_cost_three, ['placeholder' => 'Eg. 3000.','class' => 'form-control new-form-control', 'id' => 'diff_cost_three']) !!}
							@if($errors->has('diff_cost_three'))
							<p class="form-error">{{ $errors->first('diff_cost_three') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						<div class="form-group">
							<label>Payment Code</label>
							{!! Form::text('payment_link', null, ['placeholder' => '','class' => 'form-control new-form-control', 'id' => 'payment_link']) !!}
							@if($errors->has('payment_link'))
							<p class="form-error">{{ $errors->first('payment_link') }} <span class="glyphicon glyphicon-remove-circle"></span> </p>
							@endif
						</div>

						{{ Form::hidden('item_id', $item->id) }}		

						<button type="submit" class="btn btn-primary">Submit</button>

					{{ Form::close() }}	

					<div style="margin-top:20px;">

						@foreach($dates as $date) 
							<div class="">
								<div style="width:100%; position: relative;">
									<p>
										{{ $date->event_date }} - {{ $date->event_end_date ? $date->event_end_date . '-' : '' }}
										<a href="{{ route('date.delete', $date->id) }}">Delete</a>
									</p>
								</div>
							</div>

						@endforeach

					</div>

				</div>

			</div>

			<div class="col-sm-8">

				<div class="box-it">

					@include('admin.item.partials.details')

				</div>

			</div>
			
			<div class="col-sm-4">

				<div class="box-it">

					@include('admin.item.partials.images')

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