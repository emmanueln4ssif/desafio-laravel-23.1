<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'data_nascimento' => $this->faker->date(),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->phoneNumber(),
            'data_cadastro' => $this->faker->dateTimeBetween('-15 weeks', '-1 week'), //usuarios cadastrados entre 15 e 4 semanas atras
            'data_pagamento' => $this->faker->dateTimeBetween('-4 weeks', 'now'), // pagamentos 
            'data_validade' => $this->faker->dateTimeInInterval('now', '+30 days')
        ];
    }
}
