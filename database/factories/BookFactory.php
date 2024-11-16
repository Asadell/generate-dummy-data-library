<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'stock' => $this->faker->numberBetween(1, 100),
            'publication_year' => $this->faker->year,
            'isbn' => $this->faker->isbn13,
            'category_id' => Category::factory(),
        ];
    }
}
