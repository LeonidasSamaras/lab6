<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vacation;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $startingDate = $this->faker->dateTimeBetween('now', '+1 week');
        return [
            'user_id' => $this->faker->randomElement($users),
            'from' => $startingDate,
            'to' => $this->faker->dateTimeBetween($startingDate, '+2 week')
        ];
    }
}
