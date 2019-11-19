@extends('layouts.tailwind')

@section('content')
<body class="bg-grey-light">

	<header class="flex justify-between items-center bg-white px-16 mb-8 border-t-4 border-green">

		<div class="">
			<a class="text-green-dark tracking-tight" href="/designs"><h1>FakeListings<sup>&reg;</sup></h1></a>
		</div>

		<div class="flex h-16 items-center">
			<div class="hidden md:block">
				@php
				$links = ['Today', 'Tomorrow', 'All'];
				@endphp
				@foreach($links as $link)
				<a class="text-black font-bold mx-6 border-b-4 border-green" href="#" class="">{{$link}}</a>
				@endforeach
			</div>

			<div class="ml-6 text-center">
				<a href="" class="bg-green pt-1 rounded-full text-white h-6 w-6 block"><i class="fa fa-user"></i></a>
			</div>

		</div>
	</header>

	<div class="md:w-5/6 lg:w-5/6 xl:3/4 mx-auto">

	  	<div class="flex flex-wrap -mx-2">

			@for($i=0; $i< 7; $i++)
		    <div class="w-full lg:w-1/2 px-2 pb-8">

		      	<div class="bg-grey-lightest border-t-4 border-green shadow p-6">

					<div class="flex justify-between items-center">
			      		<div class="w-2/3">
							<h2 class="font-black mb-2">27 8th Street SE</h2>
			      		</div>
			      		<div class="w-1/3 text-right">
							<a href="#" class="px-6 py-3 my-3 shadow font-bold border-green border-2 text-green whitespace-no-wrap hover:border-green-dark hover:text-green-dark"><i class="fa fa-map-marker"></i> <span class="hidden md:inline">View Map</span></a>
			      		</div>
			      	</div>

					<div class="w-1/5 mb-4 pb-3 text-xl text-grey-darker border-green border-b-2">
						$340,000
					</div>

					<div class="md:flex">

						<!-- left image -->
				      	<div class="mb-6 md:w-3/5">
				      		<div class="shadow-lg">
								{{-- <img class="-mb-1" src="https://loremflickr.com/320/240/home?random={{$i}}"> --}}
								<img class="-mb-1" src="https://loremflickr.com/720/480/house?random={{$i}}">
				      		</div>
						</div>

						<!-- right info -->
						<div class="md:ml-6 md:2/5">

							@php $days = [
								'Friday' => '9:00 AM - 3:00 PM',
								'Saturday' => '10:00 AM - 5:00 PM',
							];
							@endphp

							<div class="mb-4">
								@foreach($days as $day=>$time)
								<div class="mb-3">
									<h4 class="uppercase tracking-wide mb-2 text-grey-dark font-thin">{{$day}}</h4>
									<h4 class=" text-grey-darker">{{$time}}</h4>
								</div>
								@endforeach
							</div>

							<div class="mb-6">
								<h4 class="uppercase tracking-wide mb-2 text-grey-dark font-thin">Includes</h4>
								@php
								$includes = ['Fence', 'Heated Garage', 'Pool'];
								@endphp
								@foreach($includes as $include)
								<div class="mb-1 text-grey-darker font-thin"><i class="text-grey-dark fa fa-check"></i> {{$include}}</div>
								@endforeach
							</div>

							{{--}}
							<div class="">
								<a href="#" class="px-4 py-2 my-2 font-bold border-green border-2 text-green hover:border-black hover:text-black">View More</a>
							</div>
							{{--}}
						</div>

					</div>

		      	</div>
		    </div>
		    @endfor
	  	</div>
	</div>

</body>
@stop
