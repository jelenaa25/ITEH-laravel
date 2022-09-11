<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Vrsta;
use Illuminate\Database\Eloquent\Factories\Factory;

class UmetnickoDeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'godina' => $this->faker->numberBetween($min = 1950, $max = 2022) ,
            'autor_id' => $this->faker->numberBetween($min = 1, $max = Autor::count()),
            'vrsta_id' => $this->faker->numberBetween($min = 1, $max = Vrsta::count()),
            'cena' => $this->faker->numberBetween($min = 1000, $max = 1000000) ,
       
        ];
    }
}
