<?php

namespace Database\Seeders;

use App\Models\negocios_productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class negocios_productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        negocios_productos::factory(99)->create();
    }
}
