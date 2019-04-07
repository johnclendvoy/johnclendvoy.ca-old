@extends('layouts.public')

@section('title', 'ALL MESSAGES')

@section('content')

	@include('includes.title')

	<div class="container">

		<table class="table">
			<thead>

				<th>Sent</th>
				<th>From</th>
				<th>Email</th>
				<th>Message</th>

				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->created_at->format('Y M d g:i a') }}</td>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->comments }}</td>

						<td>
							<form method="POST" action="/messages/{{ $message->id }}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE" >
								<button class="btn btn-danger disabled">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop