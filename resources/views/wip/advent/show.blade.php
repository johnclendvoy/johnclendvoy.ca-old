@extends('layouts.tailwind')

@section('title', 'Meme Advent Calendar')

@section('content')

<body class="bg-black">

	<div class="bg-purple">
		<a href="/advent">Gif Advent Calendar</a>
	</div>

	<div class="flex flex-wrap text-white">
		@foreach($advent->days as $day)
		<div class="w-1/3 p-4">
			
			<div class="border-white border-2 border-dashed">
				{{ $day->date->format('F jS') }}

				<div style="width:100%;height:0;padding-bottom:68%;position:relative;"><iframe src="{{$day->embed_url}}" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="{{ $day->url }}"></a></p>

				{{ $day->quote }}

			</div>
		</div>
		@endforeach

	</div>
</body>
