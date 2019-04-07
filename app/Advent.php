<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advent extends Model
{
	protected $guarded = [];
	protected $dates = ['date'];

	public function days()
	{
		return $this->hasMany('App\Day');
	}
}
