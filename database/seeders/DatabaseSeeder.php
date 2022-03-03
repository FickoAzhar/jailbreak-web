<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

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
        User::create([
            'name' => 'Ficko Azhar',
            'username' => 'Ficko',
            'email' =>'Ficko@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

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
