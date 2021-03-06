@extends('layouts.app')

@section('title', 'Your Entries')

@section('content')
	<p><a href="/entries/create" class="btn btn-primary">Add New Entry</a></p>

	<div class="card">
		<div class="card-header">
			<h1>Your Diary: All Entries</h1>
		</div>
		<div class="card-body">
			<!-- Include file for messages/notifications -->
			@include('includes.messages')

			@if(isset($entries) && count($entries) > 0)

			<table class="table table-hover table-responsive">
				<thead class="thead-light">
					<tr>
						<th>Date</th>
						<th>Entry</th>
						<th>View</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>

				@foreach($entries as $entry)
				<tbody>
					<tr>
						<td>{{$entry->created_at->format('d/m/Y')}}</td>
						<td>
							@if(strlen($entry->body) > 80)
								<a href="/entries/{{$entry->id}}">{{substr($entry->body, 0, 80)}} ... </a>
							@else
								<a href="/entries/{{$entry->id}}"> {{$entry->body}} </a>
							@endif
						</td>
						<td>
							<a href="/entries/{{$entry->id}}" class="btn btn-primary">Details</a>
						</td>
						<td>
							<a href="/entries/{{$entry->id}}/edit" class="btn btn-success">Update</a>
						</td>
						<td>
						{{-- Add a delete form --}}
							<form action="/entries/{{$entry->id}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="submit" name="submit" value="Delete" class="btn btn-danger" onclick="return confirm('You are about to delete an entry. Click OK to continue')">
							</form>
						</td>
					</tr>
				</tbody>
				@endforeach
			</table>

				{{-- Add the Pagination Link --}}
				{{$entries->links()}}
			@else
				<p>You have not created any entry yet. <a href="/entries/create">Create New Entry</a></p>

			@endif

		</div>
	</div>
@endsection