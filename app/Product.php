<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function fields()
	{
		$this->belongsToMany(Field::class);
	}
}
