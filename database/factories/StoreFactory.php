<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(), // Nome de empresa (mais realista para uma loja)
            'description' => $this->faker->sentence(), // Frase aleatória
            'phone' => $this->faker->phoneNumber(), // Número de telefone fixo
            'mobile' => $this->faker->e164PhoneNumber(), // Número de telefone no formato E.164
            'slug' => $this->faker->slug(), // Slug para a URL da loja
        ];
    }
}
