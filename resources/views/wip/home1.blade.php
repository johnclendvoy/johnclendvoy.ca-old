@extends('layouts.tailwind')

@section('css')
<style type="text/css">
	
div.main-image {
	background-image: url('https://loremflickr.com/g/1920/1080/mountain');
	background-size:100%;
}

div.hero-pattern {
	background-color: #cdcdcd;
	background-image: url("data:image/svg+xml,%3Csvg width='12' height='16' viewBox='0 0 12 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 .99C4 .445 4.444 0 5 0c.552 0 1 .45 1 .99v4.02C6 5.555 5.556 6 5 6c-.552 0-1-.45-1-.99V.99zm6 8c0-.546.444-.99 1-.99.552 0 1 .45 1 .99v4.02c0 .546-.444.99-1 .99-.552 0-1-.45-1-.99V8.99z' fill='%233490dc' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
}
</style>

@stop

@section('content')

<body>
	<header class="bg-grey-darkest p-6">
		<div class="flex justify-between items-center">
			<div class=""><a class="font-bold uppercase text-white text-2xl" href="/designs"><span class="text-blue-light">Tech</span>Company</a></div>
			<div class="flex justify-between items-center">
				<a class="text-blue-darker tracking-wide py-4 px-6 mr-6 bg-blue-light rounded-full" href="/">Try It Free!</a>
				<a class="tracking-wide mr-6 text-white" href="/">My Account <i class="fa fa-caret-down"></i></a>
				<a class="text-xl text-white" href="/"><i class="fa fa-gear"></i></a>
			</div>
		</div>
	</header>

	<div class="bg-grey-darker text-sm text-black p-2">
		<div class="flex justify-end">
			<div class="mr-4 "><i class="fa fa-envelope"></i> noreply@techcompany.com</div>
			<div><i class="fa fa-phone"></i> 1-555-444-3210</div>
		</div>
	</div>

	<div class="main-image">
		<div class="flex">

			<div class="w-1/2 m-16">
				<h1 class="text-5xl text-white">Excellence In Tech</h1>
				<h3 class="uppercase text-blue-light">All day long</h3>
			</div>

			<div class="bg-blue-light w-1/2 m-16 rounded">
				<div class="flex flex-col m-8">
				<p class="text-blue-darker mb-4">Not sure where to begin? Why not right here.</p>
				<input class="mb-4 p-4 rounded" type="" name="" placeholder="Your Name">
				<input class="mb-4 p-4 rounded" type="" name="" placeholder="Email Address">
				<button class="text-blue-darker tracking-wide py-4 px-6 bg-blue rounded-full">Join Now</button>
				</div>
			</div>

		</div>
	</div>

	<div class="bg-grey-darkest p-16">
		<h1 class="text-4xl text-white font-bold">The best products all around the world.</h1>
		<h3 class="text-blue-light uppercase mb-4">no matter what you need</h3>
		<p class="text-grey-light">"This is placeholder text that our web designers put here to make sure words appear properly on your website. It is useful for web designers to use placeholder text so they can easily see what different fonts look like on a realistic paragraph."</p>
	</div>

	<div class="hero-pattern p-16">
		<div class="text-center mb-16">
			<h2 class="text-3xl text-black">Meet Our Team</h2>
		</div>
		<div class="flex justify-center px-4">
			<div class="mx-4">
				<img src="https://loremflickr.com/g/400/240/tech?random=1" />
				<h2 class="uppercase">Products</h2>
			</div>
			<div class="mx-4">
				<img src="https://loremflickr.com/g/400/240/tech?random=2" />
				<h2 class="uppercase">Services</h2>
			</div>
			<div class="mx-4">
				<img src="https://loremflickr.com/g/400/240/tech?random=3" />
				<h2 class="uppercase">Company</h2>
			</div>
		</div>
	</div>

	<footer class="bg-grey-darkest p-8">
		<div class="flex justify-center">

			<div class="flex flex-col w-1/3 pr-8">
				<a class="font-bold uppercase text-white text-2xl mb-4" href="/wip"><span class="text-blue-light">Tech</span>Company</a>
				<p class="text-grey-light">This is placeholder text that our web designers put here to make sure words appear properly on your website. It is useful for web designers to use placeholder text so they can easily see what different fonts look like on a realistic paragraph.</p>
			</div>

			<div class="flex flex-col w-1/4">
				<h3 class="text-blue-light uppercase mb-4">Services</h3>
				<a class="text-grey-light uppercase mb-2" href="">Web Development</a>
				<a class="text-grey-light uppercase mb-2" href="">App Development</a>
				<a class="text-grey-light uppercase mb-2" href="">Graphic Design</a>
				<a class="text-grey-light uppercase mb-2" href="">Marketing</a>
			</div>

		</div>
		<div class="flex justify-center text-grey-dark p-8">
			&copy; {{date('Y')}} Tech Company All rights reserved.
		</div>

	</footer>
	
</body>

@stop
