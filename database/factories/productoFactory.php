<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class productoFactory extends Factory
{
    protected $model = producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_producto'=> $this->faker->sentence(),
            'informacion_producto'=> $this->faker->paragraph(),
            'Valor_producto'=> $this->faker->randomFloat(2)
        ];
    }
}
