<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /** @use HasFactory<\Database\Factories\LoanFactory> */
    use HasFactory;

    protected $primaryKey = 'id_loan'; // Primary key name
    protected $fillable = [
        'description', 'loan_date', 'due_date', 'return_date', 'member_id', 'book_id', 'librarian_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id_member'); // Inverse one-to-many relationship with member
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id_book'); // Inverse one-to-many relationship with book
    }

    public function librarian()
    {
        return $this->belongsTo(Librarian::class, 'librarian_id', 'id_librarian'); // Inverse one-to-many relationship with librarian
    }
}
