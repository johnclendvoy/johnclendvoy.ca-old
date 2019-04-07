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
		'<p>If I ever want to test out an idea for a design, or mock up an interface for a web application, I have been turning to <a href="//tailwindcss.com">Tailwind</a> to quickly make prototypes.  The Tailwind designs use Flexbox for layout, otherwise I usually use <a href="//getbootstrap.com">Bootstrap</a> as a starting point. All of these designs are coded from scratch and are my own work. They may not be fully optimized for all for all screen sizes yet; see the icons below the title to see how responsive they are.</p>';

	// List of all leather items
	public function index()
	{
		$title = 'Front-End Designs';
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
