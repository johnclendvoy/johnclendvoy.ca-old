@extends('layouts.public')

@section('title', 'Music and Videos')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p>In my spare time, sometimes I like to make electronic music. Below is a collection of songs composed, mixed and mastered by me and released under the name Codezillla. The album is called <i>Fly Real High</i> and it is available for streaming on all the popular services. The files are available for free download from Bandcamp or Soundcloud.
				</p>
				<p>I also had fun programming the visuals for each of these songs using <a href="//processing.org">Processing</a>. A program that makes it easy for anyone to get started working with 2D and 3D graphics. Check them out below! </p>
			</div>
			<div class="col-sm-12 m-b-30">
				<a href="https://landlr.com/t/9f4c42" class="btn btn-default">Stream Now</a>
			</div>
		</div>

		<div class="row">

			@foreach ($youtubeCodes as $code)
				<div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-0 m-b-30">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{ $code }}"></iframe>
					</div>
				</div>
			@endforeach

		</div>
	</div>
@stop
