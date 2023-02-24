<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(productosSeeder::class);
        $this->call(negocioSeeder::class);
        $this->call(negocios_productosSeeder::class);
        $this->call(propietarioSeeder::class);



    }
}
