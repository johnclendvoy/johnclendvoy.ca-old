<head>
	<title>@yield('title') {{request()->segment(1) == '' ? '' : '|'}} John C. Lendvoy</title>

	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="keywords" content="John Lendvoy, John C Lendvoy, Web Design, Codezillla, Software Projects, Programmer, Web Developer, John The Leatherman, Leather, Music, Software, Games">
	<meta name="author" content="John C. Lendvoy"> </meta>
	<meta name="description" content="@yield('description', 'John C. Lendvoy is a creative programmer, web developer, artist and musician From Canada. On this site you can find links to my software creations, including games, tools, experiments, designs, and more.')">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

	<!-- favicons https://realfavicongenerator.net -->
	<link rel="icon" href="/favicon.ico?v=2">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2d4244">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#2d4244">
	<meta name="theme-color" content="#fbfffd">
		
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Heebo|Roboto:900|Lobster" rel="stylesheet">

	<!-- bootstrap -->
 	<link href="/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

 	<!-- plugins -->
 	<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
 	<link rel="stylesheet" type="text/css" href="/plugins/slick/slick.css">
 	<link rel="stylesheet" type="text/css" href="/plugins/slick/slick-theme.css">
 	<link rel="stylesheet" href="/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
 	<link rel="stylesheet" href="/plugins/sweetalert-master/dist/sweetalert.css" type="text/css"/>
 	<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">

 	<!-- icons -->
 	<link rel="stylesheet" href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css">

 	<!--custom -->
	<link  rel="stylesheet" type="text/css" href="/css/style.css">

	@yield('head')
	@yield('css')

</head>
