<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Librarian;
use App\Models\Loan;
use App\Models\Member;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Member::factory(10000)->create(); // 200 * 10,000 = 2,000,000
        }

        Librarian::factory(500)->create();
        Category::factory(100)->create();
    
        for ($i = 0; $i < 100; $i++) {
            Book::factory(10000)->create(); // 300 * 10,000 = 3,000,000
        }

        // Loan::factory(1000)->create(); // 400 * 10,000 = 4,000,000
        // for ($i = 0; $i < 100; $i++) {
        // }
    }
}
