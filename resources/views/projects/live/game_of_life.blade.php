@extends('layouts.public')
@section('title', "Conway\'s Game of Life")

@section('content')

	<div class="container">

		<div class="row text-center">

			<div id="game-of-life-div"></div>

		</div>

		<div class="row text-left">
			<div class="col-md-6">
				<h2>Instructions</h2>
				<ul>
					<li>Click <span class="glyphicon glyphicon-pause"></span> or press 'p' to pause.</li>
					<li>Click <span class="glyphicon glyphicon-play"></span> or press 'p' again to play.</li>
					<li>Click <span class="glyphicon glyphicon-remove"></span> or press 'x' to clear the grid.</li>
				</ul>

				<h4>When paused: </h4>
				<ul>
					<li>Click a dead cell to make it alive.</li>
					<li>Click an alive cell to make it dead.</li>
				</ul>
				<h4>When playing:</h4>
				<ul>
					<li>Click anywhere to create an alive cell.</li>
					<li>Enjoy watching life unfold.</li>
				</ul>
			</div>

			<div class="col-md-6">
				<h2>Rules</h2>
				<ul>
					<li>An alive cell is green.</li>
					<li>An dead cell is black.</li>
					<li>An alive cell with 0 or 1 alive neighbours will die of starvation.</li>
					<li>An alive cell with more than 3 alive neighbours will die of overcrowding.</li>
					<li>An alive cell with 2 or 3 alive neighbours will remain alive.</li>
					<li>An dead cell with cell with exactly 3 alive neighbours will become alive.</li>
				</ul>

				<h3>Learn More</h3>
				<ul>
					<li><a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life" target="_blank">Wikipedia</a></li>
					<li><a href="http://conwaylife.com" target="_blank">A site dedicated to the Game of life.</a></li>
					<li><a href="https://www.reddit.com/r/cellular_automata/" target="_blank">/r/cellular_automata/ on Reddit</a></li>
				</ul>
			</div>

		</div>
	</div>
@stop

@section('scripts')
  	<script language="javascript" type="text/javascript" src="/js/sketches/game-of-life/Cell.js?v=2"></script>
	<script language="javascript" type="text/javascript" src="/js/sketches/game-of-life/game_of_life.js?v=2"></script>
@stop
