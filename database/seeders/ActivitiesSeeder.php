<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activities;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = new Activities();
        $activities->title = 'Learn Laravel';
        $activities->description = 'Learn Laravel';
        $activities->type = 'todo';
        $activities->save();
    }
}
