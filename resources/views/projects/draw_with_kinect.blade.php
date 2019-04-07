@extends('layouts.public')
@section('title', "Draw With Kinect")

@section('content')

	<div class="container">

		<div class="row">

				<div class="col-sm-10 col-sm-push-1 m-b-30">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hu7XqwZ6zig?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen"></iframe>
					</div>
				</div>

		</div>


		<div class="row">
			<div class="col-md-12">
				<h2>What is it?</h2>
				<p>This is a project I worked on with a partner for CMPT 381: Implementing Graphical User Interfaces while I studied at the University of Saskatchewan.</p>
				<p>Our idea was to create a fun app that allowed a user to paint freely as if they were painting on a large canvas or wall with their hands without making a mess. Our application worked out mostly as planned and was a proof of concept, however the end result needs some more fine tuning before it would be considered "fun" to use.</p>

				<h2>How does it work?</h2>
				<p>There are two distinct parts of the screen: the canvas and the menu. The canvas is the area on the right where the actual shapes are drawn. The menu is shown on the left side of the screen, and contains buttons to change the drawing shape, color, as well as tracking the history of the shaped drawn on the canvas. The right hand (red) is the drawing hand, and the left hand (blue) is the controller hand.</p>
				<p>The user can start drawing by moving their controller hand into the canvas and stop drawing by moving their controller hand over the menu. When the controller hand is over the menu, they can 'click' on a menu item by moving their drawing hand toward the sensor in a pushing motion. There are options for changing the color of the shapes as well as the type of shape or line drawn. The history section only displays drawing history, but was inteneded to eventually be a way to undo or repeat previous drawings.</p>

				<h2>Technology used</h2>
				<ul>
					<li>Microsoft Kinect Sensor</li>
					<li>Windows 10</li>
					<li>Java FX</li>
					<li>Netbeans IDE</li>
				</ul>

			</div>

		</div>
	</div>
@stop

