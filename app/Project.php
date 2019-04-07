<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $guarded = ['image'];

	public function image($size)
	{
		$path = '/uploads/images/projects/'. $size . '/';

		if($this->feature_id)
		{
			$name = $this->featurePhoto->path;
			return $path.$name;
		}
		/*
		elseif($this->photos->count() )
		{
			$name = $this->photos->first()->path;
			return $path.$name;
		}
		*/
		else
		{
			if($size == 'thumbnail_small')
			{

			}
			switch($size)
			{
				case 'thumbnail':
					return 'http://via.placeholder.com/200x200';
				case 'thumbnail_small':
					return 'http://via.placeholder.com/80x80';
				default;
					return 'http://via.placeholder.com/400x400';
			}
		}
	}

	public function featurePhoto()
	{
		return $this->belongsTo('App\Photo', 'feature_id');
	}

	// Attributes 

	public function getResponsiveIconsAttribute()
	{
		$string = '';
		if($this->xs_screen)
		{
			$string .= '<i class="fa fa-mobile"></i> ';
		}
		if($this->sm_screen)
		{
			$string .= '<i class="fa fa-tablet"></i> ';
		}
		if($this->md_screen)
		{
			$string .= '<i class="fa fa-laptop"></i> ';
		}
		if($this->lg_screen)
		{
			$string .= '<i class="fa fa-desktop"></i> ';
		}
		return $string;
	}
}
