<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth')->only('dashboard', 'phpInfo');
    }

	public function phpInfo()
	{
		return phpinfo();
	}

	public function home() 
	{
		$sections = [
			[
				'title' => 'Website Development',
				'link' => '/website-development',
				'image' => '/svg/undraw_programming.svg',
				'image_alt' => 'Programmer with multiple screens',
				'image_alt' => 'Website Development',
				'description' => 'I help people build their online prescence by designing, developing and hosting custom websites and web apps with <a href="https://laravel.com" target="_blank">Laravel</a> and <a href="http://tailwindcss.com" target="_blank">Tailwind</a>.',
				'button_text' => 'Learn More'
			],
			[
				'title' => 'Software',
				'link' => '/software',
				'image' => '/svg/undraw_progressive_app.svg',
				'image_alt' => 'Software Development',
				'description' => 'I\'ve used many different technologies to develop software tools, games and other experiments.',
				'button_text' => 'View Software'
			],
			[
				'title' => 'Digital Art',
				'link' => '/art',
				'image' => '/svg/undraw_art.svg',
				'image_alt' => 'Codezillla logo',
				'description' => 'I produce electronic music as well as create visuals for music videos using <a href="http://processing.org" target="_blank">Processing.</a>',
				'button_text' => 'Watch/Listen'
			],
		];
		return view('pages.home', compact('sections'));
	}

	public function dashboard() 
	{
		$objects = [
			'projects',
			'messages',
		];
		return view('pages.dashboard', compact('objects'));
	}

	public function art() 
	{
		$links = [
			['site'=>'soundcloud', 'url'=>'http://soundcloud.com/codezillla'],
			['site'=>'facebook', 'url'=>'http://facebook.com/codezilllla'],
			['site'=>'bandcamp', 'url'=>'http://codezillla.bandcamp.com'],
			['site'=>'youtube-play', 'url'=>'https://www.youtube.com/channel/UCyCkHYh4wEWGcuXDD-fUBeQ'],
			['site'=>'spotify', 'url'=>'https://open.spotify.com/artist/1QKmiA5eescjubPxeRwk1A'],
		];
		$youtubeCodes = [
			'qpeyMdG26WI',
			'NGtWvhGacao',
			'aIxKTQYJ63g',
			'HPn66QmTavE',
			'2-RtQdfYkGk',
			'KHqcFudRR4U',
			'BrhSQzrrcz4'
		];
		return view('pages.music', compact('youtubeCodes', 'links'));
	}

	public function contact() 
	{
		$links = [
			['site'=>'github', 'url'=>'http://github.com/johnclendvoy'],
			['site'=>'twitter', 'url'=>'http://twitter.com/johnclendvoy'],
			['site'=>'linkedin', 'url'=>'https://linkedin.com/in/johnclendvoy'],
		];
		$sent = false;
		return view('pages.contact', compact('sent', 'links'));
	}
}
