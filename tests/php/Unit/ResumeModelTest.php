<?php

namespace Tests\Unit;

use App\Models\Experience;
use App\Models\Resume;
use App\Models\User;
use CodencoDev\EloquentModelTester\HasModelTester;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResumeModelTest extends TestCase
{
    use HasModelTester;
    use RefreshDatabase;

    /** @test */
    public function resumeModelHasExpectedSchema()
    {
        $this->modelTestable(Resume::class)
            ->assertHasColumns([
                'id',
                'user_id',
                'name',
                'location',
                'job_title',
                'portfolio_url',
                'email',
                'phone',
                'about_me',
                'created_at',
                'updated_at'
            ]);
    }

    /** @test */
    public function resumeModelHasExpectedFillables()
    {
        $this->modelTestable(Resume::class)
            ->assertCanFillables([
                'name',
                'location',
                'job_title',
                'portfolio_url',
                'email',
                'phone',
                'about_me',
            ]);
    }

    /** @test */
    public function resumeModelBelongsToUserModel()
    {
        $this->modelTestable(Resume::class)
            ->assertHasBelongsToRelation(User::class);
    }
}
