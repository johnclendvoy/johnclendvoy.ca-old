<header>
	<div class="bg-purple text-center py-4">
		<a class="text-black" href="/advent"><h1>Gif Advent Calendar</h1></a>

		@if(!empty($advent))
			<div class="mt-2">
				<a href="/advent/{{$advent->code}}">Bookmark this page or visit the link below to see this calendar again:</a>
			</div>

			<div class="mt-2">
				<input class="p-4 w-5/6 md:w-1/2 lg:w-1/3 h-12 rounded-lg shadow" type="" name="" value="{{url('/advent/'.$advent->code)}}">
			</div>

		@elseif(!empty($day))
		<div class="mt-2">
			<a href="/advent/{{$day->advent->code}}">Back To My Calendar
			</a>
		</div>
		@endif
	</div>
</header>
