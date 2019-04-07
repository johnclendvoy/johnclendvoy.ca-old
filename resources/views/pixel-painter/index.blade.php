@extends('layouts.public')
@section('title','Pixel Painter')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="/pixel-painter" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<label>Upload an Image</label>
					<input class="form-control" type="file" name="image">
					<button class="btn btn-success btn-lg">Submit</button>
				</form>
			</div>
		</div>
	</div>

@stop
