
{{-- p5 background --}}
<script type="text/javascript" src="/plugins/p5/libraries/p5.js"></script>


<!-- jquery -->
<script src="/js/jquery-3.1.1.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- plugins -->
<script type="text/javascript" src="/js/dropzone.js"></script>
<script type="text/javascript" src="/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="/plugins/sweetalert-master/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

<!-- animated bg -->
{{-- <script language="javascript" type="text/javascript" src="/js/sketches/animated_bg.js"></script> --}}

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87342532-1', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript" src="/js/custom.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#jcl-link').hover(
			function(){
				$('#jcl-logo').attr('src', '/images/logo/lt_green.PNG');
			},
			function(){
				$('#jcl-logo').attr('src', '/images/logo/dk_blue.PNG');
			}
		);
	});
</script>

<!-- custom per page -->
@yield('js')


