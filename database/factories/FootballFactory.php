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
        $teamnames = [
            'Arsenal',
            'Aston Villa',
            'Brighton & Hove Albion',
            'Burnley',
            'Chelsea',
            'Crystal Palace',
            'Everton',
            'Fulham',
            'Leeds United',
            'Leicester City',
            'Liverpool',
            'Manchester City',
            'Manchester United',
            'Newcastle United',
            'Sheffield United',
            'Southampton',
            'Tottenham Hotspur',
            'West Bromwich Albion',
            'West Ham United',
            'Wolverhampton Wanderers'
        ];
        return [
            'sport_id'=>1,
            'team'=>$this->,
            'team_id'=>$this->faker->unique(),
            'league_id'=>1,
            'points'=>$this->faker->randomFloat(0, 0, 40),
            'wins'=>$this->faker->randomFloat(0, 0, 20),
            'loses'=>$this->faker->randomFloat(0, 0, 20),
            'draws'=>$this->faker->randomFloat(0, 0, 20),
            'gd'=>$this->faker->randomFloat(0, 0, 20),
        ];
    }
}
