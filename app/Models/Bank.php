<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'account_no',
        'iban',
        'type',
        'status',
        'convertion_rate',
        'location_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
