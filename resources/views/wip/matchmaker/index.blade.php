@extends('layouts.tailwind')

@section('content')
<body class="bg-pink">


	<h1>Matchmaker</h1>

	<div class="bg-pink-lighter shadow rounded-lg">

		<h2>How compatible are you as a couple?</h2>

		<p>Enter your name and your lover's name and find out.</p>

		<form method="post" action="matchmaker">
			<input type="text" name="name-1">
			<input type="text" name="name-2">
			<button type="submit">Submit</button>
		</form>
			
	</div>

</body>
@stop