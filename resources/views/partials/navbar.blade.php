<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			  <a id="jcl-link" class="navbar-brand" href="/">
				<svg height="32" viewBox="0 0 240 90" class="logo-svg" fill="#2d4244" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
					<polygon points="50,0 90,0 100,17.32 60,86.6 0,86.6 10.00,69.28 0,51.96 20,51.96 30,69.28 60,17.32"/>
					<polygon points="110,0 170,0 180,17.32 170,34.64 150,34.64 140, 51.96 150,69.28 140,86.6 80,86.6 120,17.32"/>
					<polygon points="190,0 230,0 240,17.32 220,51.96 230,69.28 220,86.6 160,86.6 200,17.32"/>
				</svg>
      		</a>
    	</div>

    	<!-- Collect the nav links, forms, and other content for toggling -->
   		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				@if(Auth::check())
				<li><a class="{{setActive('admin')}}" href="/admin">Admin</a></li>
				@endif
				<li><a class="{{setActive('website-development')}}" href="/website-development">Website Development</a></li>
				<li><a class="{{setActive('software')}}" href="/software">Software</a></li>
				<li><a class="{{setActive('art')}}" href="/art">Digital Art</a></li>
				<li><a class="{{setActive('contact')}}" href="/contact">Contact</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
