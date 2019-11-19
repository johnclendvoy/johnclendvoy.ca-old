@extends('layouts.public')

@section('title')
	{{ $title }}
@endsection

@section('content')

	<div class="container">

		@if(!empty($description))
		<div class="row">
			<div class="col-sm-12">
				{!! $description !!}
			</div>
		</div>
		@endif

		<div class="row">

			@forelse($projects as $project)

			<div class="col-xs-10 col-xs-push-1 col-md-6 col-sm-12 col-sm-push-0 project-image">
				<div class="row m-b-90">
					<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4">
						<a href="{{ $project->url }}" title="{{ $project->name }}">
							<img class="img img-responsive" src="{{ $project->image('feature') }}" alt="{{ $project->name}}" title="{{ $project->name }}">
						</a>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-7 col-lg-8">
						<h2>{{ $project->name }}</h2>

						@if($project->design && !empty($project->slug))
						<div><a target="_blank" href="{{$project->url}}"><i class="fa fa-external-link"></i> {{$project->slug}}</a></div>
						@endif

						<p>{!! $project->description !!}</p>
						<a class="btn btn-default" href="{{ !empty($project->url) ? $project->url : '/projects/view/'.$project->slug }}">{{ $project->button_text }}</a>
					</div>

				</div>
			</div>
			@empty
				<p>No items available</p>
			@endforelse
		</div>

	</div>
@stop
