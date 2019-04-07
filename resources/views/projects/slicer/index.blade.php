@extends('layouts.public')
@section('title', 'Image Slicer')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			{{-- <p>This page demonstrates an algorithm I first saw after watching this video. I thought I would give it a shot digitally and see how it looked.</p> --}}
		</div>
	</div>

	<div class="text-center">
	<div id="slicer"></div>
	</div>
@stop

@section('scripts')
	{{-- <script type="text/javascript" src="/plugins/p5/libraries/p5.js"></script> --}}
	<script language="javascript" type="text/javascript" src="/js/sketches/slicer/slicer.js"></script>
@stop

