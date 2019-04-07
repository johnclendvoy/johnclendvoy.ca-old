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
				'link' => '/projects',
				'image' => '/images/home/procedural_mountains.png',
				'image_alt' => 'Screenshot of Procedural Mountains',
				'description' => 'I\'ve used many different technologies and programming languages to develop games, software tools and other experiments.',
				'button_text' => 'View Projects'
			],
			[
				'title' => 'Designs',
				'link' => '/designs',
				'image' => '/images/home/tech_company.png',
				'image_alt' => 'Tech company homepage designed in tailwind',
				'description' => 'I practice my design skills by making interfaces for websites and web apps with CSS, HTML5, and <a href="http://tailwindcss.com" target="_blank">Tailwind</a>.',
				'button_text' => 'View Designs'
			],
			[
				'title' => 'Music/Videos',
				'link' => '/music',
				'image' => '/images/home/codezillla_small.jpg',
				'image_alt' => 'Codezillla logo',
				'description' => 'I produce music on my computer as well as program visuals for music videos using <a href="http://processing.org" target="_blank">Processing.</a>',
				'button_text' => 'Watch/Listen'
			],
			// [
			// 	'title' => 'Leather',
			// 	'link' => 'http://johntheleatherman.com',
			// 	'image' => '/images/home/wallet_small.jpg',
			// 	'image_alt' => 'Photo of a handmade wallet',
			// 	'description' => 'In my spare time like to make things like wallets from leather. I have built a website to showcase my creations.',
			// 	'button_text' => 'Visit JohnTheLeatherman.com'
			// ],
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

	public function music() 
	{
		// info that belongs in the title jumbotron
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
