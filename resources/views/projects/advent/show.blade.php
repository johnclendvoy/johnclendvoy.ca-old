@extends('layouts.tailwind')

@section('title', 'Meme Advent Calendar')

@section('content')

	@include('projects.advent.header')

	<body class="bg-black">
		
	<div class="mt-4 flex flex-wrap justify-center text-white">
		@foreach($advent->days as $day)
		<div class="w-5/6 sm:w-1/2 md:w-1/4 lg:w-1/5">
			
			<a href="/advent/{{$advent->code}}/{{$day->id}}">
				<div class="text-center m-4 p-4 rounded 
				@if($day->readyToOpen)
				border-white border-2 border-dashed hover:border-purple
				@else
				border-grey-dark border-2
				@endif
				 ">

				<h2 class="text-xxl">{{ $day->daysRemaining }}</h2>

				@if(!$day->readyToOpen)
					<p class="text-grey-darker">
						@if($day->daysUntilOpen == 0)
						open tomorrow
						@elseif($day->daysUntilOpen < 3)
						open on {{$day->date->format('l')}}
						@else
						open in {{$day->daysUntilOpen}} days
						@endif
					</p>
				@endif
				</div>
			</a>
		</div>
		@endforeach

	</div>
</body>
