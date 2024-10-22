<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    /** @use HasFactory<\Database\Factories\LibrarianFactory> */
    use HasFactory;

    protected $primaryKey = 'id_librarian'; // Primary key name
    protected $fillable = [
        'hire_date', 'salary', 'phone_number'
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class, 'librarian_id', 'id_librarian'); // One-to-many relationship with loans
    }
}
