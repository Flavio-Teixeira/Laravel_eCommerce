<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $faker->name,
            'description' => $faker->sentence,
            'phone' => $faker->phoneNumber,
            'mobile_phone'=> $faker->phoneNumber,
            'slug' => $faker->slug
        ];
    }
}
