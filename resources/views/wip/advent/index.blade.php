@extends('layouts.tailwind')

@section('title', 'Meme Advent Calendar')

@section('content')
<body class="bg-black">

	<div class="flex justify-center">

		<div class="w-full md:w-1/2">

			<div class="m-6 text-center">
				<h1 class="text-purple-light">Gif Advent Calendar</h1>
			</div>

			<div class="m-6 bg-purple-dark text-center rounded-lg p-8">
				<p class="mb-6">What day are you looking forward to?</p>

				<form method="post" action="/advent">
					{{csrf_field()}}

					<div class="lg:flex md:justify-center -mx-4">

						<div class="px-4 mb-6">
							<input class="h-12 p-4 rounded-lg shadow @if($errors->has('date')) border-2 border-red @endif" type="date" name="date">
							@if($errors->has('date'))
							<div class="text-red-dark mt-2">
							{{$errors->default->first('date')}}
							</div>
							@endif
						</div>

						<div class="px-4">
							<button class="bg-purple-light hover:bg-purple shadow p-4 rounded-lg font-bold h-12" type="submit">Create Advent Calendar</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</body>

@stop