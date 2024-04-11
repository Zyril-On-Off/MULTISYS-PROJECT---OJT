<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'task' => 'Complete assignment',
            'status' => false,
        ]);

    }
}
