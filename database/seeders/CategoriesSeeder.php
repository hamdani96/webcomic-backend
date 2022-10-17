<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'category'      => 'Romance',
            'created_by'    => 3,
        ]);

        Categories::create([
            'category'      => 'Adventure',
            'created_by'    => 3,
        ]);

        Categories::create([
            'category'      => 'Fantasy',
            'created_by'    => 3,
        ]);
    }
}
