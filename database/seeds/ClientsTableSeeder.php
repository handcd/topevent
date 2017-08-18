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
        // Function to create fake Clients.
    	factory(WIT\Client::class, 100)->create();
    }
}
