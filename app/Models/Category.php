<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $primaryKey = 'id_category'; // Primary key name
    protected $fillable = ['category_name']; // Mass assignable fields

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id_category'); // One-to-many relationship with books
    }
}
