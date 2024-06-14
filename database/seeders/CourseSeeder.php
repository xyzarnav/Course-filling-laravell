<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course; // Import the Course model

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'title' => 'Artificial Intelligence (AI)',
                'duration' => 2, // Assuming 2 months duration
            ],
            [
                'title' => 'Cybersecurity',
                'duration' => 3, // Assuming 3 months duration
            ],
            [
                'title' => 'Data Science',
                'duration' => 3, // Assuming 3 months duration
            ],
            [
                'title' => 'Cloud Computing',
                'duration' => 1, // Assuming 1 month duration
            ],
            [
                'title' => 'Web Development',
                'duration' => 2, // Assuming 2 months duration
            ],
        ];

        foreach ($courses as $course) {
            Course::create([
                'title' => $course['title'],
                'duration' => $course['duration'],
            ]);
        }
    }
}

