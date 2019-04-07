<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordPair extends Model
{
	protected $guarded = [];

	// HELPERS

	public function findPair($left, $right)
	{
		return WordPair::where('left_id', $left->id)->where('right_id', $right->id)->get()->first();
	}

	public function left()
	{
		return $this->belongsTo('App\Word', 'left_id');
	}

	public function right()
	{
		return $this->belongsTo('App\Word', 'right_id');
	}
}
