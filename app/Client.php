<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	/**
	* Get the orders for the current client
	*/
	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
