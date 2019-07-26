<?php

namespace App\Http\Controllers;

use Arr;
use App\Photo;
use App\Project;
use App\Category;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ProjectFormRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	use P5Projects;
	use ImageTrait;

	// info that belongs in the title jumbotron
	public $social = [
		['site'=>'github', 'url'=>'http://github.com/johnclendvoy']
	];

	public function __construct()
    {
        $this->middleware('auth')->only(['store', 'admin', 'create', 'edit', 'update', 'delete' ]);
    }

	// List of all leather items
	public function admin()
	{
		$projects = Project::all();
		return view('projects.admin', compact( 'projects'));
	}

	// List of all leather items
	public function index()
	{
		$title = 'Software';
		$links = $this->social;
		$category = []; //all

		$projects = Project::where('design', 0)->where('active', 1)->get()->sortByDesc('sort_order');

		return view('projects.index', compact('links', 'category', 'projects', 'title'));
	}


	// Show a specific project
	public function slug($slug)
	{
		$project = Project::where('slug', $slug)->first();
		return view('projects.live.'.$slug, compact('project'));
	}

	// Show a form to add an item
	public function create()
	{
		return $this->edit(new Project);
	}

	// add an item
	public function store(ProjectFormRequest $request)
	{
		if(empty($request->slug))
		{
			Arr:set($request, 'slug', '');
		}

		$project = Project::create($request->all());

		// save image if it was entered
		if(!empty($request->file('image')))
		{
			if(empty($project->feature_id))
			{
				// new feature photo
				$photo = Photo::create();
				$photo->path = $this->saveAllImages($request->file('image'), 'projects', $photo->id);
				$photo->save();
				$project->update(['feature_id' => $photo->id]);
			}
		}
		return redirect('/projects/admin');
	}

	// Show a form to change an object in the DB
	public function edit(Project $project)
	{
		return view('projects.create', compact('project'));
	}

	// Change an object in the DB
	public function update(ProjectFormRequest $request, Project $project)
	{
		if(empty($request->slug))
		{
			Arr::set($request, 'slug', '');
		}

		$project->update($request->all());

		// save image if it was entered
		if($request->file('image'))
		{
			if(empty($project->feature_id))
			{
				// new feature photo
				$photo = Photo::create();
				$photo->path = $this->saveAllImages($request->file('image'), 'projects', $photo->id);
				$photo->save();
				$project->update(['feature_id' => $photo->id]);
			}
			else
			{
				// update feature photo
				$photo = $project->featurePhoto;
				$project->featurePhoto->path = $this->saveAllImages($request->file('image'), 'projects', $photo->id);
				$project->featurePhoto->save();
			}
		}

		return redirect('/projects/admin');
	}

	// Show a form to add a leather item
	public function destroy($project)
	{
		$project = Project::find($project);
		$project->delete();
		return redirect('/projects/admin');
	}




}
