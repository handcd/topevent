<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	/**
	* The mass-assignable elements of the table
	*/
	protected $fillable = ['nombre','apellido','email','phone'];

	/**
	* Get the orders for the current client
	*/
	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
