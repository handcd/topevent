<?php

use Illuminate\Database\Seeder;
use WIT\Field;

class FieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Field::create(['title'=>'Tacos de Guisado']);
    	Field::create(['title'=>'Tacos de Guisado Tradicionales']);
    	Field::create(['title'=>'Parrillada']);
    }
}
