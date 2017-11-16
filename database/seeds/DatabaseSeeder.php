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
        // Administrador 
        DB::table('users')->insert([
            'name' => 'Admin Account',
            'email' => 'topevent@topevent.com.mx',
            'password' => bcrypt('tumama8514'),
        ]);

        // Seeders
        $this->call(CamposTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ComandaTableSeeder::class);
        $this->call(OrderTableSeeder::class);
    }
}
