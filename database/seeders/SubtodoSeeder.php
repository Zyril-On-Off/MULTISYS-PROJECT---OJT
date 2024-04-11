<?php

namespace Database\Seeders;

// database/seeders/SubtodoSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Subtodo;
use App\Models\Todo;

class SubtodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create subtodos associated with a Todo
        Subtodo::create([
            'todo_id' => 1, 
            'task' => 'Research topic',
            'status' => false,
        ]);

        Subtodo::create([
            'todo_id' => 1,
            'task' => 'Write draft',
            'status' => false,
        ]);

    }
}
