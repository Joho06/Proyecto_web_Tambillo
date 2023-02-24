<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\propietario;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\propietario>
 */
class propietarioFactory extends Factory
{

    protected $model = propietario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_propietario'=> $this->faker->name(),
            'cedula_propietario'=> $this->faker->isbn10(),
            'telefono_propietario'=> $this->faker->phoneNumber(),
            'correo_propietario'=> $this->faker->email(),
            'password'=> $this->faker->password(),
            'negocio_id'=> $this->faker->numberBetween(1, 99)
        ];
    }
}
