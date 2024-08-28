<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bank;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telephone',
        'email',
        'address',
        'secondary_phone'
    ];

    public function banks()
    {
        return $this->hasMany(Bank::class);
    }
}
