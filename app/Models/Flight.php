<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'airlines_id',
        'destination_id',
        'departure',
        'destination',
        'departure_date',
        'return_date',
        'passenger_limit',
        'class_type',
        'price'
    ];

    public function airline()
    {
        return $this->belongsTo(Airlines::class, 'airlines_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
