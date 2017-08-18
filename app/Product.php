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

    /**
    * Get the DatosOrden that use the current Product
    */
    public function datosOrden()
    {
    	return $this->hasMany(datosOrden::class);
    }
}
