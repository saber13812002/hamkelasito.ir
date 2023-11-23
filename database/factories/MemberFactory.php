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

        $remainder = $rand % 10 == 9;

        $gender = $this->faker->randomElement(['Male', 'Female', 'Other']);

        return [
            'profile_image' => $rand3digit,
            'thumbnail_image' => $rand3digit,
            'no' => $rand,

            'name' => $this->faker->firstName($gender) . ($remainder ? "and" : ""),
            'middle_name' => $this->faker->firstName($gender),
            'family' => $this->faker->lastName,
            'alias' => $this->faker->firstName($gender),

            'first_name_furigana' => $this->faker->firstName($gender),
            'last_name_furigana' => $this->faker->firstName($gender),

            'model_type' => $this->faker->randomElement(['Fashion Model', 'Fashion Model,Advertising Model', 'Advertising Model', 'Fitness Model', '']),
            'talent_type' => $this->faker->randomElement(['Talent', 'Radio personality', 'Comedian', '']),
            'actor_actress_type' => $this->faker->randomElement(['Tv actor', 'Movie actor', 'Movie actor,Tv actor', '']),
            'extra_type' => $this->faker->randomElement(['All types of extra', '']),

            'stage_name' => $this->faker->firstName($gender),
            'have_other_nationality' => $this->faker->randomElement(['yes', '']),
            'other_nationality' => $this->faker->randomElement(['Iranian', '']),
            'are_you_mixed' => $this->faker->randomElement(['yes', '']),
            'fathers_nationality' => $this->faker->randomElement(['Albania', 'Brazil', '']),
            'mothers_nationality' => $this->faker->randomElement(['Albania', 'Brazil', '']),

            'gender' => $gender,

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
            'language' => $this->faker->randomElement(['en', 'ja', 'fa']),
            'nationality' => $this->faker->randomElement(['Japan', 'England', 'USA']),
            'skills' => $this->faker->paragraph(),
            'skill_tags' => $this->faker->randomElement(['Basketball', 'Inline-skating', 'Tennis']),

        ];
    }
}
