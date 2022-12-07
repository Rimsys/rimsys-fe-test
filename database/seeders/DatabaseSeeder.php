<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'test@example.org'
        ];

        User::factory(1)
            ->has(Resume::factory($userData)
                ->has(Experience::factory()->count(4))
                ->count(1))
            ->create($userData);
    }
}
