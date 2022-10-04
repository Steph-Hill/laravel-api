<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tocality;
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

        Tocality::factory(30)->create();

        //User::factory(3)->create();
    }
}
