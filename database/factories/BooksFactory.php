<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'author' => $this->faker->name,
            'publisher' => $this->faker->name,
            'description' => $this->faker->text,
            'image' => Books::$defaultImageFromCdn,
            'book_categories' =>  $this->faker->randomElement(Books::$bookCategories),
            'published_date' => $this->faker->date(),
        ];
    }
}
