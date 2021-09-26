<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Task;
// use App\Models\Card;
// use App\Models\Desk;
// use App\Models\DeskList;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Task::factory(5)->create();
        // Desk::factory(5)->create();
        // DeskList::factory(10)->create();
        // Card::factory(5)->create();
        Task::factory(5)->create();
    }
}
