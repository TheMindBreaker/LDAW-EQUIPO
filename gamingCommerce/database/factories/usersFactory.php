<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userName' => $this->faker->word,
        'userEmail' => $this->faker->word,
        'userPassword' => $this->faker->word,
        'userRol' => $this->faker->randomDigitNotNull
        ];
    }
}
