<head>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- icons -->
 	<link rel="stylesheet" href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css">

	<style type="text/css">	

	body {
		font-family: 'Raleway', sans-serif;
		text-transform: uppercase;
	}

	.card {
		width:334px; 
		height:190px;
		display : inline-block;
		border: 1px solid #e2e2e2;
	}

	.text-center {
		text-align: center;
	}

	.title {
		/*font-family: 'Raleway Bold', sans-serif;*/
		/*font-weight:bold;*/
		font-size: 20px;
		margin-top: 6px;
	}
	.website {
		margin-top: 6px;
		font-size: 14px;
	}

	.tiny {
		color: #666666;
		font-size: 9px;
	}
	.name {
		color: #000000;
		font-size: 10px;
	}

	.small {
		color: #666666;
		font-size: 10px;
		margin-top: -2px;
	}

	.svg {
		margin-top: 10px;
	}

	</style>
</head>
	
<body>
		
	@for($i=0; $i<8; $i++)

		@if($i % 2 == 0)
			<br>
		@endif

		<div class="card" style="{{ $i % 2 == 0 ? 'transform: translateX(5px);' : ''}}">
			<div class="text-center">
				<div class="title">John The Leatherman</div>
				<div class="tiny">Handcrafted leather wallets and more by</div>
				<div class="name">John C. Lendvoy</div>

				<div class="svg">
					{{-- @include('svg.handmade', ['height'=> '60px']) --}}
					{{-- <img height="60" src="/images/svg/handmade.svg"> --}}
					<img height="60" src="{{public_path('images/business-cards/handmade.jpg')}}">
				</div>

				<div class="website">johntheleatherman.com</div>
				<div class="small">@johntheleatherman</div>
			</div>
		</div>

	@endfor

</body>

</div>
