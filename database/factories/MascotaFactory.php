<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'tamano' => $this->faker->randomElement(['Chico', 'Mediano', 'Grande']),
            'edad' => $this->faker->numberBetween(1, 10),
            'sexo' => $this->faker->randomElement(['Macho', 'Hembra']),
            'tipo' => $this->faker->randomElement(['Perro', 'Gato', 'Otro']),
            'id_usuario' => $this->faker->numberBetween(1,2),
            'id_estado_mas' => $this->faker->numberBetween(1,2),
            'created_at' => now(),
            'updated_at' => now(),
        ];



        /** esto es cuando ya se tenga la relacion entre tablas
         *  return [
            'nombre' => $this->faker->name,
            'tamano' => $this->faker->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'edad' => $this->faker->numberBetween(1, 10),
            'sexo' => $this->faker->randomElement(['Macho', 'Hembra']),
            'tipo' => $this->faker->randomElement(['Perro', 'Gato', 'Otro']),
            'id_usuario' => function () {
                return App\Models\Usuario::factory()->create()->id;
            },
            'id_estado_mas' => function () {
                return App\Models\EstadoMascota::factory()->create()->id;
            },
            'created_at' => now(),
            'updated_at' => now(),
        ];*/
    }
}
