<?php

namespace Database\Factories;


use App\Models\negocio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\negocio>
 */
class negocioFactory extends Factory
{
    protected $model = negocio::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_negocio' => $this->faker->randomElement(['VERDULERIA', 'ZAPATERIA', 'ROPA', 'VIVERES', 'CANISERIA']),
            'informacion_negocio' => $this->faker->paragraph(),
            'ruc_negocio' => $this->faker->sentence(),
            'telefono_negocio' => $this->faker->phoneNumber(),
            'direccion_negocio' => $this->faker->address(),
            'correo_negocio' => $this->faker->email()
        ];
    }
}
