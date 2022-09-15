<h5>Details Section</h5>
{{ Form::open(['route' => 'details.store']) }}
	
	@include('admin.details.partials.form')

{{ Form::close() }}
	
<div class="row" style="margin-top:20px;">
	<div class="col-sm-12 accordion" id="detail-accordian">
	@foreach($details as $detail) 
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $detail->id }}">
					{{ $detail->title }}</a>
					<a class="btn btn-danger float-right" href="{{ route('detail.delete', $detail->id) }}">Delete</a>
					<a class="btn btn-info float-right" style="margin-right:5px;" href="{{ route('details.edit', $detail->id) }}" target="_blank">Edit</a>
					<button class="btn btn-warning float-right" style="margin-right:5px;">{{ $detail->order }}</button>
				</h2>
			</div>
			<div id="collapse{{ $detail->id }}" class="collapse" aria-labelledby="heading" data-parent="#detail-accordian">
				<div class="card-body">
					{!! $detail->text !!}
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>