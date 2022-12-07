<?php

namespace Tests\Unit;

use App\Models\Experience;
use App\Models\Resume;
use CodencoDev\EloquentModelTester\HasModelTester;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExperienceModelTest extends TestCase
{
    use HasModelTester;
    use RefreshDatabase;

    /** @test */
    public function resumeModelHasExpectedSchema()
    {
        $this->modelTestable(Experience::class)
            ->assertHasColumns([
                'id',
                'resume_id',
                'job_title',
                'start_date',
                'end_date',
                'is_present',
                'created_at',
                'updated_at'
            ]);
    }

    /** @test */
    public function resumeModelHasExpectedFillables()
    {
        $this->modelTestable(Experience::class)
            ->assertCanFillables([
                'job_title',
                'start_date',
                'end_date',
                'is_present',
            ]);
    }

    /** @test */
    public function resumeModelBelongsToUserModel()
    {
        $this->modelTestable(Experience::class)
            ->assertHasBelongsToRelation(Resume::class);
    }
}
