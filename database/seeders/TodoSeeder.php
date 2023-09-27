<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todo = new Todo();
        $todo->title = 'Learn Laravel';
        $todo->slug = 'learn-laravel';
        $todo->description = 'Learn Laravel';
        $todo->completed = false;
        $todo->save();

        $todo2 = new Todo();
        
    }
}
