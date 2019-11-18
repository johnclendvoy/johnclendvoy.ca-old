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
				'title' => 'Software',
				'link' => '/software',
				// 'image' => '/images/home/procedural_mountains.png',
				'image' => '/svg/undraw_programming.svg',
				'image_alt' => 'Programmer with multiple screens',
				'description' => 'I\'ve used many different technologies to develop games, software tools and other experiments.',
				'button_text' => 'View Software'
			],
			[
				'title' => 'Web Design',
				'link' => '/design',
				// 'image' => '/images/home/tech_company.png',
				'image' => '/svg/undraw_experience_design.svg',
				'image_alt' => 'Web Design',
				'description' => 'I practice my design skills by making interfaces for websites and web apps with CSS, HTML5, and <a href="http://tailwindcss.com" target="_blank">Tailwind</a>.',
				'button_text' => 'View Designs'
			],
			[
				'title' => 'Digital Art',
				'link' => '/art',
				// 'image' => '/images/home/codezillla_small.jpg',
				'image' => '/svg/undraw_art.svg',
				'image_alt' => 'Codezillla logo',
				'description' => 'I produce music on my computer as well as program visuals for music videos using <a href="http://processing.org" target="_blank">Processing.</a>',
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
