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
		return view('pages.home');
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
