@extends('layouts.public')
@section('title', 'SOFTWARE')

@section('content')

	@include('includes.title')

	<div class="container">

		<div class="row extra-margin">
			<div class="col-sm-3 col-sm-push-0  col-xs-10 col-xs-push-1 extra-margin-top">
				<a href="/procedural-mountains">
					<img class="img-responsive img-rounded" src="/images/projects/procedural_mountains.jpg" alt="Procedurally Generated Mountain Scene" title="Procedurally Generated Mountain Scene">
				</a>
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-9 col-sm-push-0">
				<div class="text-left">
				<h2>Procedurally Generated Mountains</h2>
				<p>This project was prompted by the November 2016 challenge at Reddit's procedural generation community, <a href="https://reddit.com/r/proceduralgeneration">/r/proceduralgeneration</a>. Click on the image to refresh the scene. I plan to add a way to save these images to a file soon. This was written in javascript and uses the <a href="https://p5js.org" target="_blank">p5</a> library.</p>
				</div>
				<div class="text-center">
				<a class="btn btn-default" href="/procedural-mountains">Make Mountains</a>
				</div>
			</div>
		</div>
		<div class="row extra-margin">
			<div class="col-sm-3 col-sm-push-0  col-xs-10 col-xs-push-1 extra-margin-top">
				<a href="/game-of-life">
					<img class="img-responsive img-rounded" src="/images/projects/game_of_life.jpg" alt="Conways Game of Life" title="Conways Game of Life">
				</a>
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-9 col-sm-push-0">
				<div class="text-left">
				<h2>Conway's Game of Life Playground</h2>
				<p>If you aren't sure what this is, you can read more on it <a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">here</a>. I have been making various sketches with <a href="http://processing.org" target="_blank">Processing</a> for a few years now, and have always wanted to share my sketches online. I have also wanted to write my own implementation of The Game of Life for a while as well. This project was my first time using the javascript version of Processing, <a href="https://p5js.org" target="_blank">p5</a> to cross two items off my to-do list.</p>
				</div>
				<div class="text-center">
				<a class="btn btn-default" href="/game-of-life">Play With Life</a>
				</div>
			</div>
		</div>


		<div class="row extra-margin">
			<div class="col-sm-3 col-sm-push-0 col-xs-10 col-xs-push-1 extra-margin-top">
				<img class="img-responsive img-rounded" src="/images/dmb_game.png" alt="Screenshot of Duper Mash Brothers" title="Screenshot of Duper Mash Brothers">
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-9 col-sm-push-0">
				<div class="text-left">
				<h2>Duper Mash Brothers</h2>
				<p>This is a simple 2-player fighting game I made in <a target="_blank" href="http://unity3d.com">Unity</a> for the <a target="_blank" href="http://gamewithus.ca">Game With Us</a> Game Jam in February 2016. I made it over the course of a weekend and did all of the programming and artwork myself. You can play against a friend in the same room by using a single keyboard. As players take damage, they shrink in size in a familiar way. As they get smaller, they gain an advantage as they can access smaller areas, jump higher, and easily avoid a larger player's attacks.</p>

				<p>Google Chrome does not support the Unity Web Player, so I recommend opening this link with <a target="_blank" href="http://www.apple.com/safari/">Safari</a> or <a target="_blank" href="https://www.mozilla.org">Firefox</a>.</p>
				</div>
				<div class="text-center">
				<a class="btn btn-default" target="_blank" href="games/webDuperMashBrothers.html">Play Duper Mash Brothers Online</a>
				</div>
			</div>
		</div>

		<div class="row extra-margin">
			<div class="col-sm-3 col-sm-push-0 col-xs-10 col-xs-push-1 extra-margin-top">
				<img class="img-responsive img-rounded" src="/images/projects/draw_with_kinect.png" alt="Screenshot of Draw With Kinect" title="Screenshot of Draw With Kinect">
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-9 col-sm-push-0">
				<div class="text-left">
					<h2>Draw With Kinect</h2>
					<p>For a term project in CMPT 381 - Implementation of Graphical User Interfaces, my partner and I built a drawing app that uses the <a target="_blank" href="https://msdn.microsoft.com/en-ca/library/hh438998.aspx">Microsoft Kinect</a> as a controller. We made use of an open source API to get the data from the sensors, and mapped the user's hands to two cursors. One was used to draw shapes on the canvas and the other was used to select options from the menu. Check out a video of "Draw With Kinect" below.</p> 
				</div>
				<div class="text-center">
				<a class="btn btn-default" target="_blank" href="https://www.youtube.com/watch?v=hu7XqwZ6zig">See it in Action</a>
				</div>
			</div>
		</div>

		<div class="row extra-margin">
			<div class="col-sm-3 col-sm-push-0  col-xs-10 col-xs-push-1 extra-margin-top">
				<img class="img-responsive img-rounded" src="/images/projects/JML.png" alt="Screenshot of John's Music Library" title="Screenshot of John's Music Library">
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-9 col-sm-push-0">
				<div class="text-left">
				<h2>John's Music Library</h2>
				<p>John's Music Library is the project I worked on throughout my Web Development course. The idea behind this website was to provide a place for people to share their favorite music with others, as well as organize the information for each artist so their various, and social networks websites can be easily reached. It uses the Facebook Login API to allow users to log in. Users must be logged in in order to add, edit or remove artists from the site. I implemented a RESTful API to interact with the database using the <a href="https://kohanaframework.org">Kohana</a> framework. On the front-end, the API is consumed by AngularJS to display and update the artist info. In its current state, John's Music Library is still a work in progress, but I am very interested in adding some more functionality and polish to this project in the future. This project is no longer live on the web, but bringing it back is on my list of things to do.</p>
				</div>

				<div class="text-center">
				<a class="btn btn-default disabled">Currently Unavailable</a>
				</div>
			</div>
		</div>

	</div>
@stop
