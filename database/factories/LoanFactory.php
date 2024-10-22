<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Librarian;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'description' => $this->faker->sentence,
            'loan_date' => $this->faker->date,
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'return_date' => $this->faker->optional()->date,
            'member_id' => Member::factory(),
            'book_id' => Book::factory(),
            'librarian_id' => Librarian::factory(),
        ];
    }
}
