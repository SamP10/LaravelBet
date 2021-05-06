<?php

namespace Database\Factories;

use App\Models\horse;
use Illuminate\Database\Eloquent\Factories\Factory;

class horseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sport_id'=>2,
            'name'=>$this->faker->domainWord,
            'jockey'=>$this->faker->name,
            'age'=>$this->faker->randomFloat(0, 5, 15),
            'wins'=>$this->faker->randomFloat(0, 0, 10),
        ];
    }
}
