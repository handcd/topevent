<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;
use WIT\Comanda;

class Product extends Model
{
	 /**
     * Get the comanda that is asigned to this product
     */
    public function comanda()
    {
        return $this->belongsTo(Comanda::class);
    }
}
