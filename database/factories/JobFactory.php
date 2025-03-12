<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => \App\Models\Employer::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(5),
            'location' => $this->faker->city,
            'salary' => $this->faker->randomElement(['$30,000', '$50,000', '$75,000', '$100,000']),
            'scheduled_date' => $this->faker->randomElement(['Fulltime', 'Parttime']),
            'url' => $this->faker->url,
            'featured' => $this->faker->randomElement([true, false]),
        ];
    }
}
