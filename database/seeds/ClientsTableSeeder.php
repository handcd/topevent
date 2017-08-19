<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numClientes = 100;

        // Function to create fake Clients.
        (new Illuminate\Support\Debug\Dumper)->dump('Creando los '.$numClientes.' Clientes...');
    	factory(WIT\Client::class, 20)->create();
        (new Illuminate\Support\Debug\Dumper)->dump('Finalizada la creación de los clientes');
    }
}
