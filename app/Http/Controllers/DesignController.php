<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class DesignController extends Controller
{
	// info that belongs in the title jumbotron
	public $social = [
		['site'=>'github', 'url'=>'http://github.com/johnclendvoy'],
	];

	public $description =
		'<p>The following is a sample of some of the custom web design work that I have done. All of these sites or pages were designed and developed by me front scratch.</p>';

	// List of all leather items
	public function index()
	{
		$title = 'Web Design';
		$links = $this->social;
		$description = $this->description;

		$category = []; //all
		$projects = Project::where('design', 1)->where('active', 1)->get()->sortBy('sort_order');
		return view('projects.index', compact('links', 'category', 'projects', 'title', 'description'));
	}

	public function home1()
	{
		return view('wip.home1');
	}

	public function timetracker()
	{
		return view('wip.timetracker');
	}

	public function listings1()
	{
		return view('wip.listings1');
	}


}
