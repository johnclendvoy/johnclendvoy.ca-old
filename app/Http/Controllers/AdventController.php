<?php

namespace App\Http\Controllers;

use Hash;
use App\Day;
use App\Advent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\AdventFormRequest;

class AdventController extends Controller
{
	public function clear()
	{
		Advent::all()->each(function($a){
			$a->days->each(function($d){
				$d->delete();
			});
			$a->delete();
		});
		return 'deleted all';
	}
	public function index( $code = null)
	{
		if(!empty($code))
		{
			$advent = Advent::where('code', $code)->get()->first();
			if(!empty($advent))
			{
				return view('projects.advent.show', compact('advent'));
			}
		}
		return view('projects.advent.index');
	}

	public function day($code, $day_id)
	{
		$day = Day::find($day_id);
		if(!empty($day) && $day->readyToOpen)
		{
			return view('projects.advent.day', compact('day'));
		}
		else
		{
			return redirect('/advent/'.$code);
		}
	}

	public function store(AdventFormRequest $request)
	{
		$advent = Advent::create($request->all());
		$advent->code = Carbon::now()->format('U').'-'.$advent->id;
		$advent->save();

		$start = Carbon::now();
		while($start->lte($advent->date))
		{
			$links = $this->getLink();
			$quote = $this->getQuote();

			$advent->days()->create([
				'date' => $start,
				'url' => $links['url'],
				'embed_url' => $links['embed_url'],
				'still_url' => $links['still_url'],
				'quote' => $quote,
			]);

			$start = $start->addDay();
		}
		return redirect('/advent/'. $advent->code);
	}

	public function getLink()
	{
		$tag = 'random';
		$url = 'https://api.giphy.com/v1/gifs/random?api_key=EDJMF67DNEIIJmTyBSldSfNVQ23OHCMp&tag='.$tag.'&rating=G';
		$result = json_decode(file_get_contents($url));

		return [
			'still_url' => $result->data->images->fixed_height_still->url,
			'embed_url' => $result->data->embed_url,
			'url' => $result->data->url
		];
	}

	public function getQuote()
	{
		$quote = null;
		while(empty($quote))
		{
			// sleep(1);
			$key = substr(Carbon::now()->format('U'), -6);
			$url = 'http://api.forismatic.com/api/1.0/?method=getQuote&key='.$key.'&format=json&lang=en';
			$result = json_decode(file_get_contents($url));
			if(!empty($result))
			{
				$quote = $result->quoteText;
			}
		}
		return $quote;
	}

}
