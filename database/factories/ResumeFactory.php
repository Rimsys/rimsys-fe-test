<?php

namespace Database\Factories;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resume::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'location' => $this->faker->city . $this->faker->randomElement(['TN', 'AL', 'GA', 'MS', 'MI']),
            'job_title' => $this->faker->jobTitle,
            'portfolio_url' => $this->faker->url,
            'phone' => $this->faker->e164PhoneNumber,
            'about_me' => $this->faker->paragraph,
        ];
    }
}
