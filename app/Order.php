<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	/**
     * Get the products associated with the comanda
     DATOS ORDEN
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
