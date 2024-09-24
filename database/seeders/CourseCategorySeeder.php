<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coursecategory')->insert([
            ['CourseIcon' => 'icon1.png', 'CourseName' => 'Web Development', 'CourseDescription' => 'Learn to build websites.'],
            ['CourseIcon' => 'icon2.png', 'CourseName' => 'Data Science', 'CourseDescription' => 'Analyze data and gain insights.'],
            // Add more categories as needed
        ]);
    }
}
