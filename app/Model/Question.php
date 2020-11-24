<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Question extends Model
{
	
	protected $guarded = [];
	
	public function getRoutekeyName()
	{
		return 'slug';
	}
	public function user()
	{
		
		return $this->belongsTo(User::class);
	}

	public function replies()
	{
		return $this->hasMany(Reply::class);
	}

	public function category()
	{
		return $this->belongesTo(Category::class);
	}


	public function getPathAttribute()
	{
		return asset("api/question/$this->slug");
	}


}
