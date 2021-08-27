<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'meta' => $this->faker->paragraph(2),
            'body' => $this->faker->paragraph(10),
            'notes' => $this->faker->paragraph(1),
            'status' => 1,
        ];
    }
}
