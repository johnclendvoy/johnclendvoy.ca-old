<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

	// List of all leather items
	public function index()
	{
		$title = 'Website Development';

		$category = []; //all
		$projects = Project::where('design', 1)->where('active', 1)->get()->sortBy('sort_order');
		return view('websites.index', compact('category', 'projects', 'title'));
	}

	public function how_it_works()
	{
		return view('websites.how_it_works');
	}

	public function whatIs(string $topic)
	{
		$next = [
			'web-browser' => 'source-code',
			'source-code' => 'web-server',
			'web-server' => 'database',
			'database' => 'domain-name',
			'domain-name' => 'web-browser',
		];

		$titles = [
			'web-browser' => 'What is a Web Browser?',
			'source-code' => 'What is Source Code?',
			'web-server' => 'What is a Web Server?',
			'database' => 'What is a Database?',
			'domain-name' => 'What is a Domain Name?',
		];

		return view('websites.what-is.show',[
			'topic' => $topic,
			'next_topic' => $next[$topic],
			'titles' => $titles,
		]);
	}

}
