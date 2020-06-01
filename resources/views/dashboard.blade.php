@extends('layouts.app')

@section('title', 'Your Dashboard')

@section('content')

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h5>Statistics</h5>
				</div>
				<div class="card-body text-center">
					</h5>
					@if(isset($getCount) && $getCount < 1)
						<h5> There is no entry in your SmartDiary</h5>
						<a href="/entries/create">Create New Entry</a>
					@elseif (isset($getCount) && $getCount == 1)
						<h5>There is 1 entry in your SmartDiary</h5>
					@else
						<h5>There are <br> <span class="text-info">{{$getCount}} entries </span> <br> in your SmartDiary</h5>
					@endif
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h5>Recent Entries</h5>
				</div>
				<div class="card-body">
					<p>Check out the recent entries that you added to your digital diary</p>
					<a href="/entries/?sort=desc" class="btn btn-block btn-primary">View Recent Entries</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h5>Old Entries</h5>
				</div>
				<div class="card-body">
					<p>View all the entries in your digital diary, starting with the oldest ones</p>
					<a href="/entries/?sort=asc" class="btn btn-block btn-primary">View Old Entries</a>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h5>Search Diary: By Date</h5>
				</div>
				<div class="card-body">

				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h5>Search Diary: By Keywords</h5>
				</div>
				<div class="card-body">

				</div>
			</div>
		</div>

	</div>


@endsection