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
        Category::factory(100)->create();
        Book::factory(300)->create();
        Member::factory(200)->create();
        Librarian::factory(100)->create();
        Loan::factory(200)->create();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
