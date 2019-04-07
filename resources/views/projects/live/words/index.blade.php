<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Ribeye" rel="stylesheet">

		<style>
			.left {
				-moz-transform: scaleX(-1);
		        -o-transform: scaleX(-1);
		        -webkit-transform: scaleX(-1);
		        transform: scaleX(-1);
		        filter: FlipH;
		        -ms-filter: "FlipH";
			}

			.word {
				font-family: 'Ribeye', cursive;
				text-align:center;
				margin-left:auto;
				margin-right:auto;
			}

			.hand {
			}


			/* Custom, iPhone Retina */ 
		    @media only screen and (min-width : 320px) {

				.word {
			    	font-size:20px;
			    }
		    }

		    /* Extra Small Devices, Phones */ 
		    @media only screen and (min-width : 480px) {
				.word {
			    	font-size:30px;
			    }
		    }

		    /* Small Devices, Tablets */
		    @media only screen and (min-width : 768px) {
				.word {
			    	font-size:40px;
			    }
		    }

		    /* Medium Devices, Desktops */
		    @media only screen and (min-width : 992px) {
				.word {
			    	font-size:50px;
			    }
		    }

		    /* Large Devices, Wide Screens */
		    @media only screen and (min-width : 1200px) {
				.word {
			    	font-size:60px;
			    }
		    }
		}



		</style>

	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<img class="hand img img-responsive left" src="/images/projects/fist.png"/>
					<span class="word text-center">{{ $left->word }}</span>
					<form class="text-center" method="post" action="/words/vote/{{ $left->id}}/left">
						{{csrf_field()}}
						<button class="btn btn-danger" name="vote" value="no" type="submit">No</button>
						<button class="btn btn-success" name="vote"  value="yes"  type="submit">Yes</button>
					</form>
				</div>
				<div class="col-xs-6">
					<img class="hand img img-responsive right" src="/images/projects/fist.png"/>
					<span class="word text-center">{{ $right->word }}</span>
					<form class="text-center" method="post" action="/words/vote/{{ $left->id}}/right">
						{{csrf_field()}}
						<button class="btn btn-danger" name="vote" value="no" type="submit">No</button>
						<button class="btn btn-success" name="vote"  value="yes" type="submit">Yes</button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form class="text-center" method="post" action="/words/pair/{{ $left->id}}/{{$right->id}}">
						{{csrf_field()}}
						<div class="form-group">
							<button class="btn btn-lg btn-primary" type="submit">Save <i class="fa fa-star"></i></button>
						</div>
					</form>
					<form class="text-center" method="post" action="/words/vote/{{ $left->id}}/both/{{$right->id}}">
						{{csrf_field()}}
						<div class="form-group">
							<button class="btn btn-danger" name="vote" value="no" type="submit">Both <i class="fa fa-thumbs-down"></i></button>
							<button class="btn btn-success" name="vote"  value="yes"  type="submit">Both <i class="fa fa-thumbs-up"></i></button>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<form method="post" action="/words">
						{{csrf_field()}}
						<input class="input-lg form-control" type="text" name="new">
						<button class="btn btn-default" type="submit">Add New Word</button>
					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<h1>People's Choice</h1>
			<div class="row">
				<ol>
					@foreach($pairs as $pair)
					<li>{{ $pair->left->word}} {{ $pair->right->word }} <span><i class="fa fa-star"></i> {{ $pair->votes }}</span></li>
					@endforeach
				</ol>
			</div>
		</div>



		<script src="http://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>

</html>
