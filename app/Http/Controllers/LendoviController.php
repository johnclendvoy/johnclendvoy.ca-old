<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendoviController extends Controller
{
	public function index($word = 'hello', Request $request)
	{
		// offset
		$x = $request->get('x', 10);
		$y = $request->get('y', 10);

		// center
		$cx = $request->get('cx', '');
		$cy = $request->get('cy', '');

		// font size
		$size = $request->get('size', 100);

		// colors
		$bg = $request->get('bg', '000000');
		$colors = [
			'7c1600',
			'ff4401',
			'fe7c00',
			'feda00',
			'd8d487'
		];
		if($request->colors)
		{
			$colors = explode(',', $request->colors);
		}

		// text
		$word = str_replace('-', ' ', $word);

		return view('lendovi.index', compact('word', 'x', 'y', 'cx', 'cy', 'size', 'bg', 'colors'));
	}
}
