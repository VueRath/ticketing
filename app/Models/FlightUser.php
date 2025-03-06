<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightUser extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'airlines_id',
        'destinations_id',
        'name',
        'count_people',
        'amount'
    ];

    public function AirlineClass()
    {
        return $this->belongsTo(Airlines::class,'airlines_id');
    }

    public function DestinationClass()
    {
        return $this->belongsTo(Destination::class, 'destinations_id');
    }
}
