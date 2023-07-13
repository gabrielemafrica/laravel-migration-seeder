<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake('it_IT') -> company(),
            'stazione_di_partenza' => fake('it_IT') -> city(),
            'stazione_di_arrivo' => fake('it_IT') -> city(),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time() ,
            'codice_treno' => fake() -> unique() -> regexify('[A-Z]{2}[0-9]{4}'),
            'numero_carrozze' => fake() -> numberBetween(4, 22),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}
