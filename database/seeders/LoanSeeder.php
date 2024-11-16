<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Member::count() === 0 || Book::count() === 0) {
            $this->command->error("Tabel 'members' dan 'books' harus memiliki data terlebih dahulu.");
            return;
        }

        for ($i = 0; $i < 10000; $i++) {
            Loan::factory(200)->create();
        }
    }
}
