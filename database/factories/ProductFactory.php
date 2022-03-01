<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class; 

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'lokasi' => $this->faker->address(),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(2,10)))
                    ->map(fn($p)=> "<p>$p</p>")
                    ->implode(''),
            'category_id' => mt_rand(1,3)
        ];
    }
}
