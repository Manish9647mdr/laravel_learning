<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Employer Model Class
 * Define a one-to-may relationship where an employer can have multiple jobs
 */

class Employer extends Model
{
    use HasFactory;

    // Get the list of jobs posted by the employer
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
