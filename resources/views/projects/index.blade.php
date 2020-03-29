@extends('layouts.public')

@section('title')
	{{ $title }}
@endsection

@section('content')

	<div class="container">

		<div class="row">
			<div class="col-sm-12 m-b-30">
				<h2>Other Software</h2>
				<p>
				This is a collection of various software projects I've built. I'm not limited to just websites, I've made games, as well as other tools, applications and experiments. Take a look below if you want to learn more.
				</p>
			</div>
		</div>

		<div class="row">

			@forelse($projects as $project)

			<div class="col-xs-10 col-xs-push-1 col-md-6 col-sm-12 col-sm-push-0 project-image">
				<div class="row m-b-90">
					<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4 m-b-20">
						<a href="{{ $project->url }}" title="{{ $project->name }}">
							<img class="img img-responsive" src="{{ $project->image('feature') }}" alt="{{ $project->name}}" title="{{ $project->name }}">
						</a>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-7 col-lg-8">
						<h3 class="m-t-0">{{ $project->name }}</h3>

						@if($project->design && !empty($project->slug))
						<div><a target="_blank" href="{{$project->url}}"><i class="fa fa-external-link"></i> {{$project->slug}}</a></div>
						@endif

						<p class="m-b-20">{!! $project->description !!}</p>
						<a href="{{ !empty($project->url) ? $project->url : '/projects/view/'.$project->slug }}">{{ $project->button_text }}</a>
					</div>

				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>
			@if($loop->iteration % 2 == 0)
				<div class="clearfix visible-md visible-lg"></div>
			@endif

			@empty
				<p>No items available</p>
			@endforelse
		</div>

	</div>
@stop
