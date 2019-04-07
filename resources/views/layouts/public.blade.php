<!DOCTYPE html>

<html lang="en">
	@include('partials.head')

	<body>
		{{-- <div id="wrapper"> --}}

		<div id="animated-bg">

			<header>
				@include('partials.navbar')
			</header>

			<div id="body">

				{{-- title bar, not on home page --}}
				@if(empty($hide_title))
				    @component('components.titlebar', compact('links'))
				        @slot('title')
				            @yield('title')
				        @endslot
				    @endcomponent
			    @endif

			    {{-- main content --}}
				@yield('content')
			    {{-- end main content --}}
				

			@include('partials.footer')
			
			</div> <!-- #body -->
		{{-- </div> #wrapper --}}
		</div> <!-- #animated-bg -->

		@include('partials.scripts')
		@yield('scripts')

		@yield('js')
	</body>
</html>
