<?php

namespace Database\Factories;

use App\Models\football;
use Illuminate\Database\Eloquent\Factories\Factory;

class FootballFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Football::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


            return[
            'team'=>$this->faker->streetName,
            'sport_id'=>1,
            'league_id'=>1,
            'team_id'=>$this->faker->randomFloat(0, 1000, 4000),
            'points'=>$this->faker->randomFloat(0, 0, 40),
            'wins'=>$this->faker->randomFloat(0, 0, 20),
            'losses'=>$this->faker->randomFloat(0, 0, 20),
            'draws'=>$this->faker->randomFloat(0, 0, 20),
            'gd'=>$this->faker->randomFloat(0, 0, 20),
            ];

    }
}
