<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     //Function that defines types of attributes for factory faker
    public function definition(): array
    {
        $tags_in_use=$this->faker->randomElements(["Advice", "School", "Errors", "Fun", "Personal", "Spoiler", "important!", "Bugfix", "Design", "News"],$this->faker->numberBetween(0,3));
         return [
            "title" => $this->faker->sentence,
            "excerpt" => $this->faker->sentence,
            "body" => $this->faker->paragraph,
            "user_id" => User::factory(),
            "tags" => implode(", ",$tags_in_use) 
        ];
    }
}
