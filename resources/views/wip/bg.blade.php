@extends('layouts.tailwind')

@section('css')
<style type="text/css">
	.svg-background {
		
		background-color: #DFDBE5;
		background-image: url("data:image/svg+xml,{{ rawurlencode(view('svg.dashes')->render()) }}");
		height: 300px;
	}
</style>
@stop


@section('content')
<div class="h-32 bg-blue-dark">
	{{-- <h1><img src="/images/logo/logo-dash.svg"></h1> --}}

	{{-- {{ htmlentities(view('svg.dashes')) }} --}}
	{{-- @include('svg.dashes') --}}

</div>


<div class="svg-background">
	<h1>Background behind this</h1>
	<p class="mb-8">Be careful not to waste too much time reading placeholder text! There needs to be something here, even though it's not what you might expect on a finished website. If you're reading this on the production version of the site, somebody forgot to replace it. You should probably let the site owner know.</p>

</div>

<div class="h-32 bg-blue-dark">
	<h1>Hello World</h1>
	<p>{!! rawurlencode(view('svg.dashes')->render()) !!}</p>
</div>

@stop
