<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['email','sms','chat']),
            'from_user_account' => 1,
            'stripped_signature' => $this->faker->sentence(3),
            'stripped_text' => $this->faker->paragraphs(3, true),
        ];
    }
}
