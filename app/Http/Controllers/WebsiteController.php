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
