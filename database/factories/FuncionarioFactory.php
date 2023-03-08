<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
           //'nome' => $this->faker->unique()->name(),
           //'email' => $this->faker->unique()->safeEmail(),
           //'senha' => $this->faker->password(5, 15),
           //'data_nascimento' => $this->faker->date(),
           //'endereco' => $this->faker->address(),
           //'telefone' => $this->faker->phoneNumber(),
          // 'periodo_trabalho' => $this->faker->randomElement(['Manhã', 'Tarde', 'Noite'])
        ];
    }
}
