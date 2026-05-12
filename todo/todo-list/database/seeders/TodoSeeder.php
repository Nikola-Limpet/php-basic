<?php

namespace Database\Seeders;

use App\Models\TODO;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run(): void
    {
        TODO::create([
            'title' => 'Learn Laravel routing',
            'description' => 'Explore web.php and API resources',
            'completed' => true,
        ]);

        TODO::create([
            'title' => 'Build a React frontend',
            'description' => 'Create components with Vite bundling',
            'completed' => false,
        ]);

        TODO::create([
            'title' => 'Understand Eloquent ORM',
            'description' => 'Practice migrations, models, and controllers',
            'completed' => false,
        ]);
    }
}
