<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
   	protected $fillable = [
   		'name',
   		'email',
   		'comments'
    ];

    public function getDates()
    {
    	return ['created_at','updated_at'];
    }

}
