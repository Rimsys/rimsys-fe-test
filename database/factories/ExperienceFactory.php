<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resume_id' => Resume::factory(),
            'job_title' => $this->faker->jobTitle,
            'start_date' => $startDate = now()->subMonths(rand(1, 10)),
            'end_date' => $startDate->addYears(rand(1,3)),
            'description' => $this->faker->paragraph,
        ];
    }
}
