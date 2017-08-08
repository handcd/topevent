<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	/**
     * Get the extra data from the order
     */
    public function datosOrden()
    {
        return $this->hasMany(DatosOrden::class);
    }
}
