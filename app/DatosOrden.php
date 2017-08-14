<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class DatosOrden extends Model
{
	protected $table = 'datos_orden';

	 /**
     * Get the order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
