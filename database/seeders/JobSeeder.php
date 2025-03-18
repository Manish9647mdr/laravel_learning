<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;


/**
 * Seeder for the generating dummy job data
 */
class JobSeeder extends Seeder
{
    /**
     * Create 100 dummy job records
     */
    public function run(): void
    {
        Job::factory(100)->create();
    }
}
