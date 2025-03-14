<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{

    /**
     * すべての求人情報を取得する。
     * 
     * @return array 求人情報のリスト（各求人はID、タイトル、給与を含む）。
     */
    public static function all(): array
    {
        // 求人情報の配列を返す（データは固定）。
        return  [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Designer',
                'salary' => '$35,000'
            ]
        ];
    }

    /**
     * Find a job by its ID.
     * 
     * @param int $id the Id of the job to find
     * @return array The job data is found
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If the job is not found.
     */
    public static function find(int $id): array
    {
        // Search for the first job in the list that matches the given ID
        $job =   Arr::first(static::all(), fn($job) => $job['id'] == $id);

        // If no match job is found, return a 404 error
        if (! $job) {
            abort(404);
        }

        // Return the found job data
        return $job;
    }
}
