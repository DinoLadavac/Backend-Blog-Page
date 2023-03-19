<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //function that defines types of attributes for factory faker
    public function definition(): array
    {
        return [
            "name" => $this->faker->word,
            "slug" => $this->faker->slug
        ];
    }
}
