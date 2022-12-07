<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'start_date',
        'end_date',
        'is_present',
        'description',
    ];

    protected $casts = [
        'is_present' => 'boolean'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'start_date',
        'end_date'
    ];

    public function resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
