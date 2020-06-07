@extends('layouts.public')

@section('head')
    <link rel="stylesheet" href="/plugins/highlight/styles/darcula.css">
    <script src="/plugins/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection

@section('title', $titles[$topic])

@section('content')
	<div class="container">
		<div class="row">

			<div class="col-sm-12">
                <h2>How Does It All Work?</h2>
            </div>

			<div class="col-sm-12 col-md-7 col-lg-9">
                <p>Although websites are everywhere around us, and seemingly everyone has one, there are many parts that need to work together in order for them to work properly. If you want to <b>learn more about websites</b> and how they work behind the scenes, you came to the right place! This series will break down what happens when you use a website, as well as what goes into building one.</p>
            </div>

			<div class="col-sm-12 col-md-5 col-lg-3">
                <img class="m-b-30 m-x-auto max-height-300 img img-responsive" src="/svg/undraw_online_test.svg" alt="how does a website work?">
            </div>

			<div class="col-sm-12">
                <p>
                    <div class="alert alert-info">
                        This page is part of a series created as an introduction to web development concepts for people without any prior knowledge of the subject. Many technical details have been left out to keep it interesting!
                    </div>
                </p>
            </div>

        </div>
    </div>

    @include('websites.what-is.' . $topic)

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
                <h2>What's Next?</h2>

                <div class="m-b-30">
                    <p>You just read a page from a series explaining how web development works. If you are following along in order, click the button below for the next step in the process.</p>
                    <a class="btn btn-default" href="{{route('what-is', ['topic' => $next_topic])}}">{{$titles[$next_topic]}}</a>
                </div>

                <p>If this page left you wondering about other parts of web development, check out the answers to some other common questions below!</p>

                @foreach($titles as $topic => $title)
                    <div>
                        <a href="{{route('what-is', ['topic' => $topic])}}">{{$title}}</a>
                    </div>
                @endforeach

			</div>
        </div>
    </div>

@endsection