<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                    ->map(fn($p)=> "<p>$p</p>")
                    ->implode(''),
        ];
    }
}
