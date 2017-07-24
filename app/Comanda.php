<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;
use WIT\Product;

class Comanda extends Model
{
	/**
     * Get the products associated with the comanda
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
