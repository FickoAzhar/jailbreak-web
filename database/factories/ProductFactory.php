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
            'category_id' => mt_rand(1,3),
            'year_built' => $this->faker->year(),
            'sertificate'=> $this->faker->sentence(mt_rand(2,8)),
            'tot_floors' => mt_rand(1,5),
            'luas' => mt_rand(1,5),
            'bedroom' => mt_rand(1,3),
            'bathroom' => mt_rand(1,3),
            'facility' => $this->faker->sentence(mt_rand(2,8)),
        ];
    }
}
