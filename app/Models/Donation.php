<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'anonymous',
        'comment'
    ];
}
