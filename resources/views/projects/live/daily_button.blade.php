@extends('layouts.public')
@section('title', 'The Daily Button')

@section('css')
<style type="text/css">
	a.reset {
		color:blue;
	    text-decoration: underline;
	    cursor: auto;
	}

	a.reset:hover {
		color:purple;
	}

	div.btn-wrapper{
		padding: 40px;
	}

	div.card {
		background-color: white;
		margin: 20px;
		padding: 20px;
		border-radius: 5px;
	}

</style>
@stop

@section('content')

	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12">
				<p>Every day I make a new button made with pure css and html. The code displayed on this page is protected under the the DWTFYW Licence. You are able to use the code you see on this page for free and for any purpose.</p>
			</div>
		</div>
	</div>

	<div class="container">

		@foreach($buttons as $button)

		<div class="row card">
			<style>
				#btn-1 {
					border-radius: 10px;
					padding:5px;
					background: #2e4a54;
				}
			</style>
			<div class="col-sm-6 text-center btn-wrapper">
				<a class="reset" id="btn-1" href="#">Click Me</a>
			</div>
			<div class="col-sm-6">
<pre><code>#btn-1 {
	border-radius: 10px;
	background: #2e4a54;
}
</code></pre>
<span class="text-muted pull-right">{{ date('l F jS, Y')}}</span>

			</div>
		</div>

		@endforeach

	</div>

@stop

@section('js')
<script type="text/javascript">
</script>
@stop
