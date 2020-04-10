@php $hide_title = true; @endphp
@extends('layouts.public')
@section('content')

	<div class="jumbotron home m-b-90">
		<div class="container text-center">
			<h1 class="text-md-blue">JOHN C. LENDVOY</h1>
			<h2 class="script text-lt-blue">Software Development</h2>
		</div>
	</div>

	<div class="container m-b-90">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-4 col-md-5 m-b-20">
						<img class="m-x-auto max-height-200 img img-responsive" src="/svg/undraw_programming.svg" alt="Website Developer with multiple monitors" title="Website Development">
					</div>
					<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-8 col-md-7">
						<h2 class="m-t-0">Website Development</h2>
						<p class="m-b-20">I help people build their online prescence by designing, developing and hosting custom websites and web apps with <a href="https://laravel.com" target="_blank">Laravel</a> and <a href="http://tailwindcss.com" target="_blank">Tailwind</a>.</p>
						<a class="btn btn-default" href="/website-development">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron m-b-90">
		<div class="container m-t-30 m-b-30">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-8 col-lg-9">
					<h2>Who Am I?</h2>
					<p class="text-lt-blue">Hi, I'm John, here's a bit more about me.</p>
					<p class="font-md text-white">I moved to Medicine Hat in 2016 after earning a degree in Computer Science from the University of Saskatchewan. Before that, I attended the University of Regina where I earned a degree in Chemistry and was a proud member of the Cougars wrestling program. Aside from software development, I enjoy renovating my home with my wife, coaching the Medicine Hat Hawks wrestling team, and building custom leather wallets.</p>
				</div>
				<div class="col-xs-push-2 col-xs-8 col-sm-push-0 col-sm-3 col-md-4 col-lg-3">
					<img class="img img-responsive img-circle" src="/images/home/profile_pic_smaller.jpg" alt="John C. Lendvoy">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">

				<div class="col-xs-12">
					<div class="row m-b-90">
						<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-4 col-md-5 m-b-20">
							<img class="m-x-auto max-height-200 img img-responsive" src="/svg/undraw_progressive_app.svg">
						</div>
						<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-8 col-md-7">
							<h2 class="m-t-0">Software</h2>
							<p class="m-b-20">I've used many different technologies to develop software tools, games and other experiments.</p>
							<a class="btn btn-default" href="/software">View Software</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12">
					<div class="row m-b-90">
						<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-4 col-md-5 m-b-20">
							<img class="m-x-auto max-height-200 img img-responsive" src="/svg/undraw_art.svg" alt="Digital Art">
						</div>
						<div class="col-xs-10 col-xs-push-1 col-sm-push-0 col-sm-8 col-md-7">
							<h2 class="m-t-0">Digital Art</h2>
							<p class="m-b-20">I produce electronic music as well as create unique visuals for music videos using <a href="http://processing.org" target="_blank">Processing.</a></p>
							<a class="btn btn-default" href="/art">Watch / Listen</a>
						</div>
					</div>
				</div>
		</div>
	</div>


@stop

@section('js')
	{{-- <script src="/js/home_animation.js"></script> --}}
@stop
