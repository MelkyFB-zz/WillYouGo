@extends('layouts.main')

@section('content')
<form class="form-inline">
	<div class="form-group">
	    <label for="yes">Yes</label>
	    <input type="text" class="form-control" id="yes" placeholder="{{ count($yes) }}" />
	 </div>
	<div class="form-group">
	    <label for="yes">Maybe</label>
	    <input type="text" class="form-control" id="maybe" placeholder="{{ count($maybe) }}" />
	 </div>
	<div class="form-group">
	    <label for="yes">No</label>
	    <input type="text" class="form-control" id="no" placeholder="{{ count($no) }}" />
	 </div>
</form>
<table class="table table-striped">
	<tr>
		<th>Who Responded Yes</th>
	</tr>
	@if(count($yes))
		@foreach($yes as $person)
			<tr>
				<td>{{$person->name}}</td>
			</tr>
		@endforeach
	@endif
</table>
<table class="table table-striped">
	<tr>
		<th>Who Responded Maybe</th>
	</tr>
	@if(count($maybe))
		@foreach($maybe as $person)
			<tr>
				<td>{{$person->name}}</td>
			</tr>
		@endforeach
	@endif
</table>
<table class="table table-striped">
	<tr>
		<th>Who Responded No</th>
	</tr>
	@if(count($no))
		@foreach($no as $person)
			<tr>
				<td>{{$person->name}}</td>
			</tr>
		@endforeach
	@endif
</table>
@endsection