<?php

use Illuminate\Database\Seeder;
use WIT\Campo;

class CamposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create basic fields
    	Campo::create(['nombre'=>'Si/No','html'=>'checkbox']);
    	Campo::create(['nombre'=>'Numérico','html'=>'number']);
    	Campo::create(['nombre'=>'Texto','html'=>'text']);
    }
}
