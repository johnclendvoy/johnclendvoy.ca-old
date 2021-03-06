@extends('layouts.public')
@section('title', 'Procedurally Generated Mountains')

@section('content')

	<div class="container">

		<div class="row text-center">

			<div id="canvas-div" alt="Procedurally Generated Mountian Scene" title="Procedurally Generated Mountian Scene"></div>

		</div>

		<div class="row text-center">
		The image you are looking at was procedurally generated by varying values, colors, and positions of the elements. If you click the image, a new one will be generated. I made this in response to the  November 2016 monthly challenge at <a href="https://reddit.com/r/proceduralgeneration">/r/proceduralgeneration</a>. The code is available on <a href="https://github.com/johnclendvoy/johnclendvoy.ca/tree/master/public/js/sketches/procedural-mountains">Github</a>
		</div>
	</div>

@stop

@section('scripts')
	<script language="javascript" type="text/javascript" src="/js/sketches/procedural-mountains/procedural_mountains.js?v=1"></script>
@stop
