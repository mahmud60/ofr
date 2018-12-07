<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Research extends Model
{

	public static function boot()
	{
		parent::boot();

		static::creating(function($research){
			$research->user_id = auth()->user()->id;
		});
	}
    
}
