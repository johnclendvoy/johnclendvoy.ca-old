<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
	protected $guarded = [];
	protected $dates = ['date'];

	public function advent()
	{
		return $this->belongsTo('App\Advent');
	}

	public function getReadyToOpenAttribute()
	{
		// return true;
		return $this->date->isToday() || $this->date->isPast();
	}

	public function getDaysRemainingAttribute()
	{
		return $this->advent->date->diffInDays($this->date);
	}

	public function getDaysUntilOpenAttribute()
	{
		return Carbon::now()->diffInDays($this->date);
	}

}
