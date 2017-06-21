<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function fields()
	{
		return $this->belongsToMany(Field::class);
	}	
}
