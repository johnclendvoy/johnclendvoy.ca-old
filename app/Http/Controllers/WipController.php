<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WipController extends Controller
{
	public function home()
	{
		return view('wip.home');
	}

	// Tailwind
	public function gradient()
	{
		return view('wip.gradient');
	}

	// Grid
	public function polygondwanaland()
	{
		return view('wip.polygondwanaland');
	}

	// Other
	public function bg()
	{
		return view('wip.bg');
	}
}
