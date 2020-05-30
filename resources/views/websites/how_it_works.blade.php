@extends('layouts.public')

@section('title', 'How a Website Works')

@section('head')
    <link rel="stylesheet" href="/plugins/highlight/styles/darcula.css">
    <script src="/plugins/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('content')

@php
$front_end_code =
'<style>
    /* this is CSS code */
    .thick-blue-border {
        border: 4px solid #565699;
        border-radius: 4px;
        padding: 20px;
    }
    .black-button {
        background-color: #090909;
        border-radius: 10px;
        padding: 10px;
        color:white;
    }
</style>

<!-- This is HTML code -->
<div class="thick-blue-border">
    <h2>This is a Title</h2>
    <p>This is some text. Click the button to run the Javascript code.</p>
    <button class="black-button" onclick="showMessage()">
        <i class="fa fa-smile-o"></i>
        This is a Button
    </button>
</div>

<script>
<!-- This is Javascript code -->
function showMessage() {
    let message = \'Hello world!\';
    alert(message);
}
</script>
';

$back_end_code =
'public function showTodaysPosts() {

    $title = \'Blog Posts from \' . date(\'F jS, Y\');
    $allPosts = BlogPost::where(\'active\', true)->get();

    $todaysPosts = $allPosts->filter(function (Post $post) {
        return $post->created_date->isToday();
    });

    $content = View::create(\'posts.index\')->with([
        \'title\' => $title,
        \'posts\' => $todaysPosts,
    ]);

    return $content;
}';

@endphp

	<div class="container">

		<div class="row">
			<div class="col-sm-12">

                <h2>How does it all work?</h2>

                <p>Although websites are everywhere around us, and seemingly everone has one, there are many parts that need to work together in order for a website to work. If you would like to learn more about what is happening behind the scenes, you came to the right place! The following page will break down what happens when you use a website, as well as what goes into building one. </p>

                <img class="m-b-30 m-x-auto max-height-300 img img-responsive" src="/svg/undraw_online_test.svg" alt="how does a website work?">

                <p>
                    <div class="alert alert-info">
                        This guide was created as an introduction for people without any prior knowledge of web development who want to understand how their website is set up. Many technical details have been left out to keep it interesting.
                    </div>
                </p>

			</div>
        </div>

        <div class="row">
			<div class="col-sm-12">
                <h2>What is a Web Browser?</h2>

                <p>A good place to begin talking about web development is with web browsers. If you have ever visited a website, you have also used a web browser! A web browser is <b>an application</b> on your computer/tablet/smartphone that is <b>responsible for displaying web pages</b> to you. </p>

                <p>There are many web browsers available to use, and some are only available on certain devices. If you use an iPhone, iPad or a Mac, you will likely be familiar with Safari, on Windows devices there is a good chance you have used Edge or maybe Internet Explorer. Firefox and Chrome are two other very popular browsers that are available on most devices.</p>

                <img class="max-height-400 m-b-30 m-x-auto img img-responsive" src="/svg/undraw_mobile_browsers.svg" alt="people using different internet browsers">

                <p>When you type something into your search bar in your browser, you are making a request for a web page. The browser will find and show you a web page that you can view. Each web browser has its own quirks, so it is the developer's responsibility to ensure that the page returned looks good and works well, no matter which web browser is used to view the page.</p>

                <p>At the end of the day, all of these browsers do the same thing, but come with their own pros and cons, some load a little faster, some look a little better, some have a few more features. It comes down personal preference, if you have a browser that lets you view the websites you want, that's all you need!</p>
            </div>
        </div>

        <div class="row">
			<div class="col-sm-12">
                <h2>What is Source Code?</h2>

                <p>A website is made up of many files written in special languages that can be read by computers and web browsers. The collection of <b>files that make up a website</b> are called it's source code. It is the developer's job to understand how to write code in these languages and create the correct combination of files so that in the end, they produce a website looks and works as expected. There are a number of different languages used, and each one is responsible for a different part of the website.</p>

                <p>To get an idea of what this looks like, check out the following block of code and it's result:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-7 m-b-30">
                <h4>Source Code</h4>
                <pre class="language-html"><code>{{$front_end_code}}</code></pre>
            </div>
            <div class="col-sm-12 col-md-5 m-b-30">
                <h4>Result</h4>
                {!! $front_end_code !!}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p>As you can see, even in this very simple example, resulting in a box with a border, some text, and a button, there is a lot of code responsible for making it look good and work correctly. A lot more code could easily be added to make it look even better, not to mention making the button do something more interesting!</p>

                <p>The source code for most projects can be broken into two parts, the <b>front end</b> and the <b>back end</b> the two sides work together to display each page of your website.</p>

                <h3>Front End</h3>

                <p>The front end (also known as the "client side") of the website is <b>responsible for how the pages look</b>. This means, the layout of the page, the colours, the fonts, the images, as well as spacing and sizing are all controlled on the front end. The block of source code shown above is an example of front end code. At their core, every web page is composed of at least <a href="https://en.wikipedia.org/wiki/HTML" title="Hypertext Markup Language">HTML</a> (responsible for layout), and <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" title="Cascading Style Sheets">CSS</a> (responsible for style), and usually <a href="https://en.wikipedia.org/wiki/JavaScript" title="JavaScript">JavaScript</a> as well (which is used to add interactive elements to a page). These three languages are the backbone of all websites and web browsers can convert this code into a viewable web page.</p>

                <p>
                    <div class="alert alert-success">
                        <h4>Try It Out!</h4>
                        If you are on a desktop computer, you can right-click on a website and select "View Page Source" to view the front end source code responsible for showing the page you are on.
                    </div>
                </p>

                <p> There are various tools that make creating the front end easier, for example there are many CSS frameworks available such as Bootstrap or Tailwind. These frameworks help to make common actions easier so developers don't always have to design everything from the ground up when making many websites with similar needs.</p>

                <p>In recent years, popularity of JavaScript frameworks, such as React, Angular and Vue has been growing quickly. Again, these are tools that make it easier for developers to quickly create JavaScript code, hiding away some of the "ugly" parts, and providing quick access to the most useful parts of the Javascript language.</p>

                <h3>Back End</h3>

                <p>Not all websites require a back end. If your site is simple enough, it may be enough to simply host the front end pages you have created on a server and call it a day. For more complex sites, however, a backend is required. </p>
                    
                <p>The back end (also known as the "server side") of a website is <b>required when the content on the website changes frequently</b>, these are called dynamic websites. Think of a blog, where posts are added weekly, or a social media site where users can upload their own pictures. The main job of the back end code is to retreive the correct data to show from a database, insert that data into the approprate front end code, then return a viewable page to the web browser.</p>

                <p>Common backend programming languages include PHP, Python, and Ruby. Unlike front end code, this code is executed on the web server, and not the web browser. This means, the work done on the back end will happen quickly for everyone, no matter if you are using a state-of-the-art gaming PC, or a 6 year old mobile phone. It is the developer's job to make sure that the back end code does what it needs to efficiently, so the users do not have to wait long for a page to load.</p>

                <p>Take a look at the example below, which could be used for an imaginary blog website, to see how the backend code is different from the front end code:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-7 m-b-30">
                <h4>PHP Example Code</h4>
                <pre class="language-php"><code>{{$back_end_code}}</code></pre>
            </div>
            <div class="col-sm-12 col-md-5 m-b-30">
                <h4>What it does:</h4>
                <ul>
                    <li>Create a title based on today's date formated like "{{date('F jS, Y')}}"</li>
                    <li>Retreive all the active blog posts from the database</li>
                    <li>Filter through all the blog posts and only keep the ones that were created today</li>
                    <li>Create a front end page, that will show the title and the blog posts</li>
                    <li>Finally, return the page content to the web browser.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p>Again, this is a very basic example. What isn't shown is all the code reponsible for seeing older blog posts, creating new ones, deleting old ones, updating their content, or setting them to active. As complexity of the website increases so does the amount of code needed. There could be hundreds of files each with hundreds of lines of code needed to get the job done.</p>
                <p>Just like front end languages, a number of back end frameworks exists to help developers write code for a website quickly without having to worry about setting up the common parts that many websites share. <a href="https://laravel.com">Laravel</a> is a popular PHP framework, and my go-to choice when building websites. Other popular back end frameworks are Django and Ruby on Rails.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2>What is a Web Server?</h2>

                <p>Basically, a web server is just a computer. It doesn't have a mouse, keyboard or monitor connected to it. It never turns off, and it is sitting in an air conditioned warehouse in a stack with many many similar computers.</p>

                <img class="m-x-auto max-height-300 m-b-30 img img-responsive" src="/svg/undraw_server_cluster.svg" alt="a server stack connected to devices">

                <p></p>

            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <h2>What is a Domain?</h2>

                <p>So you have a bunch of source code written, and it's sitting on a web server, but that doesn't mean anyone else can view it yet! The next thing you need in order to share your website with the world is a domain name. Domain names should be short, easy to say, easy to read (be careful if your business name is "Pen Island"), and related to your website's content. The domain name of this website is "johnclendvoy.ca" which is great because that is my name! </p>

                <img class="m-x-auto max-height-300 m-b-30 img img-responsive" src="/svg/undraw_domain_names.svg" alt="choosing a domain name">

                <p>A domain name is easy to register for. There are many sites that offer this service, such as NameCheap and GoDaddy to name a few. If you are buying a domain for your business, you may want to consider buying a few different variations. It is usually relatively cheap to register a domain for a year, so having a few registered might make sense.</p>

                <p>For example if you have a woodworking company called "Pine Woodworking" some domains you may want to register are: pinecutterswoodworking.com, pinecutterswoodworking.ca, pinecutters.com, pinecutters.ca, pinecutterwoodworking.com (or other common misspellings).</p>

                <p>Once your domain is registered, you will be given permission to attach that domain name to a server of your choice. If you already have the source code of your website written, and it is available on a web server, you will want to direct any traffic to your domain name to your web server. This means when someone types in "pinecutterswoodworking.com" into their</p>

            </div>
        </div>

    </div>
    
@endsection