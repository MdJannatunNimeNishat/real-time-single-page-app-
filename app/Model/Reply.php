<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Reply extends Model
{
	public function question()
	{
		return $this->belongesTo(Question::class);
	}

	public function user()
	{
		return $this->belongesTo(User::class);
	}

	public function like()
	{
		return $this->hasMany(Like::class);

	}
}
