@extends('layouts.public')

@section('title', 'Create/Update Project')

@section('content')

	<div class="container">

	@if(empty($project->id))
		<form method="POST" action="/projects" class="form" enctype="multipart/form-data">
	@else
		<form method="POST" action="/projects/{{ $project->id }}" class="form" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PATCH">
	@endif
		{{ csrf_field() }}

			@include('partials.form_errors')

			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="name" value="{{ !empty($project->id) ? $project->name : old('name') }}">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" type="text" name="description">{{ !empty($project->id) ? $project->description : old('description') }}</textarea>
			</div>

			<div class="form-group">
				<label>Url</label>
				<input class="form-control" type="text" name="url" value="{{ !empty($project) ? $project->url : old('url') }}">
			</div>

			<div class="form-group">
				<label>Button Text</label>
				<input class="form-control" type="text" name="button_text" value="{{ !empty($project) ? $project->button_text : old('button_text') }}">
			</div>

			<div class="form-group">
				<label>Slug</label>
				<input class="form-control" type="text" name="slug" value="{{ !empty($project) ? $project->slug : old('slug') }}">
			</div>

			<div class="form-group">
				<label>Main Image</label>
				<input class="form-control" type="file" name="image" accept="image/*">
			</div>

			<div class="form-group">
				<label>Sort Order</label>
				<input class="form-control" type="number" name="sort_order" value="{{ !empty($project) ? $project->sort_order : old('sort_order') }}">
			</div>

			<div class="form-group">
				<input type="hidden" name="design" value="0">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="design" value="1"
						{{ !empty($project->id) && $project->design == '1' ? 'checked' : '' }}
						{{ empty($project) && old('design') == '1' ? 'checked' : '' }}
						> Design
					</label>
				</div>
			</div>

			@component('components.checkbox', ['item' => $project])
				@slot('name', 'xs_screen')
			@endcomponent
			@component('components.checkbox', ['item' => $project])
				@slot('name', 'sm_screen')
			@endcomponent
			@component('components.checkbox', ['item' => $project])
				@slot('name', 'md_screen')
			@endcomponent
			@component('components.checkbox', ['item' => $project])
				@slot('name', 'lg_screen')
			@endcomponent

			<div class="form-group">
				<input type="hidden" name="active" value="0">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="active" value="1"
						{{ !empty($project) && $project->active == '1' ? 'checked' : '' }}
						{{ empty($project) && old('active') == '1' ? 'checked' : '' }}
						> Active
					</label>
				</div>
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">{{ empty($project) ? 'Add' : 'Update' }}</button>
			</div>
		</form>
	</div>
@stop