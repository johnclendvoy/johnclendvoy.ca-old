<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
	protected $fillable = ['word'];

	public static function withValue($word)
	{
		return Word::where('word', $word)->get()->first();
	}
}
