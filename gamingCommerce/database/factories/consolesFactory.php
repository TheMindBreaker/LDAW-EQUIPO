<?php

namespace Database\Factories;

use App\Models\consoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class consolesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = consoles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'conName' => $this->faker->word,
        'conBrand' => $this->faker->word
        ];
    }
}
