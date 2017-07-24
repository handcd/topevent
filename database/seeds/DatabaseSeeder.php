<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Humberto Alcocer',
            'email' => 'humbertowoody@gmail.com',
            'password' => bcrypt('Eddymascota22"'),
        ]);
        $this->call(ClientsTableSeeder::class);
        $this->call(ComandaTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(OrderTableSeeder::class);
    }
}
