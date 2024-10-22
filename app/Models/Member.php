<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;

    protected $primaryKey = 'id_member'; // Primary key name
    protected $fillable = [
        'name', 'phone', 'email', 'address', 'gender', 'membership_start'
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class, 'member_id', 'id_member'); // One-to-many relationship with loans
    }
}
