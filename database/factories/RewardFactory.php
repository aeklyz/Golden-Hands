<?php

namespace Database\Factories;

use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reward>
 */
class RewardFactory extends Factory
{
    protected $model = Reward::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence, // Generates a random sentence for the description
            'points' => $this->faker->numberBetween(10, 500), // Random points between 10 and 500
            'is_redeemable' => $this->faker->boolean(80), // 80% chance the reward is redeemable
            'customer_id' => User::inRandomOrder()->first()->id, // Assign a random customer ID from the users table
        ];
    }
}