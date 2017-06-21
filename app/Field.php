<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
	public function products()
	{
		return $this->belongsToMany(Product::class);
	}

	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}
}
