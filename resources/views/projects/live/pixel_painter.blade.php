@extends('layouts.public')
@section('title', 'PIXEL PAINTER')

@section('content')

	@include('includes.title')

	<div class="container">

	  	<script language="javascript" type="text/javascript" src="/plugins/p5/libraries/p5.js"></script>

		<div class="row text-center">

			<div id="canvas-div" alt="Procedurally Generated Mountian Scene" title="Procedurally Generated Mountian Scene"></div>
			<script language="javascript" type="text/javascript" src="/js/sketches/pixel-painter/pixel_painter.js?v=2"></script>

		</div>

		<div class="row text-center">
		
		</div>
	</div>

@stop
