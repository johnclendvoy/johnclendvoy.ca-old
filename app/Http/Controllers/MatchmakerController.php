<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchmakerController extends Controller
{
	public function index()
	{
		return view('wip.matchmaker.index');
	}
	
	public function result(Request $request)
	{
		$result = 100;
		return $result;
	}
}
