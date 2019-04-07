
<style type="text/css">
body { 
	font-family: sans-serif;
	font-size: 0.6em;
 }

	span.pixel {
		display:inline-block;
		width: 12px;
		height: 12px;
		border: 1px solid lightgrey;
		color: #bbbbbb;
		text-align: center;
		margin-right:-1px;
		margin-bottom:-1px;
		box-sizing:border-box;
	}

	div.legend {
		margin-bottom: 30px;

	}
</style>

<div class="legend">
	<p>
		@foreach($legend as $letter)
		@php $c = $loop->iteration *(255/6); @endphp
		<span>{{$letter}} = <span class="pixel" 
		style="
		background-color: rgb({{$c}},{{$c}},{{$c}});"
		>{{$letter}}</span></span>
		@endforeach
	</p>
	<p>
		@foreach($legend as $letter)
		<span>{{$letter}} = <span class="pixel"></span></span>
		@endforeach
	</p>
	<p>
		@foreach($legend as $letter)
		<span>{{$letter}} = <span class="pixel"></span></span>
		@endforeach
	</p>
</div>

<div class="legend">
	@foreach($pixel_rows as $row)
	<div>
		@foreach($row as $pixel)<span class="pixel" 
		{{-- style="background-color: rgb({{$pixel['color']}}, {{$pixel['color']}}, {{$pixel['color']}});" --}}
		>{{$pixel['symbol']}}</span>@endforeach
	</div>
	@endforeach
</div>

<div class="">
	@foreach($pixel_rows as $row)
	<div>
		@foreach($row as $pixel)<span class="pixel" 
		{{-- style="background-color: rgb({{$pixel['color']}}, {{$pixel['color']}}, {{$pixel['color']}});" --}}
		>{{$pixel['symbol']}}</span>@endforeach
	</div>
	@endforeach
</div>
