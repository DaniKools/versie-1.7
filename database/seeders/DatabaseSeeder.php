<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        \App\Models\Competition::factory(5)->create();

        \App\Models\School::factory(5)->create();

        \App\Models\Attendee::factory(50)->create();
    }
}
