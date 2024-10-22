<?php

namespace Database\Factories;

use App\Models\Librarian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Librarian>
 */
class LibrarianFactory extends Factory
{
    protected $model = Librarian::class;

    public function definition()
    {
        return [
            'hire_date' => $this->faker->date,
            'salary' => $this->faker->numberBetween(2000000, 10000000),
            'phone_number' => preg_replace('/[^0-9]/', '', $this->faker->phoneNumber),
        ];
    }
}
