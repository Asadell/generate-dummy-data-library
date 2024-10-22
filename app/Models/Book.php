<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $primaryKey = 'id_book'; // Primary key name
    protected $fillable = [
        'title', 'author', 'publisher', 'stock', 'publication_year', 'isbn', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id_category'); // Inverse one-to-many relationship with category
    }

    public function loans()
    {
        return $this->hasMany(Loan::class, 'book_id', 'id_book'); // One-to-many relationship with loans
    }
}
