<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customar>
 */
class customarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'DOB'=>fake()->date(),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'city'=>fake()->city()
        ];
    }
}
