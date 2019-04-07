@extends('layouts.tailwind')
@section('title', 'Home')

@section('content')

<body class="m-6">
	<h1 class="mb-4">Works in Progress</h1>

	<a class="hover:text-green" href="/projects">Back to johnclendvoy.com</a>

	@php
		$routes = [
			'/advent' => 'Gif Advent Calendar',
			'/wip/gradient' => 'Gradient',
			'/wip/polygondwanaland' => 'Polygondwanaland',
			'/wip/bg' => 'svg backgrounds',
			// '/matchmaker',
		];
	@endphp

	<ol>
		@foreach ($routes as $route=>$name)
			<li class="p-6 m-4"><a class="shadow p-6 bg-grey-lighter hover:bg-grey" href="{{$route}}">{{$name}}</a></li>
		@endforeach
	</ol>

</body>

@stop
