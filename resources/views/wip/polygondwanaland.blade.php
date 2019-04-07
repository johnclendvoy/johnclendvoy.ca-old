<head>

	<style>
		.top-grid {
			display: grid;
			grid-template-columns: repeat(4, 100px);
			grid-template-rows: repeat(4, 100px);
		}

		.top-square {
			background-color: black;
			color:white;
			border-bottom: 4px solid lightgrey;
			border-left: 4px solid lightgrey;
		}

		.title-grid {
			grid-column: 2 / 4;
			grid-row: 2 / 4;
			justify-items:center;
			align-items:center;

			display: grid;
			grid-template-columns: repeat(4, 50px);
			grid-template-rows: repeat(4, 50px);
			background-color:red;
		}

		.title-grid div {
			padding: 10px 12px;
			border-radius: 50%;
			background-color: yellow;
			color: black;
		}

		.band-name {
			background-color: black;
			border: 6px solid red;
			text-transform: uppercase;
			color:white;
			border-radius: 4px;
		}

	</style>
</head>

<body>
	
	<div class="top-grid">
		<div class="top-square">1</div>
		<div class="top-square">2</div>
		<div class="top-square">3</div>
		<div class="top-square">4</div>

		<div class="top-square">5</div>
		<div class="top-square">6</div>

		<div class="title-grid">
			<div>P</div>
			<div>O</div>
			<div>L</div>
			<div>Y</div>
			<div>G</div>
			<div>O</div>
			<div>N</div>
			<div>D</div>
			<div>W</div>
			<div>A</div>
			<div>N</div>
			<div>A</div>
			<div>L</div>
			<div>A</div>
			<div>N</div>
			<div>D</div>
		</div>

		<div class="top-square">7</div>
		<div class="top-square">8</div>
		<div class="top-square">9</div>
		<div class="top-square">10</div>
		<div class="top-square">11</div>
		<div class="top-square">12</div>
		
	</div>

	<div class="band-name">
		King Gizzard and the Lizard Wizard
	</div>

</body>
