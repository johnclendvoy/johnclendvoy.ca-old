<?php

namespace App\Http\Controllers;

use PDF;
use Image;
use Illuminate\Http\Request;
use App\Http\Requests\PixelPainterFormRequest;

class PixelPainterController extends Controller
{
	// public $mapping = ['b','h','d','g','p','q'];
	public $mapping = ['b','c','d','e','p','q'];

	public $highest = 0;
	public $lowest = 255;

	public function index()
	{
		return view('pixel-painter.index');
	}

	public function store(PixelPainterFormRequest $request)
	{
		$number_of_columns = 30;
		$img = Image::make($request->image);
		$pixel_size = floor($img->width()/$number_of_columns);
		$img->pixelate($pixel_size)->greyscale();
		// $img->save(public_path('/uploads/images/pixel-painter/test.jpg'));
		$pixel_rows = [];

		$lowest = 255;
		$highest = 0;

		for($i = 0; $i < $img->width(); $i+= $pixel_size) {
			for($j = 0; $j < $img->height(); $j += $pixel_size) {
				$pixel_color = $img->pickColor($i, $j)[0];
				if($pixel_color < $lowest) {
					$lowest = $pixel_color;
				}
				if($pixel_color > $highest) {
					$highest = $pixel_color;
				}
			}
		}

		$this->lowest = $lowest;
		$this->highest = $highest;

		for($i = 0; $i < $img->width(); $i+= $pixel_size) {
			for($j = 0; $j < $img->height(); $j += $pixel_size) {
				$pixel_color = $img->pickColor($i, $j);
				$pixel_rows[$j][$i]['color'] = $this->normalizeColor($pixel_color[0]);
				$pixel_rows[$j][$i]['symbol'] = $this->mapToSymbol($pixel_color[0]);
			}
		}
		$legend = $this->mapping;

		PDF::setOptions(['dpi' => 300, 'defaultFont' => 'sans-serif']);
		return PDF::loadView('pixel-painter.pdf', compact('pixel_rows', 'legend'))->stream();

		// return view('pixel-painter.show', compact('pixel_rows'));
	}

	public function pdf()
	{
		PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
		$pdf = PDF::loadView('pixel-painter.pdf', $data);
		return $pdf->stream();

	// return $pdf->download('invoice.pdf');
	// $pdf = App::make('dompdf.wrapper');
	// $pdf->loadHTML('<h1>Test</h1>');

	}


	/*
	* map 0-255 -> 0-5 -> letter
	*/
	public function mapToSymbol($number)
	{
		$value = $number*(5/($this->highest - $this->lowest));
		return $this->mapping[$value];
	}

	/*
	* 0-255 -> lowest-highest
	* todo! this method is untested
	*/
	public function normalizeColor($number)
	{
		return $number*(($this->highest - $this->lowest)/255);
	}
}
