@extends('layouts.public')

@section('title', 'How a Website Works')

@section('head')
    <link rel="stylesheet" href="/plugins/highlight/styles/darcula.css">
    <script src="/plugins/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('content')

@php
$code =
'<style>
    p.red-text {
        color: #AB2212;
        margin-bottom: 20px;
    }
    .thick-grey-border {
        border: 4px solid #565656;
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

<div class="thick-grey-border">
    <h2>This is a Title</h2>
    <p class="red-text">This is some red text. There is an icon on the button.</p>
    <button class="black-button" onclick="alert(\'Hello\')">
        <i class="fa fa-smile-o"></i>
        This is a Button
    </button>
</div>';
@endphp

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
                <h2>How does it all work?</h2>

                <p>Although websites are everywhere around us, and seemingly everone has one, there are many parts that need to work together in order for a website to work. If you would like to learn more about what is happening behind the scenes, you came to the right place! The following page will break down what happens when you use a website, as well as what goes into building one. 

                <p class="alert alert-info">This guide was created as an introduction to web development for people who are curious and want to understand more about how their website functions. Many technical details have been left out to keep it interesting and easy to follow.</p>

            </div>
        </div>

        <div class="row">
			<div class="col-sm-12">
                <h2>What is Source Code?</h2>

                <p>A website is made up of many files written in special languages that can be read by computers and internet browsers. The collection of files that make up a website are called it's source code. It is the developer's job to understand how to write code in these languages and create the correct combination of files so that in the end, they produce a website looks and functions as expected. There are a number of different languages used, and each one is responsible for a different part of the website.</p>

                <p>To get an idea of what this looks like, look at the following block of code and it's result:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 m-b-30">
                <h4>Source Code</h4>
                <pre class="language-html"><code>{{$code}}</code></pre>
            </div>
            <div class="col-sm-12 col-md-4 m-b-30">
                <h4>Result</h4>
                {!! $code !!}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p>As you can see, even in this very simple example, resulting in a box with a border, some text, and a button, there is a lot of code responsible for making it look good. A lot more code could probably be added to make it look even better and to make the button do something more interesting.</p>

                <p>The source code for most projects can be broken into two parts, the "Front End" and the "Back End" the two sides work together to display each page of your website.</p>

                <h3>Front End</h3>

                <p>The front end of the website is responsible for how the pages look. This means the layout of the page, the colours, the fonts, the images, as well as spacing and sizing are all controlled on the front end (also referred to as "client side"). Fundamentaly, every page on the internet is composed of a mix of at least HTML (responsible for layout), and CSS (responsible for style), and usually JavaScript as well (which is used to add interactive elements to a page). These 3 languages are the backbone of all web development and your web browser is responsible for converting this code into a viewable web page.</p>

                <p> There are various tools that make creating the front end easier, for example there are many CSS frameworks available such as Bootstrap or Tailwind. These frameworks help to make common actions easier so developers don't always have to design everything from the ground up when making many websites with similar needs.</p>

                <p>In recent years, popularity of a number of JavaScript frameworks, such as React, Angular and Vue has been growing quickly. Again, these are tools that make it easier for developers to quickly create JavaScript code, hiding away some of the "ugly" parts, and providing quick access to the most useful parts of the Javascript language.</p>

                <h3>Back End</h3>

                <p>The other part of a website is responsible for actually sending the pages, and making sure the correct page is shown when you visit a particualar URL. The back end is also referred to as "server side" because it</p>

                <p>Common backend programming languages include PHP, Python, and Node. These languages are responsible for receiving the request for a specific web page, retrieving any data required, adding it to the appropriate front end code, then sending that front end page to the user. The difference between these back end languages and the front end ones is that the back end code is actually executed on the web server, not on your web browser. These languages are typically created with performance in mind so that any data retrieval or calculations can be done quickly without having to worry about the speed of the device the user of the site has. Separating a lot of the "heavy lifting" into the back end ensures the web pages are loaded as quickly as possible whether the user is browsing on a brand new gaming PC or a 6 year old mobile phone.<p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <h2>What is a Domain?</h2>

                <p>So you have a bunch of source code written, and it's sitting on a web server, but that doesn't mean anyone else can view it yet! The next thing you need in order to share your website with the world is a domain name. Domain names should be short, easy to say, easy to read (be careful if your business name is "Pen Island"), and related to your website's content. The domain name of this website is "johnclendvoy.ca" which is great because that is my name! </p>

                <p>A domain name is easy to register for. There are many sites that offer this service, such as NameCheap and GoDaddy to name a few. If you are buying a domain for your business, you may want to consider buying a few different variations. It is usually relatively cheap to register a domain for a year, so having a few registered might make sense.</p>

                <p>For example if you have a woodworking company called "Pine Cutter's Woodworking" some domains you may want to register are: pinecutterswoodworking.com, pinecutterswoodworking.ca, pinecutters.com, pinecutters.ca, pinecutterwoodworking.com (or other common misspellings).</p>

                <p>Once your domain is registered, you will be given permission to attach that domain name to a server of your choice. If you already have the source code of your website written, and it is available on a web server, you will want to direct any traffic to your domain name to your web server. This means when someone types in "pinecutterswoodworking.com" into their</p>

            </div>
        </div>

    </div>
    
@endsection