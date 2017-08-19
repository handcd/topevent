<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
	/**
	* Get the products for this kind of field
	*/
	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
