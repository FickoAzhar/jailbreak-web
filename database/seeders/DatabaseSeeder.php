<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;

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
        Blog::factory(20)->create();
        Category::create([
            'name' => 'Rumah',
            'slug' => 'rumah'
        ]);

        Category::create([
            'name' => 'Apartement',
            'slug' => 'apartement'
        ]);

        Category::create([
            'name' => 'Villa',
            'slug' => 'villa'
        ]);
        Product::factory(20)->create();
    }
}
