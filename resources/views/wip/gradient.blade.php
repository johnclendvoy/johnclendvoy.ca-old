@extends('layouts.tailwind')
@section('title', 'gradient')

@section('css')
	<style type="text/css">	
		.text-russo {
			font-family: 'Russo One', sans-serif;
		}

		:root {
			--main-1: #99ff99;
			--main-2: #9999ff;
		}
		.gradient {
			background: linear-gradient(to bottom left, var(--main-1), var(--main-2));
		}
	</style>

@endsection

@section('content')

<body class="gradient h-screen">

	<header>
		<a href="/" class="">JCL</a>
	</header>

	<div class="flex justify-center mb-4">
		<a class="bg-grey-darkest p-6 mx-1 text-grey-light text-lg tracking-wide rounded" href="#"><i class="fa fa-wrench fa-fw fa-2x"></i></a>
		<a class="bg-grey-darkest p-6 mx-1 text-grey-light text-lg tracking-wide rounded" href="#"><i class="fa fa-photo fa-fw fa-2x"></i></a>
		<a class="bg-grey-darkest p-6 mx-1 text-grey-light text-lg tracking-wide rounded" href="#"><i class="fa fa-send fa-fw fa-2x"></i></a>
	</div>

	<div class="">
		<div>
			<ul>
				<li class="">Option 1 includes </li>
				<li class="">Option 2</li>
				<li class="">Option 3</li>
			</ul>
		</div>


		<div>
			<img src="">
		</div>

	</div>

	<div class="bg-grey-light p-12">
		<div class="flex justify-center text-grey-darkest">

			@for($i = 0; $i<3; $i++)
			<div class="text-center mx-4 w-1/3">
				<img class="rounded-full mb-6" src="http://www.rand-img.com/240/240/nightlife?rand={{$i}}">

				<div class="mb-4">
					<h2 class="mb-2 uppercase tracking-wide text-russo">Title {{$i}}</h2>
					<h3 class="font-thin">Something about this Section</h3>
				</div>

				<div class="mb-8">
					<p>This text is not final and should be replaced. This text is only here to validate the page layout. It isn't worth reading. If you are reviewing this page, it is possible that it will be up to you to provide the content that will replace these sentences. </p>
				</div>

				<div class="">
					<a href="#" class="font-bold rounded py-4 px-6 border-2 border-grey-darkest text-grey-darkest">Learn More</a>
				</div>

			</div>
			@endfor
			
		</div>
	</div>
</body>

@stop
