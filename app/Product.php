<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function fields()
	{
		return $this->belongsToMany(Field::class);
	}
}
