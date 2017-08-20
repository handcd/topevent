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

    /**
    * Get the client to which the order belongs to
    */
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
