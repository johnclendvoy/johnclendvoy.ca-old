@extends('layouts.public')

@section('title', 'All Projects')

@section('content')

	<div class="container">
	<a href="/projects/create" class="btn btn-success">Add New Item</a>

		<div class="table-responsive">
			<table class="table">
				<thead>
					<th>Order</th>
					<th>Image</th>
					<th>Name</th>
					<th>Description</th>
					<th>URL</th>
					<th>Button Text</th>
					<th>Responsive</th>
					<th>Active</th>

					<th>Edit</th>
					<th>Delete</th>

				</thead>
				<tbody>
					@foreach($projects as $project)
						<tr>
							<td>{{ $project->sort_order}}</td>
							<td><img alt="thumbnail" src="{{$project->image('thumbnail_small')}}" ></td>
							<td>{{ $project->name }}</td>
							<td>{{ Str::limit($project->description, 40) }}</td>
							<td>{{ $project->url }}</td>
							<td>{{ $project->button_text }}</td>
							<td>
								{!! $project->responsive_icons !!}
							</td>
							<td>{{ $project->active == '1' ? 'Yes' : 'No' }}</td>

							<td><a class="btn btn-default" href="/projects/{{ $project->id }}/edit">Edit</a></td>
							<td>
								<form method="POST" action="/projects/{{ $project->id }}">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE" >
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop