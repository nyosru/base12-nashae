<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GoodSeeder;

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
           $this->call([
            // CatSeeder::class,
            GoodSeeder::class,
            // GoodImageSeeder::class,
            // PageSeeder::class,
            // AutorSeeder::class
        ]);
    }
}
