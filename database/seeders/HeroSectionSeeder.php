<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $HeroSection=[
            ['id'=>1,'services'=>'Training Courses','video'=>'public/hero/Blue 5 1.mp4'],
           ];
           HeroSection::insert($HeroSection);
    }
}
