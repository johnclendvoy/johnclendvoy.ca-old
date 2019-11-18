@php $hide_title = true; @endphp
@extends('layouts.public')
@section('content')

	<div class="jumbotron home">
		<div class="container text-center">
			<h1>JOHN C. LENDVOY</h1>
			<h2 class="script buzzword" id="buzz1">Software Developer</h2>
			<h2 class="script buzzword" id="buzz2">Web Designer</h2>
			<h2 class="script buzzword" id="buzz3">Creative Coder</h2>
		</div>
	</div>

	<div class="container">
		<div class="row">

			@foreach($sections as $section)
				<div class="col-xs-10 col-xs-push-1 col-md-4 col-md-push-0 col-sm-6 {{$loop->last ? 'col-sm-push-3' : 'col-sm-push-0' }} m-b-90">
					<div class="text-center">
					<a href="{{$section['link']}}">
						<img class="m-x-auto max-height-200 img img-responsive" src="{{$section['image']}}" alt="{{$section['image_alt']}}" title="{{$section['image_alt']}}">
					</a>
					</div>
					<div class="text-center">
						<h2>{{strtoupper($section['title'])}}</h2>
						<p>{!! $section['description'] !!}</p>
						<a class="btn btn-default" href="{{$section['link']}}">{{$section['button_text']}}</a>
					</div>
				</div>
			@endforeach

		</div>
	</div>

@stop

@section('js')
	<script src="/js/home_animation.js"></script>
@stop
