<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlicerController extends Controller
{
	public function index()
	{
		return view('projects.slicer.index');
	}
}
