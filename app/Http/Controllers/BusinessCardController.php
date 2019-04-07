<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BusinessCardController extends Controller
{
	public function index()
	{
		// PDF::setOptions(['dpi' => 150]);
		// return view('business-cards.index');
		return PDF::loadView('business-cards.index')->stream();
	}
}
