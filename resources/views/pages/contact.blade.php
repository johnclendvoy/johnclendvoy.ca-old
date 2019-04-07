@extends('layouts.public')
@section('title', 'Contact')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@include('partials.contactform')
			</div>
		</div>
	</div>
@stop
