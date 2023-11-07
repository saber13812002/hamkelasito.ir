<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand = mt_rand(1, 43);
        $rand3digit = sprintf("%03d", $rand);
        return [
            'profile_image' => $rand3digit,
            'thumbnail_image' => $rand3digit,
            'no' => $rand,
            'name' => $this->faker->firstName,
            'family' => $this->faker->lastName,
            'alias' => $this->faker->firstName,
            'town' => $this->faker->streetName,
            'type' => $this->faker->randomElement(['japanese', 'mixed', 'international']),
            'model_categories' => $this->faker->randomElement(['Artist', 'Model']),
            'age' => $this->faker->numberBetween(15, 57),
            'height' => $this->faker->numberBetween(150, 199),
            'bust' => $this->faker->numberBetween(60, 80),
            'waist' => $this->faker->numberBetween(60, 100),
            'hips' => $this->faker->numberBetween(60, 90),
            'shoe_size' => $this->faker->numberBetween(30, 44),
            'hair_color' => $this->faker->colorName,
            'eye_color' => $this->faker->colorName,

            'instagram_page_follower_count' => $this->faker->numberBetween(1, 10),
            'twitter_page_follower_count' => $this->faker->numberBetween(1, 10),
            'facebook_page_follower_count' => $this->faker->numberBetween(1, 10),
            'youtube_page_follower_count' => $this->faker->numberBetween(1, 10),
            'linkedin_page_follower_count' => $this->faker->numberBetween(1, 10),

            'biography' => $this->faker->paragraph(),
            'language' => 'English',
            'skills' => $this->faker->paragraph(),
            'skill_tags' => $this->faker->randomElement(['Basketball', 'Inline-skating', 'Tennis']),
        ];
    }
}
