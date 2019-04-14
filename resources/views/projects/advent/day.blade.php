@extends('layouts.tailwind')

@section('title', 'Meme Advent Calendar')

@section('content')

	@include('projects.advent.header')

	<body class="bg-black">

		<div class="flex justify-center mt-8">
			
			<div class="lg:w-1/2">

				<div class="text-center mt-4">
					@if($day->daysRemaining == 0)
					<h2 class="text-white">Last Day!</h2>
					@else
					<h2 class="text-white">{{ $day->daysRemaining }} {{ Str::plural('day', $day->daysRemaining ) }} to go!</h2>
					@endif
				</div>
				
				<div class="mt-3">
					<div style="width:100%;height:0;padding-bottom:68%;position:relative;"><iframe src="{{$day->embed_url}}" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="{{ $day->url }}"></a></p>
				</div>

				<div class="text-center mt-3">
					<p class="text-white text-xl">{{ $day->quote }}</p>
				</div>

			</div>
		</div>


	</body>

	<footer>
		
	</footer>

@stop