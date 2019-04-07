@extends('layouts.public')
@section('title','Pixel Painter')

<style type="text/css">
	div.pixel-grid {
		display: grid;
		grid-template-columns: repeat({{count($pixel_rows[0])}}, 20px);
		grid-template-rows: repeat({{count($pixel_rows)}}, 20px);
		/*justify-content: center;*/
		/*align-content: center;*/
	}

	div.pixel {
		border: 1px solid lightgrey;
		text-align: center;
		color: lightgrey;
	}
</style>

@section('content')
<div class="pixel-grid">
	@foreach($pixel_rows as $row)
		@foreach($row as $pixel)
			<div class="pixel" style="background-color:rgb({{$pixel}},{{$pixel}}, {{$pixel}});"></div>
			{{-- <div class="pixel">{{$pixel}}</div> --}}
		@endforeach
	@endforeach
</div>
@stop