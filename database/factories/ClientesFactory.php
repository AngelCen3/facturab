<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>1,
            'nombre' => fake()->word(),
            'contacto' => fake()->word(),
            'forma_pago' => fake()->randomElement(['Contado', 'Crédito']),
            'metodo_pago' => fake()->randomElement(['Efectivo', 'Tarjeta', 'Transferencia', 'Cheque']),
            'tel_celular' => fake()->numerify('##########'), // Genera un número de 10 dígitos
            'tel_local' => fake()->numerify('##########'), 
            'correouno' => fake()->unique()->safeEmail, // Genera una dirección de correo electrónico falsa única
            'correodos' => fake()->unique()->safeEmail, // Genera otra dirección de correo electrónico falsa única
            'direccion' => fake()->text(),
        ];
    }
}
