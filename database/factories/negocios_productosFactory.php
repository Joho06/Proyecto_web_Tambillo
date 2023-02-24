<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\negocios_productos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class negocios_productosFactory extends Factory
{
   protected $model = negocios_productos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'negocio_id' => $this->faker->numberBetween(1, 99),
            'producto_id' => $this->faker->numberBetween(1, 99)
        ];
    }
}
