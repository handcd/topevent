<?php

use Illuminate\Database\Seeder;
use WIT\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $producto = Product::create(['nombre'=>'Tinga','descripcion'=>'Tacos de Tinga','Precio'=>30]);
    	 $producto->fields()->sync([1,2]);
    	 $producto2 = Product::create(['nombre'=>'Chicharrón en Salsa Verde','descripcion'=>'Tacos de Chicharrón en Salsa Verde','Precio'=>30]);
    	 $producto2->fields()->sync([1,3]);
    	 $producto3 = Product::create(['nombre'=>'Pollo con Mole','descripcion'=>'Tacos de Pollo con Mole','Precio'=>30]);
    	 $producto3->fields()->sync([1]);
    	 $producto4 = Product::create(['nombre'=>'Tinga','descripcion'=>'Tacos de Tinga','Precio'=>30]);
    	 $producto4->fields()->sync([1]);
    }
}
