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
        // Step 1
        // $this->call(CategoriesSeeder::class);
        
        // Step 2
        // $this->call(ComicsSeeder::class);

        // Step 3
        // $this->call(DetailComicsSeeder::class);

        // Step 4
        $this->call(ListImageComicSeeder::class);
    }
}
