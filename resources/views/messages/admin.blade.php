@extends('layouts.public')

@section('title', 'ALL MESSAGES')

@section('content')

	<div class="container">

		<table class="table">
			<thead>
				<th>Created</th>
				<th>Name</th>
				<th>Email</th>
				<th>Comments</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->created_at }}</td>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->comments }}</td>
						<td>
							@component('components.delete_button')
							/messages/{{ $message->id }}
							@endcomponent
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop