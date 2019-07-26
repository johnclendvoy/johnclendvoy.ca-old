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

				<div class="m-t-30">
					<div class="col-xs-10 col-xs-push-1 col-md-3 col-sm-6 col-sm-push-0">
						<a href="{{ $project->url }}" title="{{ $project->name }}">
							<img class="img img-responsive" src="{{ $project->image('feature') }}" alt="{{ $project->name}}" title="{{ $project->name }}">
						</a>
					</div>

					<div class="col-xs-10 col-xs-push-1 col-md-3 col-sm-6 col-sm-push-0">
						<div class="text-left">
							<h2>{{ $project->name }}</h2>

							@if($project->design && !empty($project->slug))
							<div><a target="_blank" href="{{$project->url}}"><i class="fa fa-external-link"></i> {{$project->slug}}</a></div>
							@endif

{{-- 							@if($project->design && ($project->xs_screen || $project->sm_screen || $project->md_screen || $project->lg_screen) )
							<span class="text-muted h5">
								Optimized for:
							</span>
							<span class="h5">
								{!! $project->responsive_icons !!}
							</span>
							@endif
 --}}
							<p>{!! $project->description !!}</p>
							<a class="btn btn-default" href="{{ !empty($project->url) ? $project->url : '/projects/view/'.$project->slug }}">{{ $project->button_text }}</a>
						</div>
					</div>
				</div>

				<div class="clearfix visible-sm visible-xs"></div>

				@if($loop->iteration % 2 == 0)
				<div class="clearfix visible-md visible-lg"></div>
				@endif
			@empty
				<p>No Items available</p>
			@endforelse
		</div>

	</div>
@stop
