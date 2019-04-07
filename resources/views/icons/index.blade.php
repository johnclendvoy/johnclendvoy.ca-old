@extends('layouts.public')
@section('title','CSS Icons')

@section('css')
<style type="text/css">

	/* setup */
	.grid {
	 	display:grid;
	 	grid-template-columns: repeat(6, 200px);
	 	grid-template-rows: repeat(6, 200px);
	}
	.square {
		background-color: DarkSlateGrey;
	}
	.icon {
		position: relative;
	  	top: 50%;
	  	transform: translateY(-50%);
	  	margin-right: auto;
	  	margin-left: auto;
	}


	/* Beer Glass */
	.square-0 {
		background-color: black;
	}
	.beer-glass {
		border: 3px solid white;
		width: 24%;
		height: 45%;
		transform: translateY(-30%) perspective(20px) rotateX(-4deg) ;
	}
	.beer {
		background-color : goldenrod;
		border: 3px solid DarkSlateGrey;
		width:100%;
		height: 90%;
		position:relative;
		top:10%;
	}

	/* Wine Glass */
	.square-1 {
		background-color: black;
	}
	.wine-glass {
		border: 3px solid white;
		width: 24%;
		height: 25%;
		border-bottom-left-radius: 50%;
		border-bottom-right-radius: 50%;
		transform: translateY(-30px) ;
	}
	.wine {
		border-bottom-left-radius: 50%;
		border-bottom-right-radius: 50%;
		background-color : maroon;
		border: 3px solid black;
		width:100%;
		height: 80%;
		position:relative;
		top: 20%;
		background-color: maroon ;
	}
	.wine-glass-stem {
		background-color:white;
		height: 30px;
		width:3px;
		position: relative;
		top:10px;
		margin-right:auto;
		margin-left:auto;
	}
	.wine-glass-base {
		background-color:white;
		height: 3px;
		width:100%;
		position: relative;
		top:10px;
	}

	/* Scotch Glass */
	.square-2 {
		background-color: darkslategrey;
	}
	.scotch-glass {
		border: 3px solid white;
		width: 26%;
		height: 28%;
		transform: translateY(-3px);
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
	}
	.scotch {
		background-color : saddlebrown;
		border: 3px solid darkslategrey;
		width:100%;
		height: 40%;
		margin-top: 65%;
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
	}
	.scotch-glass .ice {
		border: 2px solid rgba(255,255,255,0.5);
		width: 35%;
		height: 32%;
		position:relative;
		top:-25px;
		left:22px;
		transform: rotateZ(-17deg);
	}
	.scotch-glass .ice-2 {
		transform: rotateZ(5deg);
		position:relative;
		top:-38px;
		left:5px;
	}

	/* */
	.square-3 {
		background-color: midnightblue;
	}

</style>
@stop

@section('content')

<div class="grid">

	<div class="square">
		<div class="icon beer-glass">
			<div class="beer"></div>
		</div>
	</div>

	<div class="square square-1">
		<div class="icon wine-glass">
			<div class="wine"></div>
			<div class="wine-glass-stem"></div>
			<div class="wine-glass-base"></div>
		</div>
	</div>

	<div class="square-2">
		<div class="icon scotch-glass">
			<div class="scotch"></div>
			<div class="ice"></div>
			<div class="ice ice-2"></div>
		</div>
	</div>

	<div class="square-3">
		<div class="icon">
		</div>
	</div>

</div>

@stop
