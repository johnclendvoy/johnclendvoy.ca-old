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
      			{{-- <a class="navbar-brand" href="/">John C. Lendvoy</a> --}}
      			<a id="jcl-link" class="navbar-brand" href="/"><img id="jcl-logo" class="logo" height="40" src="/images/logo/dk_blue.PNG" alt="JCL Logo"></a>

    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
   		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">
				@if(Auth::check())
				<li><a class="{{setActive('admin')}}" href="/admin">Admin</a></li>
				@endif
				<li><a class="{{setActive('projects')}}" href="/projects">Software</a></li>
				@if(App\Project::where('design', 1)->get()->count())
				<li><a class="{{setActive('designs')}}" href="/designs">Designs</a></li>
				@endif
				<li><a class="{{setActive('music')}}" href="/music">Music</a></li>
				<li><a class="{{setActive('leather')}}" target="_blank" rel="noopener" href="http://johntheleatherman.com">Leather</a></li>
				<li><a class="{{setActive('contact')}}" href="/contact">Contact</a></li>
			</ul>
	
    		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
