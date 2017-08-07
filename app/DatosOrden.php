<?php

namespace WIT;

use Illuminate\Database\Eloquent\Model;

class DatosOrden extends Model
{
	protected $table = 'datos_orden';

	 /**
     * Get the comanda that is asigned to this product
     ORDEN
     */
    public function comanda()
    {
        return $this->belongsTo(Comanda::class);
    }
}
